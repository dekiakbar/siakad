@extends('Makul.makulMaster')
@section('title','Tambah Mata Kuliah')

@section('content')
	<div class="col-sm-12">
		<h4 class="text-center">Insert Data Mata Kuliah</h4>
	</div>
	<div class="container">
		{{csrf_field()}}
		{{Form::Open(array('url' => 'Makul' ,'method' => 'post'))}}
		<div class="form-group row">
			<label class="col-sm-3 col-form-label col-form-label-lg">Kode Mata Kuliah :</label>
			<div class="col-sm-9">
				{{ Form::text('kode_mk',null,['class' => 'form-control','placeholder' => 'Masukan Kode Mata Kuliah'])}}
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-3 col-form-label col-form-label-lg">Nama Mata Kuliah :</label>
			<div class="col-sm-9">
				{{Form::text('makul',null,['class' => 'form-control', 'placeholder' => 'Masukan Nama Mata Kuliah'])}}
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label col-form-label-lg">Jumlah SKS</label>
			<div class="col-sm-9">
				{{Form::text('sks', null,['class' => 'form-control', 'placeholder' => 'Masukan Jumlah SKS'])}}
			</div>
		</div>
		<div class="col-sm-12 text-center">
			{{Form::submit('Simpan', ['class' => 'btn waves-effect waves-light blue darken-2'])}}
		</div>
		{{Form::close()}}
		@if($errors->any())
			<div class="col-sm-12">
				@foreach($errors->all() as $error)
					<div class="alert alert-danger">{{$error}}</div>
				@endforeach
			</div>
		@endif
		@if(session()->has('status'))
			<div class="col-sm-12">
				<div class="alert alert-{{session('status')}}">
					{!!session('pesan')!!}
				</div>
			</div>
		@endif
	</div>
@endsection