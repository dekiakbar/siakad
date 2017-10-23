<?php

namespace App\Http\Controllers\Akademik\Kelas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Kelas;
use App\Jurusan;
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
        $dec = decrypt($id);
        $edit = Kelas::find($dec);
        $datas = Jurusan::select('id','nama_jurusan','kode_jurusan')->get();

        return view('Akademik.Kelas.kelasEdit',compact('datas','edit','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KelasRequest $request, $id)
    {
        $dec = decrypt($id);
        $update = Kelas::find($dec);
        $update->kode_kelas = $request->input('kode_kelas');
        $update->nama_kelas = $request->input('nama_kelas');
        $update->kode_jurusan = $request->input('kode_jurusan');
        $update->tahun = $request->input('tahun');

        if ($update->save()) {
            session()->flash('status','done_all');
            session()->flash('pesan','Data berhasil diperbaharui');
        }else{
            session()->flash('status','clear');
            session()->flash('pesan','Data gagal diperbaharui');
        }

        return redirect('Akademik/Kelas');
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
        $data = Kelas::find($dec);

        if ($data->delete()) {
            session()->flash('status','done_all');
            session()->flash('pesan','Data berhasil dihapus');
        }else{
            session()->flash('status','done_all');
            session()->flash('pesan','Data gagal dihapus');
        }

        return redirect('Akademik/Kelas');
    }

    public function search(Request $request)
    {
        $cari = $request->input('cari');
        $datas = Kelas::where('nama_kelas','LIKE','%'.$cari.'%')->sortable()->paginate(10);
        return view('Akademik.Kelas.kelasIndex',compact('datas'))->with('no',($request->input('page',1)-1)*10);
    }
}
