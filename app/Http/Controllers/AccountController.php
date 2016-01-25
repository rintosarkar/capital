<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Auth;

use App\Account;
use App\Deposit;
use App\Transaction;
use App\Roirecord;
use App\Carry;
use App\User;
use App\Downline;
use DB;


class AccountController extends Controller
{
	private $uplineId;
	private $positon=[];

	public function __construct()
	{
		
	}

    public function getDeposit()
    { 
    	return view('accounts.deposit');        
	}

	/**
	* Carry is recursive function
	* When user make deposit this function help to find user position where is.
	* Left or Right of upliner. And add points
	*
	* @return 
	*/
	
	public function carry($uid = null, $upid = null, $amount=null )
	{
		 
		// echo "<br/>".$upid . "<br/>";
		  
		$uplineUserId = User::where('id', $upid)->first()->upline_id;
		 
		$checkPosition = Downline::select('left_member_id', 'right_member_id')->where('user_id',$upid)->get();

		  // Carry::where('user_id', $upid)->update(['right_carry'=>250]);  	 


		 if($checkPosition){
		 	foreach ($checkPosition as $position) {
		 		 if($position->left_member_id == $uid && $position->right_member_id != $uid)
		 		 {
		 		 	$left_carry = Carry::where('user_id', $upid)->first()->left_carry;
		 		 	$newAmount = $left_carry + $amount;
		 		 	Carry::where('user_id', $upid)->update(['left_carry'=>$newAmount]);
		 		 }
		 		 else
		 		 {
		 		 	$right_carry = Carry::where('user_id', $upid)->first()->right_carry;
		 		 	$newAmount = $right_carry + $amount;
		 		 	Carry::where('user_id', $upid)->update(['right_carry'=>$newAmount]);
		 		 }
		 	}
		 }
		
		// recursivly find upper lavel users
		if(!empty($uplineUserId)){
			$this->carry($upid, $uplineUserId, $amount);
		}
	}
	// carry function end

	

	// Updating Matching Qualify start
	public function updateMatchingQualify()
	{
		$results = DB::table('carries')
                    ->join('transactions', function ($join) {
                        $join->on('carries.user_id', '=', 'transactions.user_id')
                             ->where('transactions.purpose', '=', 12);
                    })
                    ->get();

		            foreach ($results as $result) {

		                if($result->left_carry != 0 || $result->right_carry !=0 && $result->matching_qualify !=1){
		                	Carry::where('user_id', $result->user_id)->update(['matching_qualify'=>1]);
		                	
		                }
		                     }                                   
			           
			           
	}
	// Updating Matching Qualify end



	/**
	* makeDeposit
	* Data insert into deposit, transaction and roirecords table 
	* Upade carries table
	*
	* @return string
	*/

	public function makeDeposit(Request $request)
	{	
		// return $request->pmethod;
		$depositAmount = $request->deposit;
		if($depositAmount)
		{
			if($request->pmethod == 'pm')
			{
				return "Processing with Perfect Money";
			}
			else
			{
				$account = Account::where('user_id',Auth::user()->id)->first();
				if($account->balance<$depositAmount)
				{
					return redirect()->back()->with('message','You do not have sufficient balance');
				}else
				{
					Deposit::insert([
						'user_id' => Auth::user()->id,
						'amount' => $depositAmount,
						'pmnt_method'  => $request->pmethod,
						'pmnt_account' => 'Wallet Balance',
						'rcvd_date' => Carbon::now()
						]);

					// return "Successfully deposited";
					$newDepBalance = $account->balance-$depositAmount;
					Account::where('user_id',Auth::user()->id)
							->update(['balance'=>$newDepBalance]);
					
					// return "Successfully updated";

					Transaction::insert(
					[
					'tnx_id' => 'nd_'.rand(1,99999999),
					'amount' => $depositAmount,
					'sign'   => '-',
					'purpose' => 11,
					'date'  => Carbon::now(),   
					'user_id' => Auth::user()->id,
					// 'related_id' =>22
					]);	

					// return "Successfully transaction inserted";	

					// Create ROI (Return of Income) Schedule

					$depositTableRow = Deposit::where('user_id',Auth::user()->id)->first();
					
					$roiAmount = ($depositAmount * 20)/100;
					
					for($i = 1; $i<=10; $i++){
						Roirecord::insert([
								'deposit_id' => $depositTableRow->id,
								'amount'	=> $roiAmount,
								'pmnt_date'=> Carbon::now()->addMonths($i),
								'terms'		=> $i,
								'status'	=> 0	
							]);
					} 
					// end for loop
					// Create ROI (Return of Income) Schedule End


					// Add Referrar's Comission 

					$referrarId = Auth::user()->referrar_id;
					$comissionAmount = (10*$depositAmount)/100;
					$referrarBalance = Account::where('user_id',$referrarId)->first()->balance;
					$newRefBalance = $referrarBalance+$comissionAmount;
					Account::where('user_id', $referrarId)->update(['balance' => $newRefBalance]);
					
					// Add Referrar's Comission End


					//Insert Transaction Table Start

					Transaction::insert(
					[
					'tnx_id' => 'drc_'.rand(1,99999999),
					'amount' => $comissionAmount,
					'sign'   => '+',
					'purpose' => 12,
					'date'  => Carbon::now(),   
					'user_id' => $referrarId,
					'related_id' =>Auth::user()->id
					]);

					//Insert Transaction Table End
					
					$this->carry(Auth::user()->id, Auth::user()->upline_id, $depositAmount);

					$this->updateMatchingQualify();

					return redirect()->back()->with('message', "Successfully Deposited");

				}
			}
			
		}
		else
		{
			return redirect()->back()->with('message','Request could not processd');
		}
	}


}
