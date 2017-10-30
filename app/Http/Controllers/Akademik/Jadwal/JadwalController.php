<?php

namespace App\Http\Controllers\Akademik\Jadwal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Jadwal;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jadwals = Jadwal::sortable()->paginate(10);
        return view('Akademik.Jadwal.jadwalIndex',compact('jadwals'))->with('no',($request->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsn = \App\Dosen::select('nip','nama_dosen')->get();
        $jrsn = \App\Jurusan::select('kode_jurusan','nama_jurusan')->get();
        $ruang = \App\Ruang::select('kode_ruang','nama_ruang')->get();
        $kls = \App\Kelas::select('kode_kelas','nama_kelas')->get();
        $mk = \App\Matakuliah::select('kode_mk','makul')->get();
        return view('Akademik.Jadwal.jadwalInsert',compact('dsn','jrsn','ruang','kls','mk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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

    public function search(){
        
    }
}
