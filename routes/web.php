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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Comment'], function () {
    Route::get('/comments', 'IndexController')->name('comment.index');
    Route::get('/comments/create', 'CreateController')->name('comment.create');
    Route::post('/comments', 'StoreController')->name('comment.store');
    Route::get('/comments/{comment}', 'ShowController')->name('comment.show');
    Route::get('/comments/{comment}/edit', 'EditController')->name('comment.edit');
    Route::patch('/comments/{comment}', 'UpdateController')->name('comment.update');
    Route::delete('/comments/{comment}', 'DestroyController')->name('comment.delete');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::group(['namespace' => 'Comment'], function () {
        Route::get('/comment', 'IndexController')->name('admin.comment.index');
        Route::get('/comment/create', 'CreateController')->name('admin.comment.create');
        Route::post('/comment', 'StoreController')->name('admin.comment.store');
        Route::get('/comment/{comment}', 'ShowController')->name('admin.comment.show');
        Route::get('comment/{comment}/edit', 'EditController')->name('admin.comment.edit');
        Route::patch('comment/{comment}', 'UpdateController')->name('admin.comment.update');
        Route::delete('/comment/{comment}', 'DestroyController')->name('admin.comment.delete');
    });
});

Route::group(['namespace' => 'Employee'], function () {
    Route::get('/employees', 'IndexController')->name('employee.index');
    Route::get('/employees/create', 'CreateController')->name('employee.create');
    Route::post('/employees', 'StoreController')->name('employee.store');
    Route::get('/employees/{employee}', 'ShowController')->name('employee.show');
    Route::get('/employees/{employee}/edit', 'EditController')->name('employee.edit');
    Route::patch('/employees/{employee}', 'UpdateController')->name('employee.update');
    Route::delete('/employees/{employee}', 'DestroyController')->name('employee.delete');
});


Route::get('/main', 'MainController@index')->name('main.index');
Route::get('/about', 'AboutController@index')->name('about.index');
Route::get('/contacts', 'ContactsController@index')->name('contact.index');



