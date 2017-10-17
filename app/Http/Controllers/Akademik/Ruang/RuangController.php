<?php

namespace App\Http\Controllers\Akademik\Ruang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Ruang;
use App\Http\Requests\RuangRequest;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datas = Ruang::sortable()->paginate(10);
        return view('Akademik.Ruang.ruangIndex',compact('datas'))->with('no',($request->input('page',1)-1)*10);
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
    public function store(RuangRequest $request)
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
    public function update(RuangRequest $request, $id)
    {
        $dec = decrypt($id);
        $update = Ruang::find($dec);
        $update->nama_ruang = $request->get('ruang');
        
        if($update->save()){
            session()->flash('status','done_all');
            session()->flash('pesan','Data Ruang berhasil di perbaharui');
        } else {
            session()->flash('status','clear');
            session()->flash('pesan','Data Ruang gagal di perbaharui');
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
        $dec = decrypt($id);
        $hapus = Ruang::find($dec);

        if ($hapus->delete()) {
            session()->flash('status','done_all');
            session()->flash('pesan','Data Ruang berhasil di hapus');
        } else {
            session()->flash('status','clear');
            session()->flash('pesan','Data Ruang gagal di hapus');
        }

        return redirect('Akademik\Ruang');
    }

    public function search(Request $request)
    {
        $cari = $request->input('cari');
        $datas = Ruang::where('nama_ruang','LIKE','%'.$cari.'%')->sortable()->paginate(10);

        return view('Akademik.Ruang.ruangIndex',compact('datas'))->with('no',($request->input('page',1)-1)*10);
    }
}
