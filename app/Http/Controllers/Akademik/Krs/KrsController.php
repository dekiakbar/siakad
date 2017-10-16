<?php

namespace App\Http\Controllers\Akademik\Krs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Krs;
use App\Http\Requests\KrsRequest;

class KrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datas = Krs::join('dosen','krs.nip','=','dosen.nip')
                ->join('mahasiswa','krs.nim','=','mahasiswa.nim')
                ->join('mata_kuliah','krs.kode_mk','=','mata_kuliah.kode_mk')
                ->select('*','krs.id as id_krs')
                ->paginate(10);
        return view('Akademik.Krs.krsIndex',compact('datas'))->with('no',($request->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mhs = \App\Mahasiswa::select('nim','nama')->get();
        $dosen = \App\Dosen::select('nip','nama_dosen')->get();
        $makul = \App\Matakuliah::select('kode_mk','makul')->get();
        
        return view('Akademik.Krs.krsInsert',compact('mhs','dosen','makul'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KrsRequest $request)
    {
        
        $krs = new Krs([
            'nim' => $request->get('nim'),
            'nip' => $request->get('nip'),
            'kode_mk' => $request->get('kode_mk'),
            'absen' => $request->get('absen'),
            'uts' => $request->get('uts'),
            'uas' => $request->get('uas')
        ]);

        if ($krs->save()) {
            session()->flash('status','done_all');
            session()->flash('pesan','Data berhasil disimpan');
        }else{
            session()->flash('status','clear');
            session()->flash('pesan','Data gagal disimpan');
        }

        return redirect('Akademik/Krs/create');
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
        $id = decrypt($id);
        $krs = Krs::find($id);
        $mhs = \App\Mahasiswa::select('nim','nama')->get();
        $dosen = \App\Dosen::select('nip','nama_dosen')->get();
        $makul = \App\Matakuliah::select('kode_mk','makul')->get();
        
        return view('Akademik.Krs.krsEdit',compact('krs','mhs','dosen','makul'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KrsRequest $request, $id)
    {   
        $dec =decrypt($id);
        $update = Krs::find($dec);
        $update->nim = $request->get('nim');
        $update->nip =  $request->get('nip');
        $update->kode_mk = $request->get('kode_mk');
        $update->uts = $request->get('uts');
        $update->uas = $request->get('uas');
        $update->absen = $request->get('absen');

        if ($update->save()) {
            session()->flash('status','done_all');
            session()->flash('pesan','Data KRS berhasil di update');
        } else {
            session()->flash('status', 'clear');
            session()->flash('pesan', 'Data KRS gagal di hapus');
        }

        return redirect('/Akademik/Krs');
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
        $delete = Krs::findOrFail($dec);

        if ($delete->delete()) {
            session()->flash('status','done_all');
            session()->flash('pesan','Data KRS berhasil di hapus');
        } else{
            session()->flash('status','clear');
            session()->flash('pesan','Data KRS gagal dihapus');
        }
        return redirect('/Akademik/Krs');
    }

    public function search (Requests $request)
    {
        $cari = $request->input('cari');
        $datas = Krs::join('dosen','krs.nip','=','dosen.nip')
                ->join('mahasiswa','krs.nim','=','mahasiswa.nim')
                ->join('mata_kuliah','krs.kode_mk','=','mata_kuliah.kode_mk')
                ->select('*','krs.id as id_krs')
                ->paginate(10);
        return view('Akademik.Krs.krsIndex',compact('datas'))->with('no',($request->input('page',1)-1)*10);
    }
}
