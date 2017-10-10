<?php

namespace App\Http\Controllers\Akademik;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AkademikController extends Controller
{
    public function index(){
    	$mhs = \App\Mahasiswa::count();
    	$dsn = \App\Dosen::count();
    	$fak = \App\Fakultas::count();
    	$makul = \App\Matakuliah::count();
    	$jurusan = \App\Jurusan::count();
    	$ruang = \App\Ruang::count();
    	return view('Akademik.indexAkademik',compact('mhs','dsn','fak','makul','jurusan','ruang'));
    }
}
