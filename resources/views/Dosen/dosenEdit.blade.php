@extends('Dosen.masterDosen')

@section('judul', 'Edit Data Dosen')

@section('content')
	<div class="col s12">
		<h4 class="text-center">Insert Data Dosen</h4>
	</div>
	<div class="row">
		{{csrf_field()}}
		{{Form::open(array('method' => 'post', 'class' => 'col s12','action' => ['Dosen\DosenController@update',$data->id]))}}
		{{Form::hidden('_method','PATCH')}}
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">format_list_numbered</i>
					{{Form::text('nip',$data->nip,['id' => 'nip', 'data-length' => '8'])}}
					<label for="nip">NIP</label>
				</div>
				<div class="input-field col s6">
					<i class="material-icons prefix">account_circle</i>
					{{Form::text('nama',$data->nama,['id' => 'nama' ,'data-length' => '30'])}}
					<label for="nama">Nama Dosen</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">phone</i>
					{{Form::text('notlp',$data->notlp,['id' => 'tlp' ,'data-length' => '14'])}}
					<label for="tlp"> No Telpon</label>
				</div>
				<div class="input-field col s6">
					<div class="row">
						<div class="col s4">
							<i class="material-icons prefix">accessibility</i>
							<label>Jenis Kelamin :</label>
						</div>
						@if($data->jeniskelamin == 'Laki-Laki')
						<div class="col s4">
							{{Form::radio('jeniskelamin','Laki-Laki',true,['class' => 'with-gap','id' => 'jenkel'])}}
							<label for="jenkel">Laki-Laki</label>
						</div>
						<div class="col s4">
							{{Form::radio('jeniskelamin','Perempuan',false,['class' => 'with-gap', 'id' => 'jenkel1'])}}
							<label for="jenkel1">Perempuan</label>
						</div>
						@endif
						@if($data->jeniskelamin == 'Perempuan')
						<div class="col s4">
							{{Form::radio('jeniskelamin','Laki-Laki',false,['class' => 'with-gap','id' => 'jenkel'])}}
							<label for="jenkel">Laki-Laki</label>
						</div>
						<div class="col s4">
							{{Form::radio('jeniskelamin','Perempuan',true,['class' => 'with-gap', 'id' => 'jenkel1'])}}
							<label for="jenkel1">Perempuan</label>
						</div>
						@endif

					</div>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<i class="material-icons prefix">today</i>
					{{Form::text('alamat',$data->alamat,['id' => 'alamat','data-length' => '100'])}}
					<label for="alamat">Alamat Dosen</label>
				</div>
			</div>
			<div class="row">
				<div class="col s12 text-center">
					<button class="btn btn-sm waves-light waves-effect blue"><i class="material-icons right">send</i>Simpan</button>
				</div>
			</div>
		{{Form::close()}}		
	</div>
@endsection