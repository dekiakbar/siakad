<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Jadwal</title>
    <link rel="stylesheet" href="{{ ltrim(elixir('css/app.css'), '/') }}" />
</head>
<body>
	<div class="container-fluid">
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
</body>
</html>