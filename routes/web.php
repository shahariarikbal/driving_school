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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin'], function (){
    Route::get('/login', 'Admin\AdminController@adminLoginForm');
    Route::post('/login', 'Admin\AdminController@adminLogin');
    Route::group(['middleware' => 'admin'], function (){
        Route::get('/dashboard', 'Admin\AdminController@adminDashboard');
        Route::post('/logout', 'Admin\AdminController@logout');

        //============ Topic manage ===============//
        Route::get('/topic/index', 'Admin\TopicController@index');
        Route::get('/topic/create', 'Admin\TopicController@create');
        Route::post('/topic/store', 'Admin\TopicController@store');
        Route::get('/topic/edit/{topic}', 'Admin\TopicController@edit');
        Route::post('/topic/update/{topic}', 'Admin\TopicController@update');
        Route::get('/topic/delete/{topic}', 'Admin\TopicController@destroy');
    });
});
