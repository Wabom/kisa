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

Route::get('/', function () {
    return view('front.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => ['auth']], function(){


    Route::get('/dashboard', 'DashboardController@index');


    Route::get('/member-list', 'MembersController@index');
    Route::get('/member-add','MembersController@create');
    Route::post('/member-save', 'MembersController@store');
    Route::get('/update-member/{id}', 'MembersController@update');
    Route::get('/delete-member/{id}', 'MembersController@destroy');




});

