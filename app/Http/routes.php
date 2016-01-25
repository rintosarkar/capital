<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('home', function () {
    return view('welcome');
});

	

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth','timeout']], function () {

    Route::get('/',['as' => 'dashboard', 'uses'=>'DashboardController@index']);

});

Route::get('blank', 'AdminController@blank');

// Routing for Admin Panel 

Route::group(['prefix' => 'admin', 'middleware' => ['auth','timeout']],  function () {
	Route::get('/', ['as' =>'admin', 'uses' => 'UserController@index' ]);	
	
	Route::get('/deposit', ['as' =>'admin.deposit', 'uses' => 'AdminController@getDeposit' ]);
	Route::get('/withdrawal', ['as' =>'admin.withdrawal', 'uses' => 'AdminController@getWithdrawal' ]);
	Route::get('/transfer', ['as' =>'admin.transfer', 'uses' => 'AdminController@getTransfer' ]);
	

});

// Routing for User Panel 

Route::group(['prefix' => 'user', 'middleware' => ['auth','timeout']],  function () {
	Route::get('/', ['as' =>'user', 'uses' => 'UserController@index' ]);
	
	Route::get('/register', ['as' =>'user.register', 'uses' => 'UserController@postRegister' ]);
	Route::post('/store', ['as' =>'user.store', 'uses' => 'UserController@store' ]);

	
	
	Route::get('/deposit', ['as' =>'user.deposit', 'uses' => 'AccountController@getDeposit' ]);
	Route::post('/makedeposit', ['as' =>'user.makedeposit', 'uses' => 'AccountController@makeDeposit' ]);

	
	// Routes for internal balance transfer
	Route::get('/transfer', ['as' =>'user.transfer', 'uses' => 'BalanceTransferController@getTransfer' ]);
	Route::post('/rtwtransfer', ['as' =>'user.rtwtransfer', 'uses' => 'BalanceTransferController@rtwTransfer' ]);
	Route::post('/rtrtransfer', ['as' =>'user.rtrtransfer', 'uses' => 'BalanceTransferController@rtrTransfer' ]);
	Route::post('/wtwtransfer', ['as' =>'user.wtwtransfer', 'uses' => 'BalanceTransferController@wtwTransfer' ]);
	Route::get('/balanceTransfer/confirm/{tnx}', ['as' => 'user.transfer.confirm', 'uses' => 'BalanceTransferController@getConfirm']);
	


	Route::get('/withdrawal', ['as' =>'user.withdrawal', 'uses' => 'UserController@getWithdrawal' ]);
	Route::get('/balance', ['as' =>'user.balance', 'uses' => 'UserController@getBalance' ]);

	Route::get('/pay', ['as' => 'user.pay', 'uses' => 'UserController@payFromWallet']);

});


Route::get('/ajaxCheckRtwPin/{rtwPin}', 'BalanceTransferController@checkRtwPin');
Route::get('/ajaxCheckRtwAmount/{rtwAmount}','BalanceTransferController@checkRtwAmount');

Route::get('/ajaxCheckRtrAmount/{rtrAmount}','BalanceTransferController@checkRtrAmount');
Route::get('/ajaxCheckRtrReceiver/{rtrReceiver}','BalanceTransferController@checkRtrReceiver');
Route::get('/ajaxCheckRtrPin/{rtrPin}', 'BalanceTransferController@checkRtrPin');

Route::get('/ajaxCheckWtwAmount/{wtwAmount}','BalanceTransferController@checkWtwAmount');
Route::get('/ajaxCheckWtwReceiver/{wtwReceiver}','BalanceTransferController@checkWtwReceiver');
Route::get('/ajaxCheckWtwPin/{wtwPin}', 'BalanceTransferController@checkWtwPin');






Route::get('/ajaxCheckUser/{uname}','UserController@checkUserLive');
Route::get('/ajaxCheckReferrar/{referralId}','UserController@checkReferrar');  
Route::get('/ajaxCheckUplineUser/{uplineId}','UserController@checkUplineUser'); 





// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::get('auth/register', 'Auth\AuthController@postRegister');