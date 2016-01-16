<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;


use App\User;
use DB;


use Auth;

class DashboardController extends Controller
{
    public function index(User $user){

    	$u = $user->find(Auth::user()->id);

    	if($u->is_logged==1){
    		return redirect('dashboard');
    	}
       
       $userIp = $_SERVER['REMOTE_ADDR'];

       $user->where('id', Auth::user()->id)
                    ->update(['is_logged'=> 1, 'last_login_ip' => $userIp, 'last_login_time'=>Carbon::now()]);
       
       
        return view('dashboard.index');
    }

    public function isLogged(){

    }

}
