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
    Route::get('/', 'HomeController@index')->name('admin.homes.index');
    Route::get('bases/create', 'BaseController@create')->name('admin.bases.create');
    Route::post('bases/create', 'BaseController@store')->name('admin.bases.store');
    Route::post('users/create', 'UserController@store')->name('admin.users.store');
    // Route::get('contents/index', 'ContentController@index')->name('admin.contents.index');
    Route::resource('bases.contents', 'ContentController', ['only' => ['index']]);
    Route::resource('bases.contents.contentLists', 'ContentListController', ['only' => ['index']]);
    // Route::get('contentLists/index', 'ContentController@index')->name('admin.contentLists.index');
});

Route::get('/', 'HomeController@user_index')->name('homes.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
