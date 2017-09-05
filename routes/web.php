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


Route::Resource('Mahasiswa','Mahasiswa\MahasiswaController');
Route::Resource('Makul','Makul\MakulController');
Route::Resource('Dosen','Dosen\DosenController');
// Route::post('/Makul/{id}','Makul\MakulController@destroy');