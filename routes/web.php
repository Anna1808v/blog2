<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyNameController;
use App\Http\Controllers\MyPlaceController;
//Route::get('/home', 'MyPlaceController@index');
//Route::get('/home', [MyPlaceController::class, 'index']);
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



Route::get('/my_surname', 'MySurnameController@index');

Route::get('/my_city', 'MyCityController@index');

Route::get('/my_age', 'MyAgeController@index');

Route::get('/my_cat_name', 'MyCatNameController@index');

Route::get('/my_son_name', 'MySonNameController@index');

Route::get('/say_hello', 'HelloController@index');

Route::get('/today', 'TodayController@index');