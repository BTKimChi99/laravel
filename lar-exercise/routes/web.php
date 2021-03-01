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
Route::get('/', 'App\Http\Controllers\UserController@top')->name('top');
Route::get('/login', 'App\Http\Controllers\UserController@login')->name('users.login');
Route::get('/register_user', 'App\Http\Controllers\UserController@create')->name('users.register');
//frontend
Route::group(['prefix'=>'users', 'middleware'=>'userLogin'], function(){
    Route::get('/home', 'App\Http\Controllers\UserController@home')->name('users.home');
    Route::get('/register/member', 'App\Http\Controllers\UserController@register')->name('users.register_member');
    Route::get('/register_detail_event', 'App\Http\Controllers\UserController@register_detail_event')->name('users.register_detail_event');
    Route::get('/register_detail_team', 'App\Http\Controllers\UserController@register_detail_team')->name('users.register_detail_team');
    Route::get('/check_points', 'App\Http\Controllers\UserController@check_points')->name('users.check_points');
    Route::get('/shopping_points', 'App\Http\Controllers\UserController@shopping_points')->name('users.shopping_points');
    Route::get('/experience_points', 'App\Http\Controllers\UserController@experience_points')->name('users.experience_points');
    Route::get('/result', 'App\Http\Controllers\UserController@result')->name('users.result');
    Route::post('/store', 'App\Http\Controllers\UserController@store')->name('users.store');
    Route::get('/logout', 'App\Http\Controllers\UserController@logout')->name('users.logout');
});
//admin
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'], function(){
    Route::get('/create', 'App\Http\Controllers\AdController@create')->name('admin.create');
    Route::get('/list', 'App\Http\Controllers\AdController@list')->name('admin.list');
    Route::post('/store', 'App\Http\Controllers\AdController@store')->name('admin.store');
    Route::get('/delete/{id}', 'App\Http\Controllers\AdController@destroy')->name('admin.destroy');
    Route::get('/edit/{id}', 'App\Http\Controllers\AdController@edit')->name('admin.edit');
    Route::post('/update/{id}', 'App\Http\Controllers\AdController@update')->name('admin.update');
    Route::get('/detail/{id}', 'App\Http\Controllers\AdController@detail')->name('admin.detail');
});