@extends('Akademik.masterAkademik')
@section('judul','Tambah Mata Kuliah')

@section('content')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center"><strong class="cyan-text">Daftar mahasiswa</strong></span>
					<br>
					<div class="container">
						<div class="row">
							{{Form::Open(array('url' => 'Akademik/Makul' ,'method' => 'post','class' => 'col s12'))}}
								<div class="row">
									<div class="input-field col s12 m12">
										{{Form::text('kode_mk',null,array('id' => 'kode','data-length' => '8'))}}
										<label for="kode">Kode Mata Kuliah</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12 m12">
										{{ Form::text('makul',null, array('id' => 'makul','data-length' => '35'))}}
										<label for="makul">Nama Mata Kuliah</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12 m12">
										{{ Form::text('sks',null, array('id' => 'sks', 'data-length' => '2'))}}
										<label for="sks">Jumlah SKS</label>
									</div>
								</div>
								<div class="col s12 m12 text-center">
									<button class="btn waves-light waves-effect blue"><i class="material-icons right">send</i>Simpan</button>
								</div>
							{{Form::close()}}
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