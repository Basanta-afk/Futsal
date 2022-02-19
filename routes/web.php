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
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'FutsalController@index');

// Route::get('/create', 'FutsalController@create');

Route::post('adminlogin','FutsalController@store')->name('adminlogin');

Route::get('/book','BookController@create')->middleware('auth');

Route::post('book','BookController@store')->name('book');

// Route::get('/bookinglist','BookController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','admin']], function (){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/create', 'Admin\DashboardController@create');

    Route::get('/bookinglist','Admin\DashboardController@bookinglist');

    Route::delete('{id}','Admin\DashboardController@destroy');
    
});

Route::group(['middleware' => ['auth','user']], function (){
    Route::get('/userdashboard', function () {
        return view('admin.userdashboard');
    });
    
});

Route::group(['middleware' => ['auth','owner']], function (){
    Route::get('/ownerdashboard', function () {
        return view('admin.ownerdashboard');
    });

    Route::get('/bookinglist','Admin\OwnerdashboardController@bookinglist');

    Route::delete('{id}','Admin\OwnerdashboardController@destroy');
    
});

