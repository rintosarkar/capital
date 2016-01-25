<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use App\Http\Requests\UserRegRequest;
use App\Http\Controllers\Controller;

use App\Account;
use App\Carry;
use App\Downline;
use App\User;
use Carbon\Carbon;
use App\Transaction;
use App\Role;
use Auth;
use DB;

class UserController extends Controller
{

    public $uplineId;
    public $requestValue;

    public function index(User $user){
        $accounts = Account::where('user_id', Auth::user()->id)->first();
        $balance = number_format($accounts->balance,2);
    	return view('user.index', compact('balance'));
    }


    public function postRegister()
    {
    	return view('user.register');
    }

    
/**
* Method Name :Store
* Insert data to User Table and consequencesly insert to Account, Carries and Downline table
*
*
*/





    public function store(UserRegRequest $request, User $user){
    	
         $uplineUser = User::where('username',$request->upline_id)->first();
         $referrarUser = User::where('username', $request->referrar_id)->first();
         $uplineId = $uplineUser->id; 
         $requestValue = $request->placement;
         // return $request->full_name . "++". preg_replace('/\s+/', '', strtolower($request->username));
         // $username = 
        
    	$address = $request->address1 . ",". $request->address2;
    	// return 
    	$user->insert([
    	    [
    	    'username' => preg_replace('/\s+/', '', strtolower($request->username)),
    	    'full_name' => $request->full_name,
    	    'gender' => $request->gender,
            'email' => $request->email,

    	    'password' => bcrypt($request->password),
    	    'remember_token' => $request->_token,
    	    'address' => $address,

    	    'phone_number' => $request->phone_number,
    	    'country' => $request->country,
            'account_no' => 555210,
    	    'referrar_id' => $referrarUser->id,

    	    'upline_id' => $uplineUser->id,
    	    'pin' => rand(1,99999999),
    	    // 'is_block' => 'n',

    	    // 'block_issue' => 'nothing',
    	    // 'last_login_ip' => '123.1236.251',
    	    // 'is_logged' => '1',

    	    // 'status' => 1,
    	    'signup_date' => Carbon::now(),
    	    'last_login_time' => Carbon::now()
    	    ]
    	]);

        $lastRegUser = $user->where('username', preg_replace('/\s+/', '', strtolower($request->username)))->first();        
        $role = Role::where('id',3)->first();
        $lastRegUser->assign($role);
        Account::insert([
            'balance' => 0,
            'roi_balance' => 0,
            'user_id' => $lastRegUser->id,
            'acc_type' =>'0'
            ]);

        Carry::insert([
            'user_id' => $lastRegUser->id,
            'left_carry' => 0,
            'right_carry' => 0,
            'matching_qualify' =>0
            ]);

        Downline::insert([
            'user_id' => $lastRegUser->id,
            'left_member_id' => 0,
            'right_member_id' =>0
            ]);

        /*Downline::where('user_id', $uplineUser->id)
                    ->update(['right_member_id' => $request->placement]);*/


        /*return $downLineTable = Downline::where('user_id', $uplineId)->first();
        if($downLineTable->left_member_id == 0 && $request->placement != 'right'){
                    Downline::where('user_id', $uplineUser->id)
                                ->update(['left_member_id' => $lastRegUser->id]);  
                }
        else
                {
                   Downline::where('user_id', $uplineUser->id)
                    ->update(['right_member_id' => $lastRegUser->id]); 
                }
                */

              
        $position = preg_replace('/\s+/', '', strtolower($requestValue))."_member_id";
        Downline::where('user_id', $uplineUser->id)
                    ->update([$position => $lastRegUser->id]);

      
    	return redirect()->back();
    }

    

    public function getWithdrawal(){
    	return "User Withdrawasl Page";
    }

    
    public function getBalance(){
    	return "User Balance Page";
    }

    public function checkUserLive(User $user, $uname=null, Request $request){
        $userInfo = User::where('username', $uname)->first();

        // echo $userId;
        // echo json_encode($userInfo->username);

        // if(Request::ajax()) {
        //       $data = Input::all();
        //       print_r($data);
        //     }

        if (User::where('username', $uname)->exists())
         {
           echo json_encode("is not available");
         }
        else
        {
            echo json_encode("is available" ); 
        }
        
    }

    public function checkReferrar( $referralId =null){
        

        if (User::where('username', $referralId)->exists())
         {
           echo json_encode("This is Valid id");
         }
        else
        {
            echo json_encode( "Please enter a valid ID!" ); 
        }

    }

    // check Referrar End

    

    /**
    * Check for user existance and brought downline left right
    * Query build
    *
    * @return array[]
    */


    public function checkUplineUser($uplineId =null){
        

       $result =[];

       if (User::where('username', $uplineId)->exists())
         {
           array_push($result, "is available");
           
         }
        else 
        {
            echo json_encode("User not found");
            return;           
        }
        
        $userInfo = User::where('username', $uplineId)->first();

            if($userInfo->id){
                $downLineTableRow = Downline::where('user_id', $userInfo->id)->first();
                $left_member_id = $downLineTableRow->left_member_id;
                $right_member_id = $downLineTableRow->right_member_id;

                    if($left_member_id == 0 && $right_member_id == 0)
                    {
                        array_push($result, "Left , Right");
                    }
                    elseif($left_member_id != 0 && $right_member_id == 0 )
                    {
                        array_push($result, "Right");   
                    }
                    elseif($left_member_id == 0 && $right_member_id != 0 )
                    {
                        array_push($result, "Left");   
                    }
                    else{
                        array_push($result, "No free position here. Please try another upline id");
                    }

                
            }else{
                array_push($result, "Not Valid user found");
            }
        
        echo json_encode($result);

    }

    // check upline user funcion end

    public function payFromWallet(){
        $accountTable = Account::where('user_id',Auth::user()->id)->first();
        if($accountTable->balance < 25 ){
            return redirect()->back()->with('message' ,'You have not sufficent balance');
        }
        else
        {
            $newBalance = $accountTable->balance-25;
            Account::where('user_id', Auth::user()->id)->update(['balance'=>$newBalance]);
            Transaction::insert(
            [
            'tnx_id' => 'aa_'.rand(1,99999999),
            'amount' => 25,
            'sign'   => '-',
            'purpose' => 10,
            'date'  => Carbon::now(),   
            'user_id' => Auth::user()->id,
            // 'related_id' =>22
            ]);

            User::where('id',Auth::user()->id)->update(['status'=> 1]);
            return redirect()->back()->with('message' ,'Successfully Activated');
        }
    }

    public function transactionType($trans_id){
            $trans_type = [
                    1=>  'Spot Commission',
                    2=>  'Binary Commission',
                    3=>  'Account Upgrade',
                    4=>  'Upgrade charge deduction',
                    5=>  'Wallert to Wallet',
                    6=>  'ROI to ROI',
                    7=>  'ROI to wallet',
                    8=>  'Withdrawn',
                    9=>  'Reject Withdrawal',
                    10=> 'Account activation',
                    11=> 'New deposit',
                    12=> 'Direct referral comission',
                    13=> 'ROI to Wallet processing fee'
            ];
            return $trans_type[$trans_id];

    }

    
    
}
