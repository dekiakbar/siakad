<?php

namespace App\Http\Controllers\Akademik\Mahasiswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\MahasiswaRequest;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $datas = Mahasiswa::sortable()->paginate(10);
        return view('Akademik.Mahasiswa.mahasiswaIndex', compact('datas'))->with('no',($request->input('page',1)- 1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = \App\Jurusan::with('mahasiswa')->select('id','nama_jurusan')->get();
        return view('Akademik.Mahasiswa.mahasiswaInsert',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MahasiswaRequest $request)
    {   
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
            session()->flash('status', 'done_all');
            $request->session()->flash('pesan', ' Data Berhasil Disimpan');
        }else{
            session()->flash('status', 'clear');
            $request->session()->flash('pesan', ' Data gagal Disimpan!!');
        }

        $namaFoto =time().'.'.$request->foto->getClientOriginalExtension();
        $request->foto->move(public_path('image/mahasiswa'),$namaFoto);
        
        return redirect('/Akademik/Mahasiswa/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $dec = decrypt($id);
        $data = Mahasiswa::find($dec);
        $jurusan = \App\Jurusan::find($data->id_jurusan);
        return view('Akademik.Mahasiswa.mahasiswaDetail',compact('data','jurusan'));
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
        $data = Mahasiswa::find($dec);
        $jurusan = \App\Jurusan::with('mahasiswa')->select('id','nama_jurusan')->get();
        return view('Akademik.Mahasiswa.mahasiswaEdit', compact('data','id','jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MahasiswaRequest $request, $id)
    {   
        $dec = decrypt($id);
        $update = Mahasiswa::find($dec);
        
        if ($request->file('foto')) {
            $foto = public_path("/image/mahasiswa/{$update->link}");
            unlink($foto);
        }

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
        $request->foto->move(public_path('image/mahasiswa'),$namaFoto);

        if ($update->save()) {
            session()->flash('status', 'done_all');
            $request->session()->flash('pesan',' Data berhasil Diedit');
        }else{
            session()->flash('status', 'clear');
            $request->session()->flash('pesan',' Data Gagal Diubah!!');
        }

        return redirect('/Akademik/Mahasiswa');
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
        $hapus = Mahasiswa::findOrFail($dec);
        $foto = public_path("/image/mahasiswa/{$hapus->link}");
        unlink($foto);
        if ($hapus->delete()) {
            session()->flash('status', 'done_all');
            session()->flash('pesan',' Data mahasiswa berhasil dihapus');
        }else{
            session()->flash('status', 'clear');
            session()->flash('pesan', ' Data mahasiswa gagal dihapus!!');
        }
        return redirect('/Akademik/Mahasiswa');
    }

    public function search(Request $request)
    {
        $cari = $request->get('cari');
        $datas = Mahasiswa::where('nama','LIKE','%'.$cari.'%')->paginate(10);
        return view('Akademik.Mahasiswa.mahasiswaIndex', compact('datas'))->with('no',($request->input('page',1)- 1)*10);

    }

}