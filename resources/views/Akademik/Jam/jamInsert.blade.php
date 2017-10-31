@extends('Akademik.masterAkademik')

@section('judul','Tambah Jam')

@section('content')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center"><strong class="cyan-text">Tambah Data Jam</strong></span>
					<br>
					<div class="container-fluid">
						{{ Form::open(array('route' => 'Jam.store','class' => 'col s12', 'method' => 'post')) }}
							<div class="row">
								<div class="input-field col s12 m6">
									{{ Form::text('kode_jam',null,['id' => 'kode_jam','data-length' => '8']) }}
									<label for="kode_jam">Kode Jam</label>
								</div>
								<div class="input-field col s12 m6">
									<select name="waktu_mulai">
										<option value="">08:00</option>
										<option value="">08:45</option>
										<option value="">09:30</option>
										<option value="">10:15</option>
										<option value="">11:00</option>
										<option value="">11:45</option>
										<option value="">12:15</option>
										<option value="">13:00</option>
										<option value="">13:45</option>
										<option value="">14:30</option>
										<option value="">15:15</option>
										<option value="">16:00</option>
										<option value="">16:45</option>
										<option value="">17:30</option>
										<option value="">18:15</option>
										<option value="">19:00</option>
										<option value="">19:45</option>
										<option value="">20:30</option>
										<option value="">21:15</option>
										<option value="">22:00</option>
									</select>	
									<label>Waktu Mulai :</label>					
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m6">
									<select name="waktu_selesai">
										<option value="">08:00</option>
										<option value="">08:45</option>
										<option value="">09:30</option>
										<option value="">10:15</option>
										<option value="">11:00</option>
										<option value="">11:45</option>
										<option value="">12:15</option>
										<option value="">13:00</option>
										<option value="">13:45</option>
										<option value="">14:30</option>
										<option value="">15:15</option>
										<option value="">16:00</option>
										<option value="">16:45</option>
										<option value="">17:30</option>
										<option value="">18:15</option>
										<option value="">19:00</option>
										<option value="">19:45</option>
										<option value="">20:30</option>
										<option value="">21:15</option>
										<option value="">22:00</option>
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