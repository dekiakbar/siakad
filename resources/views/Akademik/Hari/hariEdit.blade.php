@extends('Akademik.masterAkademik')

@section('judul','Edit Jam')

@section('content')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center"><strong class="cyan-text">Edit Data Jam</strong></span>
					<br>
					<div class="container-fluid">
						{{ Form::open(array('method' => 'post', 'class' => 'col s12','action' => ['Akademik\Hari\HariController@update',encrypt($edit->id)]))}}
							{{ Form::hidden('_method','PATCH') }}
							<div class="row">
								<div class="input-field col s12 m6">
									{{ Form::text('kode_hari',$edit->kode_hari,['id' => 'kode_hari','data-length' => '8']) }}
									<label for="kode_hari">Kode Hari</label>
								</div>
								<div class="input-field col s12 m6">
									<select name="nama_hari">
										@php
											$hari = ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'];

											for ($i=0; $i < 7; $i++) { 
												if ($edit->nama_hari == $hari[$i]) {
													echo "<option value='".$hari[$i]."' selected>".$hari[$i]."</option>";
												}else{
													echo "<option value='".$hari[$i]."'>".$hari[$i]."</option>";
												}
											}
										@endphp
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