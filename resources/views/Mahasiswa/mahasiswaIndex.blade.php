@extends('Mahasiswa.masterMahasiswa')
@section('title','Daftar Mahasiswa')

@section('content')
	<div class="col s12">
		<h4 class="text-center">Daftar mahasiswa</h4>
	</div>
	<div class="content" style="margin-right: 20px;">
		<table class="table table-stripped">
			<thead>
				<tr>
					<td>NIM</td>
					<td>Nama</td>
					<td>Jenis Kelamin</td>
					<td>Tempat Tanggal Lahir</td>
					<td>No Handphone</td>
					<td>Email</td>
					<td>Jurusan</td>
					<td>Aksi</td>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $data)
				<tr>
					<td>{{$data->nim}}</td>
					<td>{{$data->nama}}</td>
					<td>{{$data->jenis_kelamin}}</td>
					<td>{{$data->tempat.','.$data->tanggal}}</td>
					<td>{{$data->no_tlp}}</td>
					<td>{{$data->email}}</td>
					<td>{{$data->id_jurusan}}</td>
					<td>
						{{Form::Open(['method' => 'DELETE','route' => ['Mahasiswa.destroy',$data->id]])}}
							<a href="{{action('Mahasiswa\MahasiswaController@edit', $data->id)}}" class="btn-floating btn-sm waves-light waves-effect blue">
								<i class="material-icons">mode_edit</i>
							</a>
							<button type="submit" class="btn btn-floating waves-effect waves-light red">
								<i class="material-icons">delete</i>
							</button>
						{{ Form::close()}}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@if(session()->has('status'))
			<div class="col-sm-12">
				<div class="alert alert-{{session('status')}}">
					{!!session('pesan')!!}
				</div>
			</div>
		@endif
	</div>
@endsection