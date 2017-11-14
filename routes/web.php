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
    // return view('Web.index');
    return view('Web.masterAdmin');
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
	Route::post('Akademik/Jurusan/jurusanInsert',['uses' => 'Akademik\Jurusan\JurusanController@store','as' => 'Jurusan.store']);
	Route::post('Akademik/Jurusan',['uses' => 'Akademik\Jurusan\JurusanController@search','as' => 'Jurusan.search']);

	// Routing Ruang
	Route::Resource('Akademik/Ruang','Akademik\Ruang\RuangController');
	Route::post('Akademik/Ruang/ruangInsert',['uses' => 'Akademik\Ruang\RuangController@store','as' => 'Ruang.store']);
	Route::post('Akademik/Ruang',['uses' => 'Akademik\Ruang\RuangController@search','as' => 'Ruang.search']);

	// Routing kelas
	Route::Resource('Akademik/Kelas','Akademik\Kelas\KelasController');
	Route::post('Akademik/Kelas/kelasInsert',['uses' => 'Akademik\Kelas\KelasController@store','as' => 'Kelas.store']);
	Route::post('Akademik/Kelas',['uses' => 'Akademik\Kelas\KelasController@search','as' => 'Kelas.search']);

	//Routing Jadwal
	Route::Resource('Akademik/Jadwal','Akademik\Jadwal\JadwalController');
	Route::post('Akademik/Jadwal/jadwalInsert',['uses' => 'Akademik\Jadwal\JadwalController@store','as' => 'Jadwal.store']);
	Route::post('Akademik/Jadwal',['uses' => 'Akademik\Jadwal\JadwalController@search','as' => 'Jadwal.search']);
	Route::get('Akademik/Jadwal/{Jadwal}/pdf',['uses' => 'Akademik\Jadwal\JadwalController@pdf','as' => 'Jadwal.pdf']);

	// Routing Jam
	Route::Resource('Akademik/Jam','Akademik\Jam\JamController');
	Route::post('Akademik/Jam/jamInsert',['uses' => 'Akademik\Jam\JamController@store','as' => 'Jam.store']);
	Route::post('Akademik/Jam',['uses' => 'Akademik\Jam\JamController@search','as' => 'Jam.search']);

	// Routing Hari
	Route::resource('Akademik/Hari','Akademik\Hari\HariController');
	Route::post('Akademik/Hari/hariInsert',['uses' => 'Akademik\Hari\HariController@store','as' => 'Hari.store']);
	Route::post('Akademik/Hari',['uses' => 'Akademik\Hari\HariController@search','as' => 'Hari.search']);

	// Routing Akademik
	Route::get('Akademik','Akademik\AkademikController@index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
