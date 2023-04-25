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


Route::group(['namespace' => 'Comment'], function () {
    Route::get('/comments', 'IndexController')->name('comment.index');
    Route::get('/comments/create', 'CreateController')->name('comment.create');
    Route::post('/comments', 'StoreController')->name('comment.store');
    Route::get('/comments/{comment}', 'ShowController')->name('comment.show');
    Route::get('/comments/{comment}/edit', 'EditController')->name('comment.edit');
    Route::patch('/comments/{comment}', 'UpdateController')->name('comment.update');
    Route::delete('/comments/{comment}', 'DestroyController')->name('comment.delete');
});

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

Route::get('/employees', 'EmployeeController@index')->name('employee.index');
Route::get('/employees/create', 'EmployeeController@create')->name('employee.create');
Route::post('/employees', 'EmployeeController@store')->name('employee.store');
Route::get('/employees/{employee}', 'EmployeeController@show')->name('employee.show');
Route::get('/employees/{employee}/edit', 'EmployeeController@edit')->name('employee.edit');
Route::patch('/employees/{employee}', 'EmployeeController@update')->name('employee.update');
Route::delete('/employees/{employee}', 'EmployeeController@destroy')->name('employee.delete');