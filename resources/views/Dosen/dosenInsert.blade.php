@extends('Dosen.masterDosen')

@section('judul', 'Inser Data Dosen')

@section('content')
	<div class="col s12">
		<h4 class="text-center">Insert Data Dosen</h4>
	</div>
	<div class="row">
		{{Form::open(array('url' => 'Dosen', 'method' => 'post', 'class' => 'col s12'))}}
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">format_list_numbered</i>
					{{Form::text('nip',null,['id' => 'nip'])}}
					<label for="nip">NIP</label>
				</div>
				<div class="input-field col s6">
					<i class="material-icons prefix">account_circle</i>
					{{Form::text('nama',null,['id' => 'nama'])}}
					<label for="nama">Nama Dosen</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">phone</i>
					{{Form::text('notlp',null,['id' => 'tlp'])}}
					<label for="tlp"> No Telpon</label>
				</div>
				<div class="input-field col s6">
					<div class="col s4">
						<i class="material-icons prefix">accessibility</i>
						<label>Jenis Kelamin :</label>
					</div>
					<div class="col s4">
						{{Form::radio('jeniskelamin','Laki-Laki',true,['class' => 'with-gap','id' => 'jenkel'])}}
						<label for="jenkel">Laki-Laki</label>
					</div>
					<div class="col s4">
						{{Form::radio('jeniskelamin','Perempuan',false,['class' => 'with-gap', 'id' => 'jenkel1'])}}
						<label for="jenkel1">Perempuan</label>
					</div>
				</div>
			</div>		
	</div>
@endsection