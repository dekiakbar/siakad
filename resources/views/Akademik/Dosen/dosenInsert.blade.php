@extends('Akademik.masterAkademik')

@section('judul', 'Inser Data Dosen')

@section('content')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center"><strong class="cyan-text">Tambah Data Dosen</strong></span>
					<br>
					<div class="container-fluid">
						{{Form::open(array('url' => 'Akademik/Dosen', 'method' => 'post', 'class' => 'col s12'))}}
							<div class="row">
								<div class="input-field col s12 m6">
									<i class="material-icons prefix">format_list_numbered</i>
									{{Form::text('nip',null,['id' => 'nip', 'data-length' => '8'])}}
									<label for="nip">NIP</label>
								</div>
								<div class="input-field col s12 m6">
									<i class="material-icons prefix">account_circle</i>
									{{Form::text('nama',null,['id' => 'nama' ,'data-length' => '50'])}}
									<label for="nama">Nama Dosen</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m6">
									<i class="material-icons prefix">phone</i>
									{{Form::text('notlp',null,['id' => 'tlp' ,'data-length' => '14'])}}
									<label for="tlp"> No Telpon</label>
								</div>
								<div class="input-field col s12 m6">
									<div class="row">
										<div class="col s12 m4">
											<i class="material-icons prefix">accessibility</i>
											<label>Jenis Kelamin :</label>
										</div>
										<div class="col s12 m4">
											{{Form::radio('jeniskelamin','Laki-Laki',true,['class' => 'with-gap','id' => 'jenkel'])}}
											<label for="jenkel">Laki-Laki</label>
										</div>
										<div class="col s12 m4">
											{{Form::radio('jeniskelamin','Perempuan',false,['class' => 'with-gap', 'id' => 'jenkel1'])}}
											<label for="jenkel1">Perempuan</label>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<i class="material-icons prefix">today</i>
									{{Form::text('alamat',null,['id' => 'alamat','data-length' => '100'])}}
									<label for="alamat">Alamat Dosen</label>
								</div>
							</div>
							<div class="row">
								<div class="col s12 text-center">
									<button class="btn btn-sm waves-light waves-effect blue"><i class="material-icons right">send</i>Simpan</button>
								</div>
							</div>
						{{Form::close()}}	

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