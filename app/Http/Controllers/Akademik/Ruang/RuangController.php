<?php

namespace App\Http\Controllers\Akademik\Ruang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Ruang;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Ruang::all();
        return view('Akademik.Ruang.ruangIndex',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Akademik.Ruang.ruangInsert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = new Ruang([
            'nama_ruang' => $request->get('ruang')
        ]);

        if($insert->save()){
            session()->flash('status','done_all');
            session()->flash('pesan','Data ruang berhasil disimpan');
        } else {
            session()->flash('status','done_all');
            session()->flash('pesan','Data ruang gagal disimpan');
        }

        return redirect('/Akademik/Ruang/create');
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
        $edit = Ruang::find($dec);

        return view('Akademik.Ruang.ruangEdit',compact('edit'));
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
        $update = Ruang::find($dec);
        $update->nama_ruang = $request->get('ruang');
        
        if($update->save()){
            session()->flash('status','done_all');
            session()->flash('pesan','Data Ruang berhasil di perbaharui');
        } else {
            session()->flash('status','clear');
            session()->flash('pesan','Data Ruang gagal diperbaharui');
        }

        return redirect('Akademik\Ruang');
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
}
