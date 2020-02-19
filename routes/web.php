<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.login',['title'=>'Dashboard']);
});

Route::redirect('admin','admin/login',301);

Route::prefix('admin')->group(function(){
	Auth::routes([
		  'register' => false, // Registration Routes...
		  'reset' => false, // Password Reset Routes...
		  'verify' => false, // Email Verification Routes...
	]);
	
	Route::get('/home', 'HomeController@index')->name('home');	
});

