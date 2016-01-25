<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Account;
use App\Transaction;
use Carbon\Carbon;
use Crypt;

class Account extends Model
{
    protected $table = 'accounts';

    public $timestamps = false;


    public function createAccounts()
    {
      return $lastRegUserId = User::get()->last()->id;
    }




    /**
    * rtwBalanceTransfer function
    * Deduct from users roi balance of Account table
    * Insert deduct transaction on transaction table, Add amount to wallet balance again insert adding transaction
    * @return string
    */
    public function rtwBalanceTransfer($rtwAmount){
    	    	// return $amount;
                $transferComission = 2*$rtwAmount/100; //generate 2% blance transfer comission
                $rtwAmountWithComission = $rtwAmount + $transferComission;

    	    	if($rtwAmountWithComission){
    	    		$roiRecord = Account::where('user_id', Auth::id())->first();
    	    		if( $rtwAmountWithComission < $roiRecord->roi_balance ){
                        
    	    			$newRoiBalanceAfterDeduct = $roiRecord->roi_balance - $rtwAmountWithComission;
    	    			Account::where('user_id', Auth::id())->update(['roi_balance' => $newRoiBalanceAfterDeduct]);

                        $tnx_id = 'r2w_'.rand(1,99999999);
    	    			Transaction::insert(
    						[
    						'tnx_id' => $tnx_id,
    						'amount' => $rtwAmount, //here is a question
    						'sign'   => '-',
    						'purpose' => 7,
                            'proce_fee' => $transferComission,
    						'date'  => Carbon::now(),   
    						'user_id' => Auth::id(),
    						]);

    					$preBalance = $roiRecord->balance;
    					$newBalanceAfterRoiAdded = $preBalance + $rtwAmount;
                        
    	    			Account::where('user_id', Auth::id())->update(['balance' => $newBalanceAfterRoiAdded]);
    	    			Transaction::insert(
    						[
    						'tnx_id' => 'r2w_'.rand(1,99999999),
    						'amount' => $rtwAmount,
    						'sign'   => '+',
    						'purpose' => 7,
    						'date'  => Carbon::now(),   
    						'user_id' => Auth::id()
    						]);

                        $tnx = Crypt::encrypt($tnx_id);
                        
                        return redirect()->route('user.transfer.confirm', $tnx);
    	    		}
    	    		else
    	    		{	
    	    			return redirect()->back()->with('message','You do not have sufficient balance');
    	    		}
    	    	}
    	    	else
    	    	{
    	 			return redirect()->back()->with('message','Request could not processd');
    	    	}
    }
    // rtwBalanceTransfer function end

    
    /**
    * rtrBalanceTransfer function
    * Deduct from users roi balance of Account table
    * Insert deduct transaction on transaction table, Add amount to receiver roi balance again insert adding transaction
    * @return string
    */
    public function rtrBalanceTransfer($rtrAmount, $receiverName){
    	    	// return $rtrAmount;
    			// return $receiverName;
    	    	if($rtrAmount){
    	    		
    	    		$roiRecord = Account::where('user_id', Auth::id())->first();
    	    		
    	    		$receiverInfo = User::where('username', $receiverName)->first(); // for getting receiver id	

    	    		if( $rtrAmount < $roiRecord->roi_balance ){
    	    			$newRoiBalanceAfterDeduct = $roiRecord->roi_balance - $rtrAmount;
    	    			Account::where('user_id', Auth::id())->update(['roi_balance' => $newRoiBalanceAfterDeduct]);
                        $tnx_id = 'r2r_'.rand(1,99999999);
    	    			Transaction::insert(
    						[
    						'tnx_id' => $tnx_id,
    						'amount' => $rtrAmount,
    						'sign'   => '-',
    						'purpose' => 6,
    						'date'  => Carbon::now(),   
    						'user_id' => Auth::id(),
    						'related_id' =>$receiverInfo->id,
    						]);


    					$receiverAccount = Account::where('user_id',$receiverInfo->id)->first();
    					$preBalance = $receiverAccount->roi_balance;
    					$newBalanceAfterRoiAdded = $preBalance + $rtrAmount;
    					
    	    			Account::where('user_id', $receiverInfo->id)->update(['roi_balance' => $newBalanceAfterRoiAdded]);
    	    			Transaction::insert(
    						[
    						'tnx_id' => 'r2r_'.rand(1,99999999),
    						'amount' => $rtrAmount,
    						'sign'   => '+',
    						'purpose' => 6,
    						'date'  => Carbon::now(),   
    						'user_id' => Auth::id(),
    						'related_id' =>$receiverInfo->id,
    						]);

    	    				// Sending Email to both with success message and information

    	    			// return redirect()->back()->with('message','Successfully Balance Transferd');
                        $tnx = Crypt::encrypt($tnx_id);
                        return redirect()->route('user.transfer.confirm', $tnx);
    	    		}
    	    		else
    	    		{	
    	    			return redirect()->back()->with('message','You do not have sufficient balance');
    	    		}
    	    	}
    	    	else
    	    	{
    	 			return redirect()->back()->with('message','Request could not processd');
    	    	}
    }
    // rtrBalanceTransfer function end


    /**
    * rtrBalanceTransfer function
    * Deduct from users roi balance of Account table
    * Insert deduct transaction on transaction table, Add amount to receiver roi balance again insert adding transaction
    * @return string
    */
    public function wtwBalanceTransfer($wtwAmount, $receiverName){
    	    	// return $wtwAmount;
    			// return $receiverName;
    	    	if($wtwAmount){
    	    		
    	    		$balanceRecord = Account::where('user_id', Auth::id())->first();
    	    		
    	    		$receiverInfo = User::where('username', $receiverName)->first(); // for getting receiver id	

    	    		if( $wtwAmount < $balanceRecord->balance ){
    	    			$newBalanceAfterDeduct = $balanceRecord->balance - $wtwAmount;
    	    			Account::where('user_id', Auth::id())->update(['balance' => $newBalanceAfterDeduct]);
                        $tnx_id = 'w2w_'.rand(1,99999999);
    	    			Transaction::insert(
    						[
    						'tnx_id' => $tnx_id,
    						'amount' => $wtwAmount,
    						'sign'   => '-',
    						'purpose' => 5,
    						'date'  => Carbon::now(),   
    						'user_id' => Auth::id(),
    						'related_id' =>$receiverInfo->id,
    						]);

    	    			
    					$receiverAccount = Account::where('user_id',$receiverInfo->id)->first();
    					$preBalance = $receiverAccount->balance;
    					$newBalanceAfterRoiAdded = $preBalance + $wtwAmount;
    					
    	    			Account::where('user_id', $receiverInfo->id)->update(['balance' => $newBalanceAfterRoiAdded]);
    	    			Transaction::insert(
    						[
    						'tnx_id' => 'w2w_'.rand(1,99999999),
    						'amount' => $wtwAmount,
    						'sign'   => '+',
    						'purpose' => 5,
    						'date'  => Carbon::now(),   
    						'user_id' => Auth::id(),
    						'related_id' =>$receiverInfo->id,
    						]);

    	    				// Sending Email to both with success message and information

    	    			// return redirect()->back()->with('message','Successfully Balance Transferd');
                        $tnx = Crypt::encrypt($tnx_id);
                        return redirect()->route('user.transfer.confirm', $tnx);
    	    		}
    	    		else
    	    		{	
    	    			return redirect()->back()->with('message','You do not have sufficient balance');
    	    		}
    	    	}
    	    	else
    	    	{
    	 			return redirect()->back()->with('message','Request could not processd');
    	    	}
    }
    // rtrBalanceTransfer function end





}
