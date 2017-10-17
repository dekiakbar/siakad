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

	// Route Mahasiswa
	Route::Resource('Akademik/Mahasiswa','Akademik\Mahasiswa\MahasiswaController');
	Route::post('Akademik/Mahasiswa/mahasiswaInsert',['uses'=>'Akademik\Mahasiswa\MahasiswaController@store','as' =>'Mahasiswa.store']);
	Route::post('Akademik/Mahasiswa',['uses'=>'Akademik\Mahasiswa\MahasiswaController@search','as' =>'Mahasiswa.search']);
	
	// Routing Dosen
	Route::Resource('Akademik/Dosen','Akademik\Dosen\DosenController');
	Route::post('Akademik/Dosen/dosenInsert',['uses' => 'Akademik\Dosen\DosenController@store','as' => 'Dosen.store']);
	Route::post('Akademik/Dosen',['uses' => 'Akademik\Dosen\DosenController@search','as' => 'Dosen.search']);

	// Routing Mata Kuliah
	Route::Resource('Akademik/Makul','Akademik\Makul\MakulController');
	Route::post('Akademik/Makul/makulInsert',['uses' => 'Akademik\Makul\MakulController@store','as' => 'Makul.store']);
	Route::post('Akademik/Makul',['uses' => 'Akademik\Makul\MakulController@search','as' => 'Makul.search']);

	// Routing KRS
	Route::Resource('Akademik/Krs','Akademik\Krs\KrsController');
	Route::post('Akademik/Krs/krsInsert',['uses' => 'Akademik\Krs\KrsController@store','as' => 'Krs.store']);
	Route::post('Akademik/Krs',['uses' => 'Akademik\Krs\KrsController@search','as' => 'Krs.search']);

	// Routing Fakultas
	Route::Resource('Akademik/Fakultas','Akademik\Fakultas\FakultasController');
	Route::post('Akademik/Fakultas/fakultasInsert',['uses' => 'Akademik\Fakultas\FakultasController@store','as' => 'Fakultas.store']);
	Route::post('Akademik/Fakultas',['uses' => 'Akademik\Fakultas\FakultasController@search','as' => 'Fakultas.search']);

	// Routing Jurusan
	Route::Resource('Akademik/Jurusan','Akademik\Jurusan\JurusanController');
	Route::post('Akademik/Jurusan/jurusanIndex',['uses' => 'Akademik\Jurusan\JurusanController@store','as' => 'Jurusan.store']);
	Route::post('Akademik/Jurusan',['uses' => 'Akademik\Jurusan\JurusanController@search','as' => 'Jurusan.search']);

	// Routing Ruang
	Route::Resource('Akademik/Ruang','Akademik\Ruang\RuangController');
	Route::post('Akademik/Ruang/ruangInsert',['uses' => 'Akademik\Ruang\RuangController@create','as' => 'Ruang.store']);
	Route::post('Akademik/Ruang',['uses' => 'Akademik\Ruang\RuangController@search','as' => 'Ruang.search']);

	// Routing Akademik
	Route::get('Akademik','Akademik\AkademikController@index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
