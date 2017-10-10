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

// Route untuk hak akses SuperAdmin
Route::group(['middleware' => 'auth'], function () {
	Route::Resource('Akademik/Mahasiswa','Akademik\Mahasiswa\MahasiswaController');
	Route::Resource('Akademik/Makul','Akademik\Makul\MakulController');
	Route::Resource('Akademik/Dosen','Akademik\Dosen\DosenController');
	Route::Resource('Akademik/Jurusan','Akademik\Jurusan\JurusanController');
	Route::Resource('Akademik/Krs','Akademik\Krs\KrsController');
	Route::Resource('Akademik/Fakultas','Akademik\Fakultas\FakultasController');
	Route::Resource('Akademik/Ruang','Akademik\Ruang\RuangController');
	Route::Resource('Akademik','Akademik\AkademikController');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
