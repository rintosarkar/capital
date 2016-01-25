<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\RtwRequest;
use App\Http\Requests\RtrRequest;
use App\Http\Requests\WtwRequest;
use Carbon\Carbon;
use Session;
use Crypt;

use App\Account;
use App\Transaction;
use App\User;
use Auth;

class BalanceTransferController extends Controller
{
    
    public function getTransfer(){
    	$availableBalance = Account::where('user_id', Auth::id())->first();
    	return view('accounts.transfer',compact('availableBalance'));
    }

    public function rtwTransfer(RtwRequest $request, Account $account)
    {   
        // return $request->all();
    	$rtwAmount = $request->rtwAmount;
        $rtwPin = $request->rtwPin;

        if($rtwPin != User::where('id',Auth::id())->first()->pin){
            return redirect()->back()->with('message','Invalid PIN');
        }

    	return $account->rtwBalanceTransfer($rtwAmount);
    }


    public function rtrTransfer(RtrRequest $request, Account $account){
        // return $request->all();
    	$rtrAmount = $request->rtrAmount;
    	$receiverName = $request->rtrReceiverId;
        
        $rtrPin = $request->rtrPin;
        
        if($rtrPin != User::where('id',Auth::id())->first()->pin)
        {
            return redirect()->back()->with('message','Invalid PIN');
        }
        
        else if(User::where('username', $receiverName)->first() === null)
        {
            return redirect()->back()->with('message','Invalid receiver name');
        }

          
            return $account->rtrBalanceTransfer($rtrAmount, $receiverName);
    }

    // rtrtransfer end




    public function wtwTransfer(WtwRequest $request, Account $account){
    	$wtwAmount = $request->wtwAmount;
    	$receiverName = $request->wtwReceiverId;

        $wtwPin = $request->wtwPin;
        
        if($wtwPin != User::where('id',Auth::id())->first()->pin){
            return redirect()->back()->with('message','Invalid PIN');
        }

        else if(User::where('username', $receiverName)->first() === null)
        {
            return redirect()->back()->with('message','Invalid receiver name');
        }

    	return $account->wtwBalanceTransfer($wtwAmount, $receiverName);
    }




    public function getConfirm($tnx){
            // return $tnx;
            $tnx_id = Crypt::decrypt($tnx);

            $rTw = substr($tnx_id, 0, 3);
            if($rTw== 'r2w')
            {
                    $confirmVar =Transaction::where('tnx_id',$tnx_id)->get();

                    return view( 'accounts.transferConfirmation',compact('confirmVar'));
            }
            else
            {
                   $confirmVar =Transaction::where('tnx_id',$tnx_id)->get();
                   $forReceiver = Transaction::where('tnx_id',$tnx_id)->first()->related_id;
                   $receiver   = User::where('id', $forReceiver)->first()->username;
               
                   return view( 'accounts.transferConfirmation', compact('confirmVar','receiver') ); 
            }

            
    }





    public function checkRtwPin($rtwPin){
    	$pin = Auth::user()->pin;
    	if($pin != $rtwPin){
    	echo json_encode("Invalid Security PIN");	
    	}
    	
    }

    public function checkRtwAmount($rtwAmount){
    	$roi_balance = Account::where('user_id',Auth::id())->first()->roi_balance;
    	if($roi_balance < $rtwAmount){
    		echo json_encode("You do not have sufficient balance");	
    	}
    	
    }

    public function checkRtrAmount($rtrAmount)
    {
        $roi_balance = Account::where('user_id',Auth::id())->first()->roi_balance;
        if($roi_balance < $rtrAmount){
            echo json_encode("You do not have sufficient balance"); 
        }
        
    }

    public function checkRtrReceiver($rtrReceiver)
    {
        if(User::where('username', $rtrReceiver)->first() === null){
            echo json_encode("Invalid receiver name"); 
        }
        
    }

    public function checkRtrPin($rtrPin)
    {
        $pin = Auth::user()->pin;
        if($pin != $rtrPin){
        echo json_encode("Invalid Security PIN");   
        }
    }



    public function checkWtwAmount($wtwAmount){
        $balance = Account::where('user_id',Auth::id())->first()->balance;
        if($balance < $wtwAmount){
            echo json_encode("You do not have sufficient balance"); 
        }
    }

    public function checkWtwReceiver($wtwReceiver)
    {
        if(User::where('username', $wtwReceiver)->first() === null){
            echo json_encode("Invalid receiver name"); 
        }
        
    }

    public function checkWtwPin($wtwPin)
    {
        $pin = Auth::user()->pin;
        if($pin != $wtwPin){
        echo json_encode("Invalid Security PIN");   
        }
    }
}
