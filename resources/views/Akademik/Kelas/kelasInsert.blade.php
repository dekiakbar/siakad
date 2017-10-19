@extends('Akademik.masterAkademik')

@section('judul','Tambah Data Kelas')

@section('content')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center"><strong class="cyan-text">Insert Data Kelas </strong></span>
					<br>
					<div class="container">
						<div class="row">
							{{ Form::open(array('route' => 'Kelas.store','method' => 'post','class' => 'col s12')) }}
								<div class="row">
									<div class="col s12 m6 input-field">
										{{ Form::text('kode_kelas',null,['id' => 'kode_kelas','data-length' => '8']) }}
										<label for="kode_kelas">Kode Kelas</label>
									</div>
									<div class="col s12 m6 input-field">
										{{ Form::text('nama_kelas',null,['id' => 'kelas','data-length' => '50']) }}
										<label for="kelas">Nama Kelas</label>
									</div>
								</div>
								<div class="row">
									<div class="col s12 m6 input-field">
										{{ Form::select('kode_jurusan',$jurusans) }}
									</div>
									<div class="col s12 m6 input-field">
										{{ Form::text('tahun',null,['id' => 'datepicker','data-length' => 10]) }}
										<label for="datepicker">Tahun</label>
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
				</div>
			</div>
		</div>
	</div>
@endsection