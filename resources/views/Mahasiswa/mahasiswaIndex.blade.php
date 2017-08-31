@extends('Mahasiswa.masterMahasiswa')
@section('title','Daftar Mahasiswa')

@section('content')
	<div class="col-sm-12">
		<h3 class="text-center">Daftar mahasiswa</h3>
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
					<td>Aksi</td>
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
					<td><a href="{{action('Mahasiswa\MahasiswaController@edit', $data['id'])}}" class="btn btn-primary btn-sm">Edit</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection