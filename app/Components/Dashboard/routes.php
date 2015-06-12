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
 
Route::group(['prefix' => 'backend'], function() { 
    Route::get('/', function(){ return redirect()->route('backend.home');});
    Route::get('/dashboard', ['as' => 'backend.home', 'uses' => 'Backend\HomeController@index']);
});