<?php

namespace App\Http\Controllers\Akademik\Dosen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Dosen;
use App\Http\Requests\DosenRequest;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dosen = Dosen::sortable()->paginate(10);
        return view('Akademik.Dosen.dosenIndex', compact('dosen'))->with('no',($request->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Akademik.Dosen.dosenInsert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DosenRequest $request)
    {
        $simpan = new Dosen([
            'nip' => $request->get('nip'),
            'nama_dosen' => $request->get('nama'),
            'jeniskelamin' => $request->get('jeniskelamin'),
            'alamat' => $request->get('alamat'),
            'notlp' => $request->get('notlp')
        ]);

        if ($simpan->save()) {
            session()->flash('status','done_all');
            session()->flash('pesan','Data berhasil disimpan');
        }else{
            session()->flash('status','clear');
            session()->flash('pesan','Data gagal disimpan');
        }

        return redirect('Akademik/Dosen/create');
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
        $data = Dosen::Find($dec);
        return view('Akademik.Dosen.dosenEdit',compact('data','dec'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DosenRequest $request, $id)
    {   
        $dec = decrypt($id);
        $update = Dosen::find($dec);
        $update->nip = $request->get('nip');
        $update->nama_dosen = $request->get('nama');
        $update->notlp = $request->get('notlp');
        $update->jeniskelamin = $request->get('jeniskelamin');
        $update->alamat = $request->get('alamat');

        if ($update->save()) {
            session()->flash('status','done_all');
            session()->flash('pesan','Data berhasil disimpan');
        }else{
            session()->flash('status','clear');
            session()->flash('pesan','Data gagal disimpan');
        } 

        return redirect('/Akademik/Dosen');
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
        $hapus = Dosen::findOrFail($dec);
        if ($hapus->delete()) {
            session()->flash('status','done_all');
            session()->flash('pesan','Data berhasil disimpan');
        }else{
            session()->flash('status','clear');
            session()->flash('pesan','Data gagal disimpan');
        }
        return redirect('/Akademik/Dosen');
    }

    public function search(Request $request)
    {
        $cari = $request->get('s');
        $dosen = Dosen::where('nama_dosen','LIKE','%'.$cari.'%')->sortable()->paginate(10);
        return view('Akademik.Dosen.dosenIndex', compact('dosen'))->with('no',($request->input('page',1)-1)*10);

    }
}
