@extends('Akademik.masterAkademik')

@section('judul','Edit Data Ruangan')

@section('content')
	<div class="col s12">
		<h4 class="text-center">Edit Data Ruangan</h4>
	</div>
	<div class="container">
		<div class="row">
			{{ Form::open(array('action' => ['Akademik\Ruang\RuangController@update',encrypt($edit->id)],'method' => 'post','class' => 'col s12')) }}
				{{ form::hidden('_method','PATCH') }}
				<div class="row">
					<div class="col s12 input-field">
						{{ Form::text('ruang',$edit->nama_ruang,['id' => 'ruang','data-length' => '10']) }}
						<label for="ruang">Nama Ruangan</label>
					</div>
				</div>
				<div class="col s12 text-center">
					<button type="submit" class="btn waves-light waves-effect blue"><i class="material-icons right">send</i>Simpan</button>
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