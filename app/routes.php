<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the ClosurCrash Canyon season 2e to execute when that URI is requested.
|
*/

Route::get('/', array(
	'as' => 'home',
	'uses' => 'HomeController@home'
));
//----------------------------------------------------------Merchant/Developer API routes--------------------------------
Route::any('sandbox/api/merchantapi', array(
    	'as' => 'sandbox/api/merchantapi',
    	'uses' => 'DeveloperController@purchase'
    ));
    //checkout with paypal
Route::post('sandbox/api/merchantapi/paypal', array(
    	'as' => 'sandbox/api/merchantapi/paypal',
    	'uses' => 'DeveloperController@checkout'
    ));
Route::any('api/merchantapi/paypalconfirm', array(
    	'as' => 'api/merchantapi/paypalconfirm',
    	'uses' => 'DeveloperController@ppconfirm'
    ));
Route::any('api/merchantapi/paypalcancel', array(
    	'as' => 'api/merchantapi/paypalcancel',
    	'uses' => 'DeveloperController@ppcancel'
    ));
    //checkout with mobile money (MTN)
Route::any('sandbox/api/merchantapi/mobilemoney', array(
    	'as' => 'sandbox/api/merchantapi/mobilemoney',
    	'uses' => 'DeveloperController@checkout'
    ));
	// handles cancel requests from STP payment provider
	Route::any('sandbox/api/merchantapi/cancelstppurchase', array(
		'as' => 'sandbox/api/merchantapi/cancelstppurchase',
		'uses' => 'DeveloperController@cancelStpPurchase'
	));
    // handles confirm requests from STP payment provider
	Route::any('sandbox/api/merchantapi/confirmstppurchase', array(
		'as' => 'sandbox/api/merchantapi/confirmstppurchase',
		'uses' => 'DeveloperController@cancelStpPurchase'
	));
    //handle login route
    Route::post('sandbox/api/merchantapi/login', array(
		'as' => 'sandbox/api/merchantapi/login',
		'uses' => 'DeveloperController@doPurchase'
	));

//});
//--------------------------------------------------------------- End merchant Routes -------------------------------------
/*
| Route to static pages
*/
/* ----------------------------------------------------------------------- */
Route::get('about', array(
	'as' => 'about',
	'uses' => 'DashboardController@about'

	));

Route::get('terms', array(
	'as' => 'terms',
	'uses' => 'DashboardController@terms'

	));

Route::get('privacy', array(
	'as' => 'privacy',
	'uses' => 'DashboardController@privacy'

	));
/* ------------------------------------------------------------------------ */


/* 
| Authentication group
*/
Route::group(array('before' => 'auth'), function(){

	Route::get('dashboard', array(
	'as' => 'dashboard',
	'uses' => 'DashboardController@dashboard'

	));

	Route::get('dashboard/me', array(
	'as' => 'viewprofile',
	'uses' => 'DashboardController@viewUserProfile'

	));

	/**************************************/
	Route::post('uploadphoto', array(
	'as' => 'uploadphoto',
	'uses' => 'DashboardController@uploadPhoto'
	));
	/******************************************/

	//send money to user
    Route::get('dashboard/send', array(
	'as' => 'send',
	'uses' => 'DashboardController@sendpayment'

	));
    
    //request a payment from a third party
    Route::get('dashboard/request', array(
	'as' => 'request',
	'uses' => 'DashboardController@requestpayment'

	));
    
    Route::get('dashboard/messagecenter', array(
	'as' => 'messagecenter',
	'uses' => 'DashboardController@messagecenter'

	));
	
    Route::get('dashboard/developer', array(
	'as' => 'developer',
	'uses' => 'DashboardController@devzone'

	));
    
    Route::get('dashboard/apidocs', array(
	'as' => 'apidocs',
	'uses' => 'DashboardController@apidoc'

	));
    //currency conversion
    Route::get('dashboard/cnv', array(
	'as' => 'cnv',
	'uses' => 'DashboardController@convert'
	));
    //create a new developer/merchant account
    Route::post('merchant', array(
	'as' => 'merchant',
	'uses' => 'DeveloperController@createDeveloper'
	));

	/*
	| CSRF protection group
	*/
	Route::group(array('before' => 'csrf'), function(){

		/*
		| Change password (POST)
		*/
		Route::post('change-password-post', array(
		'as' => 'change-password-post',
		'uses' => 'AccountController@handleChangePassword'
		));

	});

	/*
	| Change password (GET)
	*/
	Route::get('dashboard/passwordconfig', array(
		'as' => 'dashboard.change-password',
		'uses' => 'AccountController@getChangePassword'
	));


	/*
	| Edit User (GET)
	*/
	Route::controller('dashboard/account', 'AccountController');


	/*
	| Logout
	*/
	Route::get('logout', array(
		'as' => 'logout',
		'uses' => 'AccountController@handleLogout'
	));

});

