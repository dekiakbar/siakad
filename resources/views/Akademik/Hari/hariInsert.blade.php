@extends('Akademik.masterAkademik')

@section('judul','Tambah Hari')

@section('content')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center"><strong class="cyan-text">Tambah Data Hari</strong></span>
					<br>
					<div class="container-fluid">
						{{ Form::open(array('route' => 'Hari.store','class' => 'col s12', 'method' => 'post')) }}
							<div class="row">
								<div class="input-field col s12 m6">
									{{ Form::text('kode_hari',null,['id' => 'kode_hari','data-length' => '8']) }}
									<label for="kode_hari">Kode Hari</label>
								</div>
								<div class="input-field col s12 m6">
									<select name="nama_hari">
										<option value="Senin">Senin</option>
										<option value="Selasa">Selasa</option>
										<option value="Rabu">Rabu</option>
										<option value="Kamis">Kamis</option>
										<option value="Jumat">Jumat</option>
										<option value="Sabtu">Sabtu</option>
										<option value="Minggu">Minggu</option>
									</select>	
									<label>Nama Hari :</label>					
								</div>
							</div>
							<div class="col s12 text-center">
								<button class="btn waves-effect waves-light blue"><i class="material-icons right">send</i>Simpan</button>
							</div>
						{{ Form::close() }}

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