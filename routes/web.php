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
    return view('welcome');
});

Route::get('me', 'ApiController@me');
Route::get('update', 'ApiController@update');
Route::get('respond', 'ApiController@respond');
Route::get('webhook', 'ApiController@webhook');

Route::get('setWebHook', 'ApiController@setWebHook');
Route::post('442718912:AAFfm5yVq225XAsWMNRi7lifOVcRmFmsDjg/webhook', 'ApiController@setWebHook');