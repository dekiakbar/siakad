<?php

namespace App\Http\Controllers\Akademik\Jam;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Jam;

class JamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datas = Jam::sortable()->paginate(10);

        return view('Akademik.Jam.jamIndex',compact('datas'))->with('no',($request->input('page',1)-1)*10); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Akademik.Jam.jamInsert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = new Jam([
            'kode_jam' => $request->input('kode_jam'),
            'waktu_mulai' => $request->input('waktu_mulai'),
            'waktu_selesai' => $request->input('waktu_selesai')
        ]);

        if ($insert->save()) {
            session()->flash('status','done_all');
            session()->flash('pesan','Data berhasil disimpan');
        } else {
            session()->flash('status','clear');
            session()->flash('pesan','Data gagal disimpan');
        }

        return redirect('Akademik/Jam/create');
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
        $edit = Jam::find($dec);

        return view('Akademik.Jam.jamEdit',compact('edit','dec'));
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
        $dec = decrypt($id);
        $update = Jam::Find($dec);
        $update->kode_jam = $request->input('kode_jam');
        $update->waktu_mulai = $request->input('waktu_mulai');
        $update->waktu_selesai = $request->input('waktu_selesai');

        if ($update->save()) {
            session()->flash('status','done_all');
            session()->flash('pesan','Data berhasil dirubah');
        } else{
            session()->flash('status','clear');
            session()->flash('pesan','Data gagal dirubah');
        }

        return redirect('/Akademik/Jam');
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
        $hapus = Jam::find($dec);

        if ($hapus->delete()) {
            session()->flash('status','done_all');
            session()->flash('pesan','Data berhasil dihapus');
        } else {
            session()->flash('status','clear');
            session()->flash('pesan','Data gagal dihapus');
        }

        return redirect('Akademik/Jam');
    }

    public function search(Request $request)
    {
        $cari = $request->input('cari');
        $datas = Jam::where('kode_jam','LIKE','%'.$cari.'%')->sortable()->paginate(10);

        return view('Akademik.Jam.jamIndex',compact('datas'))->with('no',($request->input('page',1)-1)*10);
    }
}
