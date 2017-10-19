<?php

namespace App\Http\Controllers\Akademik\Kelas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Kelas;
use App\Http\Requests\KelasRequest;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datas = Kelas::sortable()->paginate(10);
        return view('Akademik.Kelas.kelasIndex',compact('datas'))->with('no',($request->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusans = \App\Jurusan::pluck('nama_jurusan','kode_jurusan');
        return view('Akademik.Kelas.kelasInsert',compact('jurusans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KelasRequest $request)
    {
        $tambah = new Kelas([
            'kode_kelas' => $request->get('kode_kelas'),
            'nama_kelas' => $request->get('nama_kelas'),
            'kode_jurusan' => $request->get('kode_jurusan'),
            'tahun' => $request->get('tahun')
        ]);

        if ($tambah->save()) {
            session()->flash('status','done_all');
            session()->flash('pesan','Data berhasil disimpan');
        } else {
            session()->flash('status','clear');
            session()->flash('pesan','Data gagal disiman!!');
        }

        return redirect ('Akademik/Kelas/create'); 
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search()
    {

    }
}
