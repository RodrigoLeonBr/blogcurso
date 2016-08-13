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

Route::get('/', 'blog@index' );
Route::get('index', 'blog@index' );
Route::get('about', 'about@index' );
Route::get('post', 'post@index' );
Route::get('contact', 'contact@index' );