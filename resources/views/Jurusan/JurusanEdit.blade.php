@extends('masterAkademik')
@section('judul','Tambah Jurusan')
@section('content')
	<div class="col s12">
		<h4 class="text-center">Edit Jurusan</h4>
	</div>
	<div class="content">
		{{ csrf_field() }}
		{{ Form::open(array('method' => 'post','action' => ['Jurusan\JurusanController@update',encrypt($edit->id)],'class' => 'col s12')) }}
			{{ Form::hidden('_method','PATCH') }}
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">assignment</i>
					{{ Form::text('kode_jurusan',$edit->kode_jurusan,['id' => 'kode','data-length' => '8']) }}
					<label for="kode">Kode Jurusan</label>
				</div>
				<div class="input-field col s6">
					<i class="material-icons prefix">account_balance</i>
					{{ Form::text('nama_jurusan',$edit->nama_jurusan,['id' => 'jurusan','data-length' => '30']) }}
					<label for="jurusan">Nama Jurusan</label>
				</div>
			</div>
			<div class="row">
				<div class="col s12 input-field">
					<div class="row">
						<div class="col s2">
							<i class="material-icons prefix">grade</i>
							<label>Jenjang :</label>	
						</div>
						<div class="col s2">
							{{ Form::radio('jenjang','D1',true,['class' => 'with-gap','id' => 'jenjang']) }}
							<label for="jenjang">Diploma 1</label>	
						</div>
						<div class="col s2">
							{{ Form::radio('jenjang', 'D3',false,['class' => 'with-gap','id' => 'jenjang1']) }}
							<label for="jenjang1">Diploma 3</label>
						</div>
						<div class="col s2">
							{{ Form::radio('jenjang', 'S1',false,['class' => 'with-gap','id' => 'jenjang2']) }}
							<label for="jenjang2">Strata 1</label>
						</div>
						<div class="col s2">
							{{ Form::radio('jenjang', 'S2',false,['class' => 'with-gap','id' => 'jenjang3']) }}
							<label for="jenjang3">Strata 2</label>
						</div>
						<div class="col s2">
							{{ Form::radio('jenjang', 'S3',false,['class' => 'with-gap','id' => 'jenjang4']) }}
							<label for="jenjang4">Strata 3</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col s12">
				<div class="row text-center">
					<button class="btn waves-light waves-effect blue"><i class="material-icons right">cloud_upload</i>Update</button>
				</div>
			</div>
		{{ Form::close() }}
		@if($errors->any())
			@foreach($errors->all() as $error)
				<script type="text/javascript">
			      		const Icon = '<i class="material-icons print">clear</i>';
						const Message = '{!! $error !!}';
						const $Content = Icon + Message ;
					Materialize.toast( $Content, 4000,'rounded red' );
	      		</script>
      		@endforeach
		@endif	
	</div>
@endsection