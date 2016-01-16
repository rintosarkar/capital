<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Account;
use App\Carry;
use App\Downline;
use App\User;
use Carbon\Carbon;
use Auth;
use DB;

class UserController extends Controller
{
    
    public function index(){
    	return view('user.index');
    }


    public function postRegister()
    {
    	return view('user.register');
    }

    public function store(Request $request, User $user){
    	
        // return $request->all();
    	$address = $request->address1 . ",". $request->address2;
    	
    	$user->insert([
    	    [
    	    'username' => $request->username,
    	    'full_name' => $request->full_name,
    	    'gender' => $request->gender,
            'email' => $request->email,

    	    'password' => bcrypt($request->password),
    	    'remember_token' => $request->_token,
    	    'address' => $address,

    	    'phone_number' => $request->phone_number,
    	    'country' => $request->country,
            'account_no' => 555210,
    	    'referrar_id' => $request->referrar_id,

    	    'upline_id' => $request->upline_id,
    	    'pin' => substr(md5(uniqid(mt_rand(), true)), 0, 10),
    	    // 'is_block' => 'n',

    	    // 'block_issue' => 'nothing',
    	    // 'last_login_ip' => '123.1236.251',
    	    // 'is_logged' => '1',

    	    // 'status' => 1,
    	    'signup_date' => Carbon::now(),
    	    'last_login_time' => Carbon::now()
    	    ]
    	]);

        $lastRegUserId = $user->get()->last()->id;
        Account::insert([
            'balance' => 50000,
            'roi_balance' => 4500.02,
            'user_id' => $lastRegUserId,
            'acc_type' =>'general'
            ]);

        Carry::insert([
            'user_id' => $lastRegUserId,
            'left_carry' => 2000,
            'right_carry' => 3000,
            'matching_qualify' =>2
            ]);

        Downline::insert([
            'user_id' => $lastRegUserId,
            'left_member_id' => 1,
            'right_member_id' =>2
            ]);

    	return redirect()->back();
    }

    public function getDeposit(){
    	return "Make Deposit Page";
    }

    public function getWithdrawal(){
    	return "User Withdrawasl Page";
    }

    public function getTransfer(){
    	return "User Transfer Page";
    }

    public function getBalance(){
    	return "User Balance Page";
    }

    public function checkUserLive(User $user, $userId=null, Request $request){
        // echo $request->username;
        
        // $userInfo = $user->where('id', $userId)->first();

        echo $userId;
        // echo json_encode($userInfo->username);
        
    }
}
