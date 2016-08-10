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

Route::get('/', function () {

    return view('index');
});
Route::get('/{locale}/gallerie',function($locale){
    App::setLocale($locale);
    return view('galleries.gallerie');
});


Route::resource('/config','ConfigController@index');


Route::get('/welcome', function(){
   return view('welcome2');
});

Route::auth();

Route::get('/home', 'HomeController@index');
