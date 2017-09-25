<?php

namespace App\Http\Controllers\Mahasiswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\MahasiswaRequest;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mahasiswa::all();
        return view('Mahasiswa.mahasiswaIndex', compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = \App\Jurusan::with('mahasiswa')->select('id','nama_jurusan')->get();
        return view('Mahasiswa.mahasiswaInsert',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MahasiswaRequest $request)
    {     
        $simpan = new Mahasiswa([
            'nim' => $request->get('nim'),
            'nama' => $request->get('nama'),
            'alamat' => $request->get('alamat'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'no_tlp' => $request->get('no_tlp'),
            'email' => $request->get('email'),
            'tempat' => $request->get('tempat'),
            'tanggal' => $request->get('tanggal'),
            'link' => time().'.'.$request->file('foto')->getClientOriginalExtension(),
            'id_jurusan' => $request->get('id_jurusan')
        ]);

        if ($simpan->save()) {
            session()->flash('status', 'done_all');
            $request->session()->flash('pesan', 'Data Berhasil Disimpan');
        }else{
            session()->flash('status', 'clear');
            $request->session()->flash('pesan', 'Data gagal Disimpan!!');
        }

        $namaFoto =time().'.'.$request->foto->getClientOriginalExtension();
        $request->foto->move(public_path('imageMahasiswa'),$namaFoto);
        
        return redirect('/Mahasiswa/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Mahasiswa::find($id);
        $jurusan = \App\Jurusan::find($data->id_jurusan);
        return view('Mahasiswa.mahasiswaDetail',compact('data','jurusan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Mahasiswa::find($id);
        $jurusan = \App\Jurusan::with('mahasiswa')->select('id','nama_jurusan')->get();
        return view('Mahasiswa.mahasiswaEdit', compact('data','id','jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MahasiswaRequest $request, $id)
    {   
        $update = Mahasiswa::find($id);
        $update->nim = $request->get('nim');
        $update->nama = $request->get('nama');
        $update->alamat = $request->get('alamat');
        $update->jenis_kelamin = $request->get('jenis_kelamin');
        $update->no_tlp = $request->get('no_tlp');
        $update->email = $request->get('email');
        $update->tempat = $request->get('tempat');
        $update->tanggal = $request->get('tanggal');
        $update->link = time().'.'.$request->file('foto')->getClientOriginalExtension();
        $update->id_jurusan = $request->get('id_jurusan');
        
        $namaFoto =time().'.'.$request->foto->getClientOriginalExtension();
        $request->foto->move(public_path('imageMahasiswa'),$namaFoto);

        if ($update->save()) {
            session()->flash('status', 'done_all');
            $request->session()->flash('pesan','Data berhasil Diedit');
        }else{
            session()->flash('status', 'clear');
            $request->session()->flash('pesan','Data Gagal Diubah!!');
        }


        return redirect('/Mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Mahasiswa::findOrFail($id);
        if ($hapus->delete()) {
            session()->flash('status', 'done_all');
            session()->flash('pesan','Data mahasiswa berhasil dihapus');
        }else{
            session()->flash('status', 'clear');
            session()->flash('pesan', 'Data mahasiswa gagal dihapus!!');
        }
        return redirect('/Mahasiswa');
    }
}
