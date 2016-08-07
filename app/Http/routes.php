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


Route::get('/contact/results',array(
    'uses' => 'contactController@display',
    'as'   => 'contact_display'
));

Route::get('/login', array(
    'uses'=> 'accountController@index',
    'as'  => 'login_home'
));

Route::post('/login',array(
    'uses' => 'accountController@login',
    'as'   => 'login'
));


Route::get('/logout',array(
    'uses' => 'accountController@logout',
    'as'   => 'logout'
));


Route::get('/admin',array(
    'uses' => 'adminController@index',
    'as'   => 'admin'
));


?>