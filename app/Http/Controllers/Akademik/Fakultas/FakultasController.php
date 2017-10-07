<?php

namespace App\Http\Controllers\Akademik\Fakultas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Fakultas;
use App\Http\Requests\FakultasRequest;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Fakultas::all();
        return view('Akademik.Fakultas.fakultasIndex',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Akademik.Fakultas.fakultasInsert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FakultasRequest $request)
    {
        $simpan = new Fakultas([
        'kode_fak' => $request->get('kode_fak'),
        'nama_fak' => $request->get('nama_fak')
        ]);

        if ($simpan->save()) {
            session()->flash('status','done_all');
            session()->flash('pesan','Data Fakultas berhasil disimpan');
        } else {
            session()->flash('status','clear');
            session()->flash('pesan','Data Fakultas gagal disimpan');
        }

        return redirect('/Akademik/Fakultas/create');
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
        $dec = decrypt($id);
        $data = Fakultas::find($dec);
        return view('Akademik.Fakultas.fakultasEdit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FakultasRequest $request, $id)
    {
        $dec = decrypt($id);
        $data = Fakultas::find($dec);
        $data->kode_fak = $request->get('kode_fak');
        $data->nama_fak = $request->get('nama_fak');

        if ($data->save()) {
            session()->flash('status','done_all');
            session()->flash('pesan','Data berhasil diupdate');
        } else {
            session()->flash('status','clear');
            session()->flash('pesan','Data gagal dihapus');
        }

        return redirect('/Akademik/Fakultas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $dec = decrypt($id);
        $hapus = Fakultas::findOrFail($dec);

        if ($hapus->delete()) {
            session()->flash('status','done_all');
            session()->flash('pesan','Data berhasil dihapus');
        } else {
            session()->flash('status','clear');
            session()->flash('pesan','Data gagal dihapus');
        }

        return redirect('/Akademik/Fakultas');
    }
}
