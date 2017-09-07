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
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
	Route::Resource('Mahasiswa','Mahasiswa\MahasiswaController');
	Route::Resource('Makul','Makul\MakulController');
	Route::Resource('Dosen','Dosen\DosenController');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
