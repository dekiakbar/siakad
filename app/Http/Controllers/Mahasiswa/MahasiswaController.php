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
        $this ->validate($request,[
            'nim' => 'required|min:3|max:8',
            'nama' => 'required|min:3|max:30',
            'alamat' => 'required|min:3|max:100',
            'jenis_kelamin' => 'required|max:9',
            'no_tlp' => 'required|regex:/[0-9]{12}/',
            'email' => 'required|email',
            'tempat' => 'required|min:3|max:20',
            'tanggal' => 'required',
            'foto' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'id_jurusan' => 'required'
        ]);
        $simpan = new Mahasiswa([
            'nim' => $request->get('nim'),
            'nama' => $request->get('nama'),
            'alamat' => $request->get('alamat'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'no_tlp' => $request->get('no_tlp'),
            'email' => $request->get('email'),
            'tempat' => $request->get('tempat'),
            'tanggal' => $request->get('tanggal'),
            'link' => time().'.'.$request->file('foto')->getClientOriginalExtension(),
            'id_jurusan' => $request->get('id_jurusan')
        ]);

        if ($simpan->save()) {
            $request->session()->flash('status', 'success');
            $request->session()->flash('pesan', 'Data Berhasil Disimpan');
        }else{
            $request->session()->flash('status', 'danger');
            $request->session()->flash('pesan', 'Data gagal Disimpan!!');
        }

        $namaFoto =time().'.'.$request->foto->getClientOriginalExtension();
        $request->foto->move(public_path('imageMahasiswa'),$namaFoto);
        
        return redirect('/Mahasiswa/create');
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
        $this ->validate($request,[
            'nim' => 'required|min:3|max:8',
            'nama' => 'required|min:3|max:30',
            'alamat' => 'required|min:3|max:100',
            'jenis_kelamin' => 'required|max:9',
            'no_tlp' => 'required|regex:/[0-9]{12}/',
            'email' => 'required|email',
            'tempat' => 'required|min:3|max:20',
            'tanggal' => 'required',
            'foto' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'id_jurusan' => 'required'
        ]);

        $update = Mahasiswa::find($id);
        $update->nim = $request->get('nim');
        $update->nama = $request->get('nama');
        $update->alamat = $request->get('alamat');
        $update->jenis_kelamin = $request->get('jenis_kelamin');
        $update->no_tlp = $request->get('no_tlp');
        $update->email = $request->get('email');
        $update->tempat = $request->get('tempat');
        $update->tanggal = $request->get('tanggal');
        $update->link = time().'.'.$request->file('foto')->getClientOriginalExtension();
        $update->id_jurusan = $request->get('id_jurusan');
        
        $namaFoto =time().'.'.$request->foto->getClientOriginalExtension();
        $request->foto->move(public_path('imageMahasiswa'),$namaFoto);
        
        if ($update->save()) {
            $request->session()->flash('status','success');
            $request->session()->flash('pesan','Data berhasil Diedit');
        }else{
            $request->session()->flash('status','danger');
            $request->session()->flash('pesan','Data Gagal Diubah!!');
        }


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
