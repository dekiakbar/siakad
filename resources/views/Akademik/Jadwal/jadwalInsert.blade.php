@extends('Akademik.masterAkademik')

@section('judul','Tambah Jadwal')

@section('content')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center"><strong class="cyan-text">Tambah Data Jadwal</strong></span>
					<br>
					<div class="container-fluid">
						{{ Form::open(array('route' => 'Jadwal.store','class' => 'col s12', 'method' => 'post')) }}
							<div class="row">
								<div class="input-field col s12 m6">
									{{ Form::text('kode_jadwal',null,['id' => 'kode_jadwal','data-length' => '8']) }}
									<label for="kode_jadwal">Kode Jadwal</label>
								</div>
								<div class="input-field col s12 m6">
									<select name="kode_jurusan">
										@foreach($jrsn as $jrsn)
											<option value="{{ $jrsn->kode_jurusan }}">{{ $jrsn->nama_jurusan }} ({{ $jrsn->kode_jurusan }})</option>
										@endforeach
									</select>
									<label>Jurusan :</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m6">
									<select name="nip">
										@foreach($dsn as $dsn)
											<option value="{{ $dsn->nip }}">{{ $dsn->nama_dosen }} ({{ $dsn->nip }})</option>
										@endforeach
									</select>	
									<label>Nama Dosen :</label>					
								</div>
								<div class="input-field col s12 m6">
									<select name="kode_mk">
										@foreach($mk as $makul)
											<option value="{{ $makul->kode_mk }}">{{ $makul->makul }} ({{ $makul->kode_mk }})</option>
										@endforeach
									</select>
									<label>Mata Kuliah :</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m6">
									<select name="kode_ruang">
										@foreach($ruang as $r)
											<option value="{{ $r->kode_ruang }}">{{ $r->nama_ruang }} ({{ $r->kode_ruang }})</option>
										@endforeach
									</select>
									<label>Ruang :</label>
								</div>				
								<div class="input-field col s12 m6">
									<select name="kode_kelas">
										@foreach($kls as $kelas)
											<option value="{{ $kelas->kode_kelas }}">{{ $kelas->nama_kelas }} ({{ $kelas->kode_kelas }})</option>
										@endforeach
									</select>
									<label>Nama Kelas :</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m6">
									<select name="kode_hari">
										@foreach($hr as $hr)
											<option value="{{ $hr->kode_hari }}"> {{ $hr->nama_hari }} </option>
										@endforeach
									</select>
									<label>Hari :</label>
								</div>
								<div class="input-field col s12 m6">
									<select name="kode_jam">
										@foreach($jam as $jam)
											<option value="{{ $jam->kode_jam }}">{{ $jam->waktu_mulai }} - {{ $jam->waktu_selesai }}</option>
										@endforeach
									</select>
									<label>Jam :</label>
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