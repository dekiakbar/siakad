<?php

namespace App\Http\Controllers\Akademik\Jadwal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Jadwal;
use App\Http\Requests\JadwalRequest;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jadwals = Jadwal::join('dosen','dosen.nip','=','jadwal.nip')
                        ->join('jurusan','jurusan.kode_jurusan','=','jadwal.kode_jurusan')
                        ->join('ruang','ruang.kode_ruang','=','jadwal.kode_ruang')
                        ->join('kelas','kelas.kode_kelas','=','jadwal.kode_kelas')
                        ->join('mata_kuliah','mata_kuliah.kode_mk','=','jadwal.kode_mk')
                        ->join('hari','hari.kode_hari','=','jadwal.kode_hari')
                        ->join('jam','jam.kode_jam','=','jadwal.kode_jam')
                        ->select('*','jadwal.id as jadwal_id','kelas.id as kelas_id')
                        ->sortable()
                        ->paginate(10);
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
        $hr = \App\Hari::select('kode_hari','nama_hari')->get();
        $jam = \App\Jam::select('kode_jam','waktu_mulai','waktu_selesai')->get();

        return view('Akademik.Jadwal.jadwalInsert',compact('dsn','jrsn','ruang','kls','mk','hr','jam'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JadwalRequest $request)
    {
        $insert = new Jadwal([
            'kode_jadwal' => $request->input('kode_jadwal'),
            'nip' => $request->input('nip'),
            'kode_jurusan' => $request->input('kode_jurusan'),
            'kode_kelas' => $request->input('kode_kelas'),
            'kode_ruang' => $request->input('kode_ruang'),
            'kode_mk' => $request->input('kode_mk'),
            'kode_hari' => $request->input('kode_hari'),
            'kode_jam' => $request->input('kode_jam')
        ]);

        if ($insert->save()) {
            session()->flash('status','done_all');
            session()->flash('pesan','Data berhasil disimpan');
        }else{
            session()->flash('status','clear');
            session()->flash('pesan','Data gagal disimpan');
        }

        return redirect('Akademik/Jadwal/create');
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
        $sort = \App\Kelas::find($dec);
        $keterangan = Jadwal::join('jurusan','jurusan.kode_jurusan','=','jadwal.kode_jurusan')
                            ->join('kelas','kelas.kode_kelas','=','jadwal.kode_kelas')
                            ->select('jurusan.nama_jurusan','kelas.tahun','kelas.nama_kelas','jadwal.id as jadwal_id')
                            ->where('kelas.id',$sort->id)
                            ->first();

        $jadwals = Jadwal::join('dosen','dosen.nip','=','jadwal.nip')
                        ->join('jurusan','jurusan.kode_jurusan','=','jadwal.kode_jurusan')
                        ->join('ruang','ruang.kode_ruang','=','jadwal.kode_ruang')
                        ->join('kelas','kelas.kode_kelas','=','jadwal.kode_kelas')
                        ->join('mata_kuliah','mata_kuliah.kode_mk','=','jadwal.kode_mk')
                        ->join('hari','hari.kode_hari','=','jadwal.kode_hari')
                        ->join('jam','jam.kode_jam','=','jadwal.kode_jam')
                        ->select('*','jadwal.id as jadwal_id','kelas.id as kelas_id')
                        ->where('kelas.nama_kelas',$sort->nama_kelas)
                        ->orderBy('jam.waktu_mulai','Asc')
                        ->get();

        return view('Akademik.Jadwal.jadwalDetail',compact('jadwals','keterangan')); 
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
        $data = Jadwal::find($dec);
        $dsn = \App\Dosen::select('nip','nama_dosen')->get();
        $jrsn = \App\Jurusan::select('kode_jurusan','nama_jurusan')->get();
        $ruang = \App\Ruang::select('kode_ruang','nama_ruang')->get();
        $kls = \App\Kelas::select('kode_kelas','nama_kelas')->get();
        $mk = \App\Matakuliah::select('kode_mk','makul')->get();
        $hr = \App\Hari::select('kode_hari','nama_hari')->get();
        $jam = \App\Jam::select('kode_jam','waktu_mulai','waktu_selesai')->get();

        return view('Akademik.Jadwal.jadwalEdit',compact('data','dsn','jrsn','ruang','kls','mk','hr','jam'));
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
        $update = Jadwal::find($dec);
        $update->kode_jadwal = $request->input('kode_jadwal');
        $update->nip = $request->input('nip');
        $update->kode_jurusan = $request->input('kode_jurusan');
        $update->kode_ruang = $request->input('kode_ruang');
        $update->kode_kelas = $request->input('kode_kelas');
        $update->kode_hari = $request->input('kode_hari');
        $update->kode_jam = $request->input('kode_jam');

        if ($update->save()) {
            session()->flash('status','done_all');
            session()->flash('pesan','Data berhasil diubah');
        }else{
            session()->flash('status','clear');
            session()->flash('pesan','Data gagal diubah');
        }

        return redirect('Akademik/Jadwal');
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
        $hapus = Jadwal::find($dec);

        if ($hapus->delete()) {
            session()->flash('status','done_all');
            session()->flash('pesan','Data berhasil dihapus');
        }else{
            session()->flash('status','clear');
            session()->flash('pesan','Data gagal dihapus');
        }

        return redirect('Akademik/Jadwal');
    }

    public function search(Request $request){
        $cari = $request->input('cari');
        $jadwals = Jadwal::where('kode_jadwal','LIKE','%'.$cari.'%')->sortable()->paginate(10);

        return view('Akademik.Jadwal.jadwalIndex',compact('jadwals'))->with('no',($request->input('page',1)-1)*10);
    }
}
