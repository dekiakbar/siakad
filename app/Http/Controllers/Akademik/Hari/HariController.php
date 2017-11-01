<?php

namespace App\Http\Controllers\Akademik\Hari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Hari;
use App\Http\Requests\HariRequest;

class HariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datas = HAri::sortable()->paginate(10); 
        return view('Akademik.Hari.hariIndex',compact('datas'))->with('no',($request->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Akademik.Hari.hariInsert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HariRequest $request)
    {
        $insert = new Hari([
            'kode_hari' => $request->input('kode_hari'),
            'nama_hari' => $request->input('nama_hari')
        ]);

        if ($insert->save()) {
            session()->flash('status','done_all');
            session()->flash('pesan','Data berhasil disimpan');
        } else {
            session()->flash('status','clear');
            session()->flash('pesan','Data gagal disimpan');
        }

        return redirect('Akademik/Hari/create');
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
        $edit = Hari::find($dec);

        return view('Akademik.Hari.hariEdit',compact('edit','dec'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HariRequest $request, $id)
    {
        $dec = decrypt($id);
        $update = Hari::find($dec);
        $update->kode_hari = $request->input('kode_hari');
        $update->nama_hari = $request->input('nama_hari');

        if ($update->save()) {
            session()->flash('status','done_all');
            session()->flash('pesan','Data berhasin diubah');
        }else{
            session()->flash('status','clear');
            session()->flash('pesan','Data gagal diubah');
        }

        return redirect('Akademik/Hari');
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
        $hapus = Hari::find($dec);

        if ($hapus->delete()) {
            session()->flash('status','done_all');
            session()->flash('pesan','Data berhasil dihapus');
        }else{
            session()->flash('status','done_all');
            session()->flash('pesan','Data gagal dihapus');
        }

        return redirect('Akademik/Hari');
    }

    public function search(Request $request)
    {
        $cari = $request->input('cari');
        $datas = Hari::where('nama_hari','LIKE','%'.$cari.'%')->sortable()->paginate(10);

        return view('Akademik.Hari.hariIndex',compact('datas'))->with('no',($request->input('page',1)-1)*10);
    }
}
