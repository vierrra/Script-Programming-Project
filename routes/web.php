<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/login', 'LoginController@login')                  -> name('login');
Route::get('/forgotPassword', 'LoginController@forgotPassword')-> name('forgotPassword');
Route::post('/login', 'LoginController@recoveryPassword')      -> name('recoveryPassword');
Route::post('/logar', 'LoginController@logar')                 -> name('logar');
Route::get('/index', 'LoginController@mainScreen')             -> name('mainScreen');


Route::get('/', function () {
    return view('welcome');
});
