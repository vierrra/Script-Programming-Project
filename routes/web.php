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
use App\Models\Usuario;


Route::group(['prefix' => 'home'], function () {
    Route::get('/home', 'HomeController@home')        -> name('home.home');
    Route::get('/contacts', 'HomeController@contacts')-> name('home.contacts');
    Route::get('/loyalty', 'HomeController@loyalty')  -> name('home.loyalty');
});

Route::get('/login', 'LoginController@login')                  -> name('login');
Route::get('/forgotPassword', 'LoginController@forgotPassword')-> name('forgotPassword');
Route::post('/login', 'LoginController@recoveryPassword')      -> name('recoveryPassword');
Route::post('/logar', 'LoginController@logar')                 -> name('logar');

Route::get('/repection', 'IndexController@reception') ->name('reception');
Route::get('/index', 'IndexController@mainScreen')-> name('mainScreen');

Route::group(['prefix' => 'client', 'middleware' => ['login']], function () {
    Route::get('/', 'ClientController@list') ->name('client.list');
    Route::get('/new', 'ClientController@new') ->name('client.new');
    Route::post('/save', 'ClientController@save') ->name('client.save');
    Route::get('/edit/{id}', 'ClientController@edit') ->name('client.edit');
    Route::post('/update{id}', 'ClientController@update') ->name('client.update');
    Route::get('/delete/{id}', 'ClientController@delete') ->name('client.delete');
});

Route::group(['prefix' => 'collaborators', 'middleware' => ['login']], function () {
    Route::get('/', 'CollaboratorsController@list') ->name('collaborators.list');
});



Route::group(['middleware' => 'login'], function () {
    
    Route::get('/logout', 'LoginController@logout')   -> name('logout');
});

Route::get('/', function () {
    return view('welcome');
});
