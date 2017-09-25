@extends('Krs.masterKrs')

@section('judul','Tambah Krs')

@section('content')
	<div class="col s12">
		<h4 class="text-center">Insert KRS</h4>
	</div>
	<div class="content">
		{{ Form::open(array('url' => 'Krs','class' => 'col s12', 'method' => 'post')) }}
			<div class="row">
				<div class="input-field col s4">
					<div class="col s2">
						<label class="input-label">Nama :</label>
					</div>
					<div class="col s10">
						<select name="nim" style="display: inline-block;">
							@foreach($mhs as $mhs)
								<option value="{{ $mhs->nim }}">{{ $mhs->nama }} ({{ $mhs->nim }})</option>
							@endforeach
						</select>						
					</div>
				</div>
				<div class="input-field col s5">
					<div class="col s3">
						<label class="input-label">Nama Dosen :</label>
					</div>
					<div class="col s7">
						<select name="nip" style="display: inline-block;">
							@foreach($dosen as $dosen)
								<option value="{{ $dosen->nip }}">{{ $dosen->nama }} ({{ $dosen->nip }})</option>
							@endforeach
						</select>						
					</div>
				</div>
				<div class="input-field col s5">
					<div class="col s3">
						<label class="input-label">Mata Kuliah :</label>
					</div>
					<div class="col s7">
						<select name="nip" style="display: inline-block;">
							@foreach($makul as $makul)
								<option value="{{ $makul->kode_mk }}">{{ $makul->makul }} ({{ $makul->kode_mk }})</option>
							@endforeach
						</select>						
					</div>
				</div>
			</div>
		{{ Form::close() }}
	</div>
@endsection