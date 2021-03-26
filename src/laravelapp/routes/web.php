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
//     return view('bases/create');
// });
// Route::get('/admin', 'HomeController@index')->name('homes.index');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'HomeController@index')->name('homes.index');
    Route::get('bases/create', 'BaseController@create')->name('admin.bases.create');
    Route::post('bases/create', 'BaseController@store')->name('admin.bases.store');
    Route::post('users/create', 'UserController@store')->name('admin.users.store');
    Route::get('contents/index', 'ContentController@index')->name('admin.contents.index');
});

Route::get('/', 'HomeController@index')->name('homes.index');
