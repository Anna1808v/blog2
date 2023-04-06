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



Route::get('/comments', 'CommentController@index')->name('comment.index');
Route::get('/comments/create', 'CommentController@create');
Route::post('/comments', 'CommentController@store')->name('comment.store');
Route::get('/comments/{comment}', 'CommentController@show')->name('comment.show');

Route::get('/comments/update', 'CommentController@update');
Route::get('/comments/delete', 'CommentController@delete');
Route::get('/comments/first_or_create', 'CommentController@firstOrCreate');  
Route::get('/comments/update_or_create', 'CommentController@updateOrCreate');  

Route::get('/friends', 'FriendsController@index');
Route::get('/friends/create', 'FriendsController@create');
Route::get('/friends/update', 'FriendsController@update');
Route::get('/friends/delete', 'FriendsController@delete');
Route::get('/friends/first_or_create', 'FriendsController@firstOrCreate');
Route::get('/friends/update_or_create', 'FriendsController@updateOrCreate');

Route::get('/main', 'MainController@index')->name('main.index');
Route::get('/about', 'AboutController@index')->name('about.index');
Route::get('/contacts', 'ContactsController@index')->name('contact.index');

