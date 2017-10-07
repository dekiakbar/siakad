@extends('Akademik.masterAkademik')

@section('judul','Edit Data Fakultas')

@section('content')
	<div class="col s12">
		<h4 class="text-center">Edit Data Fakultas</h4>
	</div>
	<div class="container">
		<div class="row">
			{{ Form::open(array('action' => ['Akademik\Fakultas\FakultasController@update',encrypt($data->id)],'method' => 'post', 'class' => 'col s12')) }}
				{{ form::hidden('_method','PATCH') }}
				<div class="row">
					<div class="input-field col s12">
						{{ Form::text('kode_fak',$data->kode_fak,array('id' => 'kode_fak','data-length' => '8')) }}
						<label for="kode_fak">Kode Fakultas</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						{{ Form::text('nama_fak',$data->nama_fak,array('id' => 'nama_fak','data-length' => '30')) }}
						<label for="nama_fak">Nama Fakultas</label>
					</div>
				</div>
				<div class="col s12 text-center">
					<button class="btn waves-light waves-effect blue"><i class="material-icons right">cloud_upload</i>Update</button>
				</div>
			{{ Form::close() }}
		</div>
		@if(session()->has('status'))
			<script type="text/javascript">
	      		const Icon = '<i class="material-icons print">{{ session('status') }}</i>';
				const Message = '{{ session('pesan') }}';
				const $Content = Icon + Message ;
				Materialize.toast( $Content, 4000,'rounded cyan' );
      		</script>
		@endif		
	</div>
@endsection