<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\Auth\Guard;
use Carbon\Carbon;

use App\User;
use DB;


use Auth;

class AdminController extends Controller
{

   public function blank(){
   		return view('admin.blank');
   }

	public function getDeposit(){
		return "Admin Make Deposit Page";
	}

	public function getWithdrawal(){
		return "Admin Withdrawasl Page";
	}

	public function getTransfer(){
		return "Admin Transfer Page";
	}
    

    
}
