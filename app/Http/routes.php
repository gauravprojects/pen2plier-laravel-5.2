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

Route::get('/',array(
    'uses' => 'homeController@index',
    'as'  => 'home'
));


Route::get('/contact',array(
    'uses' => 'contactController@index',
    'as'   => 'contact'
));

Route::post('/contact/store',array(
    'uses' => 'contactController@store',
    'as'   => 'contact_store'
));





?>