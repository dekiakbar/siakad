@extends('Akademik.masterAkademik')
@section('judul','Detail Jadwal')

@section('content')
		<div class="card">
    		<div class="card-header">
    		    <div class="row" style="margin-bottom: 0;">
    		  	   <div class="col s12">
    		  		  <h4 class="text-center cyan-text">Detail Jadwal</h4>
    		        </div>
    		    </div>
    		</div>
    		<div class="card-content">
                    <div class="row">
                        <div class="col s12 m12">
                            <div class="chip">
                                Kelas : {{ $keterangan->nama_kelas }}
                            </div>
                            <div class="chip">
                                Jurusan : {{ $keterangan->nama_jurusan }}
                            </div>
                            <div class="chip">
                                Tahun : {{ date('Y',strtotime($keterangan->tahun)) }}
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <table class="table centered responsive-table bordered highlight">
                            <thead>
                                <tr class="white-text blue">
                                    <th class="text-center">No</th>
                                    <th class="text-center">Hari</th>
                                    <th class="text-center">Waktu</th>
                                    <th class="text-center">Mata Kuliah</th>
                                    <th class="text-center">Dosen</th>
                                    <th class="text-center">Ruang</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jadwals as $no => $jadwal)
                                    <tr>
                                        <th class="text-center">{{ $no+1 }}</th>
                                        <th class="text-center">{{ $jadwal->nama_hari }}</th>
                                        <th class="text-center">{{ $jadwal->waktu_mulai }}-{{ $jadwal->waktu_selesai }}</th>
                                        <th class="text-center">{{ $jadwal->makul }}</th>
                                        <th class="text-center">{{ $jadwal->nama_dosen }}</th>
                                        <th class="text-center">{{ $jadwal->nama_ruang }}</th>
                                    </tr>
                                @endforeach
                        </table>
                    </div>
    		</div>
    		<div class="card-action">
    		    <div class="fixed-action-btn horizontal click-to-toggle text-right">
				    <a class="btn-floating btn-large blue">
				    	<i class="material-icons">menu</i>
				    </a>
				    <ul>
				    	<li>
                            <a href="{{ route('Jadwal.pdf',[encrypt($keterangan->kelas_id),'download'=>'pdf']) }}" class="btn-floating cyan" title="Download File">
                                <i class="material-icons">cloud_download</i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ action('Akademik\Jadwal\JadwalController@pdf',encrypt($keterangan->kelas_id)) }}" class="btn-floating yellow" title="Lihat File">
                                <i class="material-icons">document</i>
                            </a>
                        </li>  
				    	<li>
                            <a class="btn-floating green" onclick="goBack()" title="Kembali">
                                <i class="material-icons">keyboard_backspace</i>
                            </a>
                        </li>
				    </ul>
			  	</div>
    		</div>
      	</div>
@endsection
