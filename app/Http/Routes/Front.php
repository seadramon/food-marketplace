<?php 
Route::auth();
Route::get('signin', 'Auth\AuthController@showLoginForm');
Route::post('signin', 'Auth\AuthController@login');
Route::get('verify/{confirmation}', ['as'=> 'register.verify' ,'uses'=>'Auth\EmailController@verifyEmail']);

Route::group(['namespace' => 'Front'], function(){
	Route::get('flush', function() {
		Session::flush();
		Cache::flush();
		return Redirect::route('home');
	});

	Route::get('/', ['as'=>'home', 'uses'=>'HomeController@index']);

	Route::group(['prefix'=>'produk', 'as'=>'produk::'], function(){
		Route::get('/', 				['as' => 'index', 'uses'=>'ProdukController@index']);
		Route::get('create', 			['as' => 'create', 	'middleware'=>'auth', 	'uses'=>'ProdukController@create']);
		Route::post('store',				['as' => 'store', 	'middleware'=>'auth',	'uses'=>'ProdukController@store']);
	});
});