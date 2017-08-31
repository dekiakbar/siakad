@extends('Mahasiswa.masterMahasiswa')
@section('title','Daftar Mahasiswa')

@section('content')
	<div class="col-sm-12">
		<h3>Daftar mahasiswa</h3>
	</div>
	<div class="container">
		<table class="table table-stripped">
			<thead>
				<tr>
					<td>NIM</td>
					<td>Nama</td>
					<td>Jenis Kelamin</td>
					<td>Tempat Tanggal Lahir</td>
					<td>No Handphone</td>
					<td>Jurusan</td>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $data)
				<tr>
					<td>{{$data['nim']}}</td>
					<td>{{$data['nama']}}</td>
					<td>{{$data['jenis_kelamin']}}</td>
					<td>{{$data['ttl']}}</td>
					<td>{{$data['no_tlp']}}</td>
					<td>{{$data['id_jurusan']}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection