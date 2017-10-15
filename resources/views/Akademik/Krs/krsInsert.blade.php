@extends('Akademik.masterAkademik')

@section('judul','Tambah Krs')

@section('content')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center"><strong class="cyan-text">Tambah Data KRS</strong></span>
					<br>
					<div class="container-fluid">
						{{ Form::open(array('url' => 'Akademik/Krs','class' => 'col s12', 'method' => 'post')) }}
							<div class="row">
								<div class="input-field col s12 m6">
									<select name="nim">
										@foreach($mhs as $mhs)
											<option value="{{ $mhs->nim }}">{{ $mhs->nama }} ({{ $mhs->nim }})</option>
										@endforeach
									</select>
									<label>Nama :</label>
								</div>
								<div class="input-field col s12 m6">
									<select name="nip">
										@foreach($dosen as $dosen)
											<option value="{{ $dosen->nip }}">{{ $dosen->nama_dosen }} ({{ $dosen->nip }})</option>
										@endforeach
									</select>	
									<label>Nama Dosen :</label>					
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m6">
									<select name="kode_mk">
										@foreach($makul as $makul)
											<option value="{{ $makul->kode_mk }}">{{ $makul->makul }} ({{ $makul->kode_mk }})</option>
										@endforeach
									</select>
									<label>Mata Kuliah :</label>
								</div>
								<div class="col s12 m6 input-field">
									{{ Form::text('uts',null, array('id' => 'uts', 'data-length' => '3')) }}
									<label for="uts">Masuka Nilai UTS</label>
								</div>				
							</div>
							<div class="row">
								<div class="col s12 m6 input-field">
									{{ Form::text('uas',null, array('id' => 'uas', 'data-length' => '3')) }}
									<label for="uas">Masuka Nilai UAS</label>
								</div>
								<div class="col s12 m6 input-field">
									{{ Form::text('absen',null, array('id' => 'absen', 'data-length' => '3')) }}
									<label for="absen">Masuka Nilai Absen</label>
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