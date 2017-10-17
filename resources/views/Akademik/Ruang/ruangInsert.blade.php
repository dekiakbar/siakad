@extends('Akademik.masterAkademik')

@section('judul','Tambah Data Ruangan')

@section('content')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center"><strong class="cyan-text">Insert Ruangan </strong></span>
					<div class="row">
						<div class="col s6 m4 right">
							<div class="input-field col s12 m12">
								{{ Form::open(['route' => 'Mahasiswa.search','method' => 'post']) }}
										{{ Form::text('cari',null,['id' => 'cari','class' => 'col s12']) }}
										<label for="cari">Cari</label>
								{{ Form::close() }}	
							</div>	
						</div>
					</div>
					<div class="container">
						<div class="row">
							{{ Form::open(array('route' => 'Ruang.search','method' => 'post','class' => 'col s12')) }}
								<div class="row">
									<div class="col s12 input-field">
										{{ Form::text('ruang',null,['id' => 'ruang','data-length' => '20']) }}
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
				</div>
			</div>
		</div>
	</div>
@endsection