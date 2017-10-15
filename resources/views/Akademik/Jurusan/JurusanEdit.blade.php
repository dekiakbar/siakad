@extends('Akademik.masterAkademik')

@section('judul','Tambah Jurusan')

@section('content')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center"><strong class="cyan-text">Edit Data Jurusan</strong></span>
					<br>
					<div class="container-fluid">
						{{ Form::open(array('method' => 'post','action' => ['Akademik\Jurusan\JurusanController@update',encrypt($edit->id)],'class' => 'col s12')) }}
							{{ Form::hidden('_method','PATCH') }}
							<div class="row">
								<div class="input-field col s12 m6">
									<i class="material-icons prefix">assignment</i>
									{{ Form::text('kode_jurusan',$edit->kode_jurusan,['id' => 'kode','data-length' => '8']) }}
									<label for="kode">Kode Jurusan</label>
								</div>
								<div class="input-field col s12 m6">
									<i class="material-icons prefix">account_balance</i>
									{{ Form::text('nama_jurusan',$edit->nama_jurusan,['id' => 'jurusan','data-length' => '30']) }}
									<label for="jurusan">Nama Jurusan</label>
								</div>
							</div>
							<div class="row">
								<div class="col s12 m6 input-field">
									<div class="row left">
										<div class="col s4 m2">
											<label>Jenjang :</label>	
										</div>
										<div class="col s4 m2">
											{{ Form::radio('jenjang','D1',true,['class' => 'with-gap','id' => 'jenjang']) }}
											<label for="jenjang">D1</label>	
										</div>
										<div class="col s4 m2">
											{{ Form::radio('jenjang', 'D3',false,['class' => 'with-gap','id' => 'jenjang1']) }}
											<label for="jenjang1">D3</label>
										</div>
										<div class="col s4 m2">
											{{ Form::radio('jenjang', 'S1',false,['class' => 'with-gap','id' => 'jenjang2']) }}
											<label for="jenjang2">S1</label>
										</div>
										<div class="col s4 m2">
											{{ Form::radio('jenjang', 'S2',false,['class' => 'with-gap','id' => 'jenjang3']) }}
											<label for="jenjang3">S2</label>
										</div>
										<div class="col s4 m2">
											{{ Form::radio('jenjang', 'S3',false,['class' => 'with-gap','id' => 'jenjang4']) }}
											<label for="jenjang4">S3</label>
										</div>
									</div>
								</div>
								<div class="col s12 m6 input-field">
									<select name="fakultas">
										@foreach($datas as $data)
											@if($edit->id_fakultas == $data->id)
												<option value="{{ $data->id }}" selected>{{ $data->nama_fak }}</option>
											@else
												<option value="{{ $data->id }}">{{ $data->nama_fak }}</option>
											@endif
										@endforeach
									</select>
									<label>Fakultas :</label>						
								</div>
							</div>
							<div class="col s12">
								<div class="row text-center">
									<button class="btn waves-light waves-effect blue"><i class="material-icons right">cloud_upload</i>Update</button>
								</div>
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