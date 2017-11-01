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
						{{ Form::open(array('method' => 'post', 'class' => 'col s12','action' => ['Akademik\Jam\JamController@update',encrypt($edit->id)]))}}
							{{ Form::hidden('_method','PATCH') }}
							<div class="row">
								<div class="input-field col s12 m6">
									{{ Form::text('kode_jam',$edit->kode_jam,['id' => 'kode_jam','data-length' => '8']) }}
									<label for="kode_jam">Kode Jam</label>
								</div>
								<div class="input-field col s12 m6">
									<select name="waktu_mulai">
										@php
											$waktu = [	"08:00","08:45","09:30","10:15","11:00","11:45","12:15","13:00","13:45",
														"14:30","15:15","16:00","16:45","17:30","18:15","19:00","19:45","20:30",
														"21:15","22:00"
													];
											
											for ($i=0; $i < 20 ; $i++) { 
												if (strtotime($edit->waktu_mulai) == strtotime($waktu[$i]) ) {
													echo "<option value='".$waktu[$i]."' selected>".$waktu[$i]."</option>";
												} else {
													echo "<option value='".$waktu[$i]."'>".$waktu[$i]."</option>";
												}
											}
										@endphp
									</select>	
									<label>Waktu Mulai :</label>					
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m6">
									<select name="waktu_selesai">
										@php
											for ($i=0; $i < 20 ; $i++) { 
												if (strtotime($edit->waktu_selesai) == strtotime($waktu[$i]) ) {
													echo "<option value='".$waktu[$i]."' selected>".$waktu[$i]."</option>";
												} else {
													echo "<option value='".$waktu[$i]."'>".$waktu[$i]."</option>";
												}
											}
										@endphp
									</select>
									<label>Waktu Selesai :</label>
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