/* 
| Unauthentication group
*/
Route::group(array('before' => 'guest'), function(){

	/*
	| CSRF protection group
	*/
	Route::group(array('before' => 'csrf'), function(){

		/*
		| Create account (POST)
		*/
		Route::post('register', array(
			'as'=>'register', 
			'uses'=>'AccountController@handleRegister'
		));

		/*
		| Login account (POST)
		*/
		Route::post('login', array(
			'as'=>'login', 
			'uses'=>'AccountController@handleLogin'
		));

		/*
		| Forgot Password (POST)
		*/
		Route::post('forgotpasswd', array(
			'as' => 'forgotpasswd',
			'uses' => 'AccountController@handleForgotpasswd'
		));

		/*
		| Recover Password (GET)
		*/
		Route::post('recovery', array(
			'as' => 'recovery',
			'uses' => 'AccountController@handleRecovery' 
		));

	});
	/*
	| Register account (GET)
	*/
	Route::get('register', array(
		'as' => 'get-register',
		'uses' => 'AccountController@getRegister'
	));

	/*
	| Login account (GET)
	*/
	Route::get('login', array(
		'as' => 'get-login',
		'uses' => 'AccountController@getLogin'
	));

	/*
	| Forgot Password (GET)
	*/
	Route::get('forgotpasswd', array(
		'as' => 'forgotpasswd',
		'uses' => 'AccountController@getForgotpasswd'
	));

	/*
	| Create account (GET)
	*/
	Route::get('create', array(
		'as' => 'account-create',
		'uses' => 'AccountController@getCreate'
	));

	Route::get('activate/{code}', array(
		'as' => 'account-activate',
		'uses' => 'AccountController@handleActivate' 
	));

	/*
	| Recover Password (GET)
	*/
	Route::get('recovery/{link}', array(
		'as' => 'recovery',
		'uses' => 'AccountController@recovery' 
	));

});


Route::group(array('before' => 'auth'), function(){
	/*
	| PayPay Routes
	*/
	Route::any('payment', array(
	    'as' => 'payment',
	    'uses' => 'PaymentController@postPayment',
	));

	// this is after make the payment, PayPal redirect back to your site
	Route::get('payment/status', array(
		'as' => 'payment-status',
		'uses' => 'PaymentController@getPaymentStatus'
	));

	/*
	| Mobile Money Routes
	*/
	/*Route::post('transfer', array(
	    'as' => 'transfer',
	    'uses' => 'PaymentController@postTransfer',
	));
    */


	Route::get('dashboard/transaction', array(
		'as' => 'dashboard.transaction',
		'uses' => 'PaymentController@viewTransaction'
	));

});


Route::group(array('before' => 'auth'), function(){
	/*
	| STP Routes
	*/
	Route::any('dashboard/stpnotif', array(
	    'as' => 'stpnotif',
	    'uses' => 'StpayController@notifPayment',
	));

	// handles confirm requests for STP transactions
	Route::get('dashboard/stpconfirm', array(
		'as' => 'stpconfirm',
		'uses' => 'StpayController@confirmPayment'
	));
    //cancel url
    Route::get('dashboard/cancel', array(
		'as' => 'stpcancel',
		'uses' => 'StpayController@cancelTransaction'
	));

});

Route::group(array('before' => 'auth'), function(){
	/*
	| Eway Routes
	*/
	Route::any('dashboard/eway', array(
	    'as' => 'ewaypay',
	    'uses' => 'EwayController@makePayment',
	));

	// handles confirm requests fro eway transactions
	Route::get('dashboard/ewayconfirm', array(
		'as' => 'ewayconfirm',
		'uses' => 'EwayController@confirmPayment'
	));
    //cancel url
    Route::get('dashboard/ewaycancel', array(
		'as' => 'ewaycancel',
		'uses' => 'EwayController@cancelTransaction'
	));

});

Route::group(array('before' => 'auth'), function(){
	/*
	| Mobile money management Routes
	*/
    //request payment
	Route::any('dashboard/momo', array(
	    'as' => 'momo',
	    'uses' => 'MobilemoneyController@requestPayment',
	));

	// make deposit
	Route::get('dashboard/momod', array(
		'as' => 'momoconfirm',
		'uses' => 'MobilemoneyController@makePayment'
	));
    // check payment status 
	Route::get('dashboard/momoc', array(
		'as' => 'momoconfirm',
		'uses' => 'MobilemoneyController@checkPayment'
	));
    //confirm momo transaction
    Route::get('dashboard/confirmmomotransaction', array(
		'as' => 'momoconfirm',
		'uses' => 'MobilemoneyController@confirmmomotransaction'
	));

});



