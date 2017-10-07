@extends('Akademik.masterAkademik')

@section('judul','Tambah Krs')

@section('content')
	<div class="col s12">
		<h4 class="text-center">Insert KRS</h4>
	</div>
	<div class="content">
		{{ Form::open(array('url' => 'Akademik/Krs','class' => 'col s12', 'method' => 'post')) }}
			<div class="row">
				<div class="input-field col s6">
					<div class="col s3">
						<label class="input-label">Nama :</label>
					</div>
					<div class="col s9">
						<select name="nim" style="display: inline-block;">
							@foreach($mhs as $mhs)
								<option value="{{ $mhs->nim }}">{{ $mhs->nama }} ({{ $mhs->nim }})</option>
							@endforeach
						</select>						
					</div>
				</div>
				<div class="input-field col s6">
					<div class="col s3">
						<label class="input-label">Nama Dosen :</label>
					</div>
					<div class="col s9">
						<select name="nip" style="display: inline-block;">
							@foreach($dosen as $dosen)
								<option value="{{ $dosen->nip }}">{{ $dosen->nama_dosen }} ({{ $dosen->nip }})</option>
							@endforeach
						</select>						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<div class="col s3">
						<label class="input-label">Mata Kuliah :</label>
					</div>
					<div class="col s9">
						<select name="kode_mk" style="display: inline-block;">
							@foreach($makul as $makul)
								<option value="{{ $makul->kode_mk }}">{{ $makul->makul }} ({{ $makul->kode_mk }})</option>
							@endforeach
						</select>						
					</div>
				</div>
				<div class="col s6">
					<div class="col s12 input-field">
						{{ Form::text('uts',null, array('id' => 'uts', 'data-length' => '3')) }}
						<label for="uts">Masuka Nilai UTS</label>
					</div>
				</div>				
			</div>
			<div class="row">
				<div class="col s6">
					<div class="col s12 input-field">
						{{ Form::text('uas',null, array('id' => 'uas', 'data-length' => '3')) }}
						<label for="uas">Masuka Nilai UAS</label>
					</div>
				</div>
				<div class="col s6">
					<div class="col s12 input-field">
						{{ Form::text('absen',null, array('id' => 'absen', 'data-length' => '3')) }}
						<label for="absen">Masuka Nilai Absen</label>
					</div>
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
@endsection