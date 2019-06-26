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

Route::get('/welcome', function () {
    return view('frontend.mainpage');
});


Route::get('/','HomeController@index')->name('dashboard');

Route::get('/new-receipt','HomeController@newReceipt')->name('newReceipt');
Route::get('/setting','HomeController@setting')->name('setting');
Route::post('/saveCategory','MainController@saveCategory')->name('saveCategory');
Route::post('/saveSubCategory','MainController@saveSubCategory')->name('saveSubCategory');