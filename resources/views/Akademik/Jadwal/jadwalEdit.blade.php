@extends('Akademik.masterAkademik')

@section('judul','Edit Jadwal')

@section('content')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center"><strong class="cyan-text">Edit Data Jadwal</strong></span>
					<br>
					<div class="container-fluid">
						{{ Form::open(array('action' =>['Akademik\Jadwal\JadwalController@update',encrypt($data->id)],'class' => 'col s12', 'method' => 'post')) }}
							{{ Form::hidden('_method','PATCH') }}
							<div class="row">
								<div class="input-field col s12 m6">
									{{ Form::text('kode_jadwal',$data->kode_jadwal,['id' => 'kode_jadwal','data-length' => '8']) }}
									<label for="kode_jadwal">Kode Jadwal</label>
								</div>
								<div class="input-field col s12 m6">
									<select name="kode_jurusan">
										@foreach($jrsn as $jrsn)
											@if($data->kode_jurusan == $jrsn->kode_jurusan)
												<option value="{{ $jrsn->kode_jurusan }}" selected>{{ $jrsn->nama_jurusan }} ({{ $jrsn->kode_jurusan }})</option>
											@else
												<option value="{{ $jrsn->kode_jurusan }}">{{ $jrsn->nama_jurusan }} ({{ $jrsn->kode_jurusan }})</option>
											@endif
										@endforeach
									</select>
									<label>Jurusan :</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m6">
									<select name="nip">
										@foreach($dsn as $dsn)
											@if($data->nip == $dsn->nip)
												<option value="{{ $dsn->nip }}" selected>{{ $dsn->nama_dosen }} ({{ $dsn->nip }})</option>
											@else
												<option value="{{ $dsn->nip }}">{{ $dsn->nama_dosen }} ({{ $dsn->nip }})</option>
											@endif
										@endforeach
									</select>	
									<label>Nama Dosen :</label>					
								</div>
								<div class="input-field col s12 m6">
									<select name="kode_mk">
										@foreach($mk as $makul)
											@if($data->kode_mk == $makul->kode_mk)
												<option value="{{ $makul->kode_mk }}" selected>{{ $makul->makul }} ({{ $makul->kode_mk }})</option>
											@else
												<option value="{{ $makul->kode_mk }}">{{ $makul->makul }} ({{ $makul->kode_mk }})</option>
											@endif
										@endforeach
									</select>
									<label>Mata Kuliah :</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m6">
									<select name="kode_ruang">
										@foreach($ruang as $r)
											@if($data->kode_ruang == $r->kode_ruang)
												<option value="{{ $r->kode_ruang }}" selected>{{ $r->nama_ruang }} ({{ $r->kode_ruang }})</option>
											@else
												<option value="{{ $r->kode_ruang }}">{{ $r->nama_ruang }} ({{ $r->kode_ruang }})</option>
											@endif
										@endforeach
									</select>
									<label>Ruang :</label>
								</div>				
								<div class="input-field col s12 m6">
									<select name="kode_kelas">
										@foreach($kls as $kelas)
											@if($data->kode_kelas == $kelas->kode_kelas)
												<option value="{{ $kelas->kode_kelas }}" selected>{{ $kelas->nama_kelas }} ({{ $kelas->kode_kelas }})</option>
											@else
												<option value="{{ $kelas->kode_kelas }}">{{ $kelas->nama_kelas }} ({{ $kelas->kode_kelas }})</option>
											@endif
										@endforeach
									</select>
									<label>Nama Kelas :</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m6">
									<select name="kode_hari">
										@foreach($hr as $hr)
											@if($data->kode_hari == $hr->kode_hari)
												<option value="{{ $hr->kode_hari }}" selected> {{ $hr->nama_hari }} </option>
											@else
												<option value="{{ $hr->kode_hari }}"> {{ $hr->nama_hari }} </option>
											@endif
										@endforeach
									</select>
									<label>Hari :</label>
								</div>
								<div class="input-field col s12 m6">
									<select name="kode_jam">
										@foreach($jam as $jam)
											@if($data->kode_jam == $jam->kode_jam)
												<option value="{{ $jam->kode_jam }}" selected>{{ $jam->waktu_mulai }} - {{ $jam->waktu_selesai }}</option>
											@else
												<option value="{{ $jam->kode_jam }}">{{ $jam->waktu_mulai }} - {{ $jam->waktu_selesai }}</option>
											@endif
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