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

	

Route::group(['prefix' => 'dashboard'], function () {

    Route::get('/',['as' => 'dashboard', 'middleware'=>['auth','timeout'], 'uses'=>'DashboardController@index']);

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
	
	Route::get('/deposit', ['as' =>'user.deposit', 'uses' => 'UserController@getDeposit' ]);
	Route::get('/withdrawal', ['as' =>'user.withdrawal', 'uses' => 'UserController@getWithdrawal' ]);
	Route::get('/transfer', ['as' =>'user.transfer', 'uses' => 'UserController@getTransfer' ]);
	Route::get('/balance', ['as' =>'user.balance', 'uses' => 'UserController@getBalance' ]);

});

Route::get('ajaxCheckUser/{userId}','UserController@checkUserLive'); 





// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');