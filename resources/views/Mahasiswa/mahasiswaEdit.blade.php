@extends('Mahasiswa.masterMahasiswa')

@section('title', 'Edit Data Mahasiswa')

@section('content')
	<div class="container">
		<form method="post" action="{{action('Mahasiswa\MahasiswaController@update', $id)}}" enctype="multipart/form-data">
			<div class="form-group row">
				<input name="_method" type="hidden" value="PATCH">
				{{csrf_field()}}
				<label class="col-sm-2 col-form-label col-form-label-lg">Nim :</label>
				<div class="col-sm-10">
					<input type="text" name="nim" class="form-control" placeholder="Masukan NIM" value="{{$data->nim}}">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label col-form-label-lg">Nama :</label>
				<div class="col-sm-10">
					<input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="{{$data->nama}}">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label col-form-label-lg">Alamat :</label>
				<div class="col-sm-10">
					<input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" value="{{$data->alamat}}">
				</div>
			</div>
			<div class="row form-group">
				<label class="col-form-label col-form-label-lg col-sm-2">No Tlp :</label>
				<div class="col-sm-10">
					<input type="text" name="no_tlp" placeholder="08xxxxxxxxxxx" class="form-control" value="{{$data->no_tlp}}">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label col-form-label-lg">Email :</label>
				<div class="col-sm-10">
					<input type="text" name="email" placeholder="email@contoh.com" class="form-control" value="{{$data->email}}">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label-lg col-form-label">Tempat Lahir :</label>
				<div class="col-sm-5">
					<input type="text" name="tempat" placeholder="Masukan Tempat Lahir" class="form-control" value="{{$data->tempat}}">
				</div>
				<label class="col-sm-2 col-form-label">Tanggal Lahir:</label>
				<div class="col-sm-3">
					<input type="text" name="tanggal" class="form-control" id="datepicker" placeholder="Tanggal Lahir" value="{{$data->tanggal}}">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-form-label col-form-label-lg col-sm-2">Jenis Kelamin :</label>
				<div class="col-sm-2">
					<select name="jenis_kelamin" value="{{$data->jenis_kelamin}}">
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</div>
				<label class="col-sm-1 col-form-label col-form-label-lg" value="{{$data->id_jurusan}}">Jurusan :</label>
				<div class="col-sm-2">
					<select name="id_jurusan">
						<option value="1">Teknik Informatika</option>
						<option value="2">Teknik Elektro</option>
					</select>
				</div>
				<label class="col-sm-1 col-form-label col-form-label-lg">Foto :</label>
				<div class="col-sm-4">
					<input type="file" name="foto" value="{{$data->link}}">
				</div>
			</div>
			<div class="col-sm-12 text-center">
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</form>
		@if($errors->any())
			<div class="col-sm-12">
				<div class="alert alert-danger">
					@foreach($errors->all() as $error)
						<p>{{ $error }}</p>
					@endforeach
				</div>
			</div>
		@endif
	</div>
@endsection