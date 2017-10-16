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

	Route::Resource('Akademik/Jurusan','Akademik\Jurusan\JurusanController');
	Route::Resource('Akademik/Krs','Akademik\Krs\KrsController');
	Route::Resource('Akademik/Fakultas','Akademik\Fakultas\FakultasController');
	Route::Resource('Akademik/Ruang','Akademik\Ruang\RuangController');
	Route::Resource('Akademik','Akademik\AkademikController');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
