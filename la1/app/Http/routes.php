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


Route::get('/', 'Controller@index');


//Route::get('/admin', 'Controller@index2');

Route::get('/admin', 'Controller@dbToView');

Route::get('/admin/{id}', 'Controller@dbInf');
/*Route::get('/admin/{id}', function ($id){
    $task = \Illuminate\Support\Facades\DB::table('tasks')->find($id);
    return view('tasks.show', compact('task'));
});*/

Route::get('/home', 'Controller@dbHome');





