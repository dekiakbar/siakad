@extends('Akademik.masterAkademik')

@section('judul','Jadwal Krs')

@section('content')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center"><strong class="cyan-text">Edit Data Jadwal</strong></span>
					<br>
					<div class="content">
						{{ Form::open(array('action' => ['Akademik\Jadwal\JadwalController@update',encrypt($krs->id)],'class' => 'col s12', 'method' => 'post')) }}
							{{ Form::hidden('_method','PATCH') }}
							<div class="row">
								<div class="input-field col s12 m6">
									<select name="nim">
										@foreach($mhs as $mhs)
											@if($krs->nim == $mhs->nim)
												<option value="{{ $mhs->nim }}" selected>{{ $mhs->nama }} ({{ $mhs->nim }})</option>
											@else
												<option value="{{ $mhs->nim }}">{{ $mhs->nama }} ({{ $mhs->nim }})</option>
											@endif
										@endforeach
									</select>	
									<label>Nama :</label>
								</div>
								<div class="input-field col s12 m6">
									<select name="nip">
										@foreach($dosen as $dosen)
											@if($krs->nip == $dosen->nip)
												<option value="{{ $dosen->nip }}" selected>{{ $dosen->nama_dosen }} ({{ $dosen->nip }})</option>
											@else
												<option value="{{ $dosen->nip }}">{{ $dosen->nama_dosen }} ({{ $dosen->nip }})</option>
											@endif
										@endforeach
									</select>
									<label>Nama Dosen :</label>		
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m6">
									<select name="kode_mk">
										@foreach($makul as $makul)
											@if($krs->kode_mk == $makul->kode_mk)
												<option value="{{ $makul->kode_mk }}" selected>{{ $makul->makul }} ({{ $makul->kode_mk }})</option>
											@else
												<option value="{{ $makul->kode_mk }}">{{ $makul->makul }} ({{ $makul->kode_mk }})</option>
											@endif
										@endforeach
									</select>
									<label>Mata Kuliah :</label>	
								</div>
								<div class="col s12 m6 input-field">
									{{ Form::text('uts',$krs->uts, array('id' => 'uts', 'data-length' => '3')) }}
									<label for="uts">Masuka Nilai UTS</label>
								</div>			
							</div>
							<div class="row">
								<div class="col s12 m6 input-field">
									{{ Form::text('uas',$krs->uas, array('id' => 'uas', 'data-length' => '3')) }}
									<label for="uas">Masuka Nilai UAS</label>
								</div>
								<div class="col s12 m6 input-field">
									{{ Form::text('absen',$krs->absen, array('id' => 'absen', 'data-length' => '3')) }}
									<label for="absen">Masuka Nilai Absen</label>
								</div>
							</div>
							<div class="col s12 text-center">
								<button class="btn waves-effect waves-light blue"><i class="material-icons right">send</i>Simpan</button>
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
				</div>
			</div>
		</div>
	</div>
@endsection