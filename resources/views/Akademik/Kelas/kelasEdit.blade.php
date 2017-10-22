@extends('Akademik.masterAkademik')

@section('judul','Edit Data Kelas')

@section('content')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center"><strong class="cyan-text">Edit Data Kelas</strong></span>
					<div class="container">
						<div class="row">
							{{ Form::open(array('action' => ['Akademik\Kelas\KelasController@update',encrypt($edit->id)],'method' => 'post','class' => 'col s12')) }}
							{{ Form::hidden('_method','PATCH') }}
								<div class="row">
									<div class="col s12 m6 input-field">
										{{ Form::text('kode_kelas',$edit->kode_kelas,['id' => 'kode_kelas','data-length' => '8']) }}
										<label for="kode_kelas">Kode Kelas</label>
									</div>
									<div class="col s12 m6 input-field">
										{{ Form::text('nama_kelas',$edit->nama_kelas,['id' => 'kelas','data-length' => '50']) }}
										<label for="kelas">Nama Kelas</label>
									</div>
								</div>
								<div class="row">
									<div class="col s12 m6 input-field">
										<select name="kode_jurusan">
											@foreach($datas as $data)
												@if($edit->kode_jurusan == $data->kode_jurusan)
													<option value="{{ $data->kode_jurusan }}" selected>{{ $data->nama_jurusan }}</option>
												@else
													<option value="{{ $data->kode_jurusan }}">{{ $data->nama_jurusan }}</option>
												@endif
											@endforeach
										</select>
									</div>
									<div class="col s12 m6 input-field">
										{{ Form::text('tahun',$edit->tahun,['id' => 'datepicker','data-length' => 10]) }}
										<label for="datepicker">Tahun</label>
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