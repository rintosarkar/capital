<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Auth;

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
    	// return $request->_token;
    	$user->insert([
    	    [
    	    'username' => $request->username,
    	    'full_name' => $request->full_name,
    	    'gender' => $request->gender,

    	    'password' => bcrypt($request->password),
    	    'remember_token' => $request->_token,
    	    'address' => $address,

    	    'phone_number' => $request->phone_number,
    	    'country' => $request->country,
    	    'sponsor_id' => $request->referrar_id,

    	    'upline_id' => $request->upline_id,
    	    'pin' => 1235,
    	    'is_block' => 'n',

    	    'block_issue' => 'nothing',
    	    'last_login_ip' => '123.1236.251',
    	    'is_logged' => '1',

    	    'status' => 1,
    	    'signup_date' => Carbon::now(),
    	    'last_login_time' => Carbon::now()
    	    ]
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
}
