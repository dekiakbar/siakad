@extends('P.A.master')
@section('judul','E-Library | Kategori')

@section('isi')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
						<div class="col s12 m6">
							<span class="card-title text-center"><strong class="cyan-text">Tambah Kategori</strong></span>
							<div class="container-fluid">
								{{ Form::open(array('action' => ['P\PerpusController@updateKat',$data->p_kategori_id],'class' => 'col s12', 'method' => 'post')) }}
									{{ Form::hidden('_method','PATCH') }}
									<div class="row">
										<div class="input-field col s12 m12">
											{{ Form::text('nama_kategori',$data->nama_kategori,['id' => 'kategori','data-length' => '100']) }}
											<label for="kategori">Nama Kategori</label>
										</div>
										<div class="input-field col s12 m12 text-center">
											<button class="btn waves-effect waves-light blue"><i class="material-icons right">send</i>Simpan</button>			
										</div>
									</div>
								{{ Form::close() }}
							</div>
						</div>
				</div>
				</div>
			</div>
		</div>
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
@endsection