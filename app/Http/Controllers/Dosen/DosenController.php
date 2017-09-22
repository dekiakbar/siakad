<?php

namespace App\Http\Controllers\Dosen;

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
    public function index()
    {
        $dosen = Dosen::all();
        return view('Dosen.dosenIndex', compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dosen.dosenInsert');
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
            'nama' => $request->get('nama'),
            'jeniskelamin' => $request->get('jeniskelamin'),
            'alamat' => $request->get('alamat'),
            'notlp' => $request->get('notlp')
        ]);

        if ($simpan->save()) {
            $request->session()->flash('status','success');
            $request->session()->flash('pesan', 'Data Dosen Berhasil Disimpan');
        }else{
            $request->session()->flash('status','danger');
            $required->session()->flash('pesan','Data Dosen Gagal Disimpan');
        }

        return redirect('Dosen/create');
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
        $data = Dosen::Find($id);
        return view('Dosen.dosenEdit',compact('data','id'));
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
        $update = Dosen::find($id);
        $update->nip = $request->get('nip');
        $update->nama = $request->get('nama');
        $update->notlp = $request->get('notlp');
        $update->jeniskelamin = $request->get('jeniskelamin');
        $update->alamat = $request->get('alamat');

        if ($update->save()) {
            $request->session()->flash('status','success');
            $request->session()->flash('pesan','Data Berhasil Di Update');
        }else{
            $request->session()->flash('status','danger');
            $request->session()->flash('pesan', 'Data Berhasil Di Update');
        } 

        return redirect('/Dosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Dosen::findOrFail($id);
        if ($hapus->delete()) {
            session()->flash('status','success');
            session()->flash('pesan','Data dosen berhasil dihapus');
        }else{
            session()->flash('status','danger');
            session()->flash('pesan','Data dosen gagal dihapus');
        }
        return redirect('/Dosen');
    }
}
