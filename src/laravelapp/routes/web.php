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
Route::get('/admin', 'HomeController@index')->name('homes.index');

Route::get('bases/create', 'BaseController@create')->name('bases.create');
Route::post('bases/create', 'BaseController@store')->name('bases.store');
