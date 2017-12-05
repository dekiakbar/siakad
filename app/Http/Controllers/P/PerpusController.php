<?php

namespace App\Http\Controllers\P;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\p_kategori;

class PerpusController extends Controller
{
	public function indexKat(Request $request){
		$datas = p_kategori::paginate(10);
		return view('P.A.indexKat',compact('datas'))->with('no',($request->input('page',1)-1)*10);
	}

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

    	return redirect('P/kategori/Insert');
    }

    public function editKat($id){

    	$des = decrypt($id);
    	$data = p_kategori::find($des);
    	return view('P.A.editKat',compact('data'));
    }

    public function updateKat(Request $request, $id){

    	$des = decrypt($id);
    	$update = p_kategori::find($des);
    	$update->nama_kategori = $request->input('nama_kategori');

    	if ($update->save()) {
    		session()->flash('status','done_all');
    		session()->flash('pesan','Kategori berhasil diubah');
    	}else {
    		session()->flash('status','clear');
    		session()->flash('pesan','Kategori gagal diubah');
    	}

    	return redirect('P/kategori');
    }

    public function hapusKat($id){
    	
    	$des = decrypt($id);
    	$hapus = p_kategori::find($des);

    	if ($hapus->delete()) {
    		session()->flash('status','done_all');
    		session()->flash('pesan','Kategori berhasil diubah');
    	}else {
    		session()->flash('status','clear');
    		session()->flash('pesan','Kategori gagal diubah');
    	}

    	return redirect('P/kategori');
    }
}
