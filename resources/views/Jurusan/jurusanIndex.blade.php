@extends('Jurusan.masterJurusan')
@section('judul','Daftar Jurusan')

@section('content')
	<div class="col s12">
		<h4 class="text-center">Daftar Jurusan</h4>
	</div>
	<div class="content" style="margin-right: 20px;">
		<table class="table table-stripped">
			<thead>
				<tr>
					<td>No</td>
					<td>Kode Jurusan</td>
					<td>Nama Jurusan</td>
					<td>Jenjang</td>
					<td>Semester</td>
				</tr>
			</thead>
			<tbody>
				@foreach($jurusan as $no => $jurusan)
				<tr>
					<td>{{++$no}}</td>
					<td>{{$jurusan->kode_jurusan}}</td>
					<td>{{$jurusan->nama_jurusan}}</td>
					<td>{{$jurusan->jenjang}}</td>
					<td>{{$jurusan->jumlah_semester}}</td>
					<td>
						{{Form::Open(['method' => 'DELETE','route' => ['Mahasiswa.destroy',$jurusan->id]])}}
							<a href="{{action('Mahasiswa\MahasiswaController@edit', $jurusan->id)}}" class="btn-floating btn-sm waves-light waves-effect blue">
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