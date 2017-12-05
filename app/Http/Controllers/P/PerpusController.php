<?php

namespace App\Http\Controllers\P;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\p_kategori;

class PerpusController extends Controller
{
    public function Insert(){
    	return view ('P.A.Insert');
    }

    public function tambahKat(Request $request){
    	$kategori = new p_kategori([
    		'nama_kategori' => $request->input('nama_kategori')
    	]);

    	if ($kategori->save()) {
    		session()->flash('status','done_all');
    		session()->flash('pesan','Kategori berhasil disimpan');
    	}else {
    		session()->flash('status','clear');
    		session()->flash('pesan','Kategori gagal disimpan');
    	}

    	return redirect('P/Insert');
    }

    public function editKat($id){

    	$data = p_kategori::find($id);
    	return view('P.A.editKat',compact('data'));
    }

    public function updateKat(Request $request, $id){
    	$update = p_kategori::find($id);
    	$update->nama_kategori = $request->input('nama_kategori');

    	if ($update->save()) {
    		session()->flash('status','done_all');
    		session()->flash('pesan','Kategori berhasil disimpan');
    	}else {
    		session()->flash('status','clear');
    		session()->flash('pesan','Kategori gagal disimpan');
    	}

    	return redirect('P/Insert');
    }
}
