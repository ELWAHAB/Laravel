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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/welcome', 'Controller@index');

Route::get('/items1', 'ItemsController@show');

//Route::get('/admin', 'Controller@index2');

Route::get('/admin', 'Controller@dbAdmin');

Route::get('/admin/{id}', 'Controller@dbAdminInf');

Route::get('/home', 'Controller@dbHome');

// this routes for Post

Route::get('/', 'PostsController@index');

Route::get('/posts/{post}', 'PostsController@show');


Route::auth();

Route::get('/home', 'HomeController@index');
