<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::group(array('before' => 'auth'), function(){
	Route::get('/', array('as'=> 'login', 'uses' => 'LoginController@index'));
	Route::get('/language/change/{lang}', array('as'=> 'language_change', 'uses' => 'LanguageController@change'));
	Route::group(array('prefix' => 'session'), function(){
		Route::post('store', array('before' => 'csrf', 'as'=> 'init_login', 'uses' => 'LoginController@store'));
	});
// });

Route::group(array('after' => 'auth'), function(){
	Route::group(array('prefix' => 'dashboard'), function()
	{
	    Route::get('/', array('as'=> 'dashboard', 'uses' => 'HomeController@index'));
	    Route::get('profile/{id}', array('as'=> 'profile', 'uses' => 'UsersController@show'));
		Route::resource('additional', 'AdditionalController');
		Route::group(array('prefix' => 'additional'), function(){
			Route::post('store', array('as'=> 'save_additional', 'uses' => 'AdditionalController@store'));
			Route::post('index', array('as'=> 'list_additional', 'uses' => 'AdditionalController@index'));
			Route::post('destroy', array('as'=> 'destroy_additional', 'uses' => 'AdditionalController@destroy'));
		});
		Route::resource('banners', 'BannersController');
		Route::resource('menus', 'MenusController');
		Route::resource('orders', 'OrdersController');
		Route::resource('reports', 'ReportsController');
		Route::resource('restaurants', 'RestaurantsController');
		Route::resource('users', 'UsersController');
		Route::resource('message', 'MessageController');

		Route::get('test', function(){
			$users = User::all();
			$users->each(function($user){
        		// var_dump($user->getName());
        		print_r($user->getRoleName()->get());
    		});
		});
	});

	Route::get('/session/{id}/destroy', array('as'=> 'logout', 'uses' => 'LoginController@destroy'), function(){
		// Auth::logout();
		// return Redirect::to('/');
	});
});