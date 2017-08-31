<?php

namespace App\Http\Controllers\Mahasiswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        return view('Mahasiswa.mahasiswaInsert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $simpan = new Mahasiswa([
            'nim' => $request->get('nim'),
            'nama' => $request->get('nama'),
            'alamat' => $request->get('alamat'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'no_tlp' => $request->get('no_tlp'),
            'ttl' => $request->get('ttl'),
            'id_jurusan' => $request->get('id_jurusan')
        ]);
        $simpan->save();
        return redirect('/Mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        return view('Mahasiswa.mahasiswaEdit', compact('data','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Mahasiswa::find($id);
        $update->nim = $request->get('nim');
        $update->nama = $request->get('nama');
        $update->alamat = $request->get('alamat');
        $update->jenis_kelamin = $request->get('jenis_kelamin');
        $update->ttl = $request->get('ttl');
        $update->no_tlp = $request->get('no_tlp');
        $update->id_jurusan = $request->get('id_jurusan');
        $update->save();
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
        $hapus = Mahasiswa::find($id);
        $hapus->delete();
        return redirect('/Mahasiswa');
    }
}
