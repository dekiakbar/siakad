@extends('Makul.makulMaster')
@section('judul','Tambah Mata Kuliah')

@section('content')
	<div class="col-sm-12">
		<h4 class="text-center">Insert Data Mata Kuliah</h4>
	</div>
	<div class="container">
		<div class="row">
			{{csrf_field()}}
			{{Form::Open(array('url' => 'Makul' ,'method' => 'post','class' => 'col s12'))}}
				<div class="row">
					<div class="input-field col s12">
						{{Form::text('kode_mk',null,array('id' => 'kode','data-length' => '8'))}}
						<label for="kode">Kode Mata Kuliah</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						{{ Form::text('makul',null, array('id' => 'makul','data-length' => '35'))}}
						<label for="makul">Nama Mata Kuliah</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						{{ Form::text('sks',null, array('id' => 'sks', 'data-length' => '2'))}}
						<label for="sks">Jumlah SKS</label>
					</div>
				</div>
				<div class="col s12 text-center">
					<button class="btn waves-light waves-effect blue"><i class="material-icons right">send</i>Simpan</button>
				</div>
			{{Form::close()}}
		</div>
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