@extends('Jurusan.masterJurusan')
@section('judul','Tambah Jurusan')
@section('content')
	<div class="col s12">
		<h4 class="text-center">Tambah Jurusan</h4>
	</div>
	<div class="content">
		{{ Form::open(array('method' => 'psot','url' => 'Jurusan','class' => 'col s12')) }}
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">assignment</i>
					{{ Form::text('kode_jurusan',null,['id' => 'kode','data-length' => '8']) }}
					<label for="kode">Kode Jurusan</label>
				</div>
				<div class="input-field col s6">
					<i class="material-icons prefix">account_balance</i>
					{{ Form::text('nama_jurusan',null,['id' => 'jurusan','data-length' => '20']) }}
					<label for="jurusan">Nama Jurusan</label>
				</div>
			</div>
		{{ Form::close() }}
	</div>
@endsection