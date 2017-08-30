@extends('Mahasiswa.masterMahasiswa')

@section('title', 'Insert Data')

@section('content')
	<div class="container">
		<form method="post" action="{{url('Mahasiswa')}}">
			<div class="form-group row">
				{{csrf_field()}}
				<label class="col-sm-2 col-form-label col-form-label-lg">Nim :</label>
				<div class="col-sm-10">
					<input type="text" name="nim" class="form-control" placeholder="Masukan NIM">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label col-form-label-lg">Nama :</label>
				<div class="col-sm-10">
					<input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label col-form-label-lg">Alamat :</label>
				<div class="col-sm-10">
					<input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat">
				</div>
			</div>
			
		</form>
	</div>
@endsection