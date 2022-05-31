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


// test line 
// test line 
// test line 

Route::view('/', 'frontend.home.index');


Route::get('/lessons', 'Frontend\FrontendController@lessons');

Route::group(['prefix' => 'admin'], function (){
    Route::get('/login', 'Backend\AdminController@adminLoginForm');
    Route::post('/login', 'Backend\AdminController@adminLogin');
    Route::group(['middleware' => 'admin'], function (){
        Route::get('/dashboard', 'Backend\AdminController@adminDashboard');
        Route::post('/logout', 'Backend\AdminController@logout');

        //============ Topic manage ===============//
        Route::get('/topic/index', 'Backend\TopicController@index');
        Route::get('/topic/create', 'Backend\TopicController@create');
        Route::post('/topic/store', 'Backend\TopicController@store');
        Route::get('/topic/edit/{topic}', 'Backend\TopicController@edit');
        Route::post('/topic/update/{topic}', 'Backend\TopicController@update');
        Route::get('/topic/delete/{topic}', 'Backend\TopicController@destroy');

        //============ Topic manage ===============//
        Route::get('/lesson/index', 'Backend\FileController@index');
        Route::get('/lesson/create', 'Backend\FileController@create');
        Route::post('/lesson/store', 'Backend\FileController@store');
        Route::get('/lesson/edit/{id}', 'Backend\FileController@edit');
        Route::post('/lesson/update/{id}', 'Backend\FileController@update');
        Route::get('/lesson/delete/{id}', 'Backend\FileController@delete');
    });
});
