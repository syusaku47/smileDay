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

Auth::routes();




Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/homes', 'HomeController@admin_index')->name('admin.homes.admin_index');
    Route::get('bases/create', 'BaseController@create')->name('admin.bases.create');
    Route::post('bases/create', 'BaseController@store')->name('admin.bases.store');
    Route::post('users/create', 'UserController@store')->name('admin.users.store');
    // Route::get('contents/index', 'ContentController@index')->name('admin.contents.index');
    Route::resource('bases.contents', 'ContentController', ['only' => ['index']]);
    Route::resource('bases.contents.contentLists', 'ContentListController', ['only' => ['index']]);
    // Route::get('contentLists/index', 'ContentController@index')->name('admin.contentLists.index');
});
Route::group(['prefix' => 'admin'], function () {
    Route::get('login',     'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login',    'Admin\LoginController@login');
});

Route::get('/home', 'HomeController@user_index');
Route::get('/show', 'HomeController@show');
