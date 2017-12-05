@extends('P.A.master')
@section('judul','E-Library | Kategori')

@section('isi')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<br>
					<div class="row">
						<div class="col s12 m6">
							<span class="card-title text-center"><strong class="cyan-text">Tambah Kategori</strong></span>
							<div class="container-fluid">
								{{ Form::open(array('route' => 'tambah.kategori','class' => 'col s12', 'method' => 'post')) }}
									<div class="row">
										<div class="input-field col s12 m12">
											{{ Form::text('nama_kategori',null,['id' => 'kategori','data-length' => '100']) }}
											<label for="kategori">Nama Kategori</label>
										</div>
										<div class="input-field col s12 m12 text-center">
											<button class="btn waves-effect waves-light blue"><i class="material-icons right">send</i>Simpan</button>			
										</div>
									</div>
								{{ Form::close() }}
							</div>
						</div>
						<div class="col s12 m6">
							<span class="card-title text-center"><strong class="cyan-text">Tambah Bahasa</strong></span>
							<div class="container-fluid">
								{{ Form::open(array('route' => 'Hari.store','class' => 'col s12', 'method' => 'post')) }}
									<div class="row">
										<div class="input-field col s12 m12">
											{{ Form::text('nama_bahasa',null,['id' => 'nama_bahasa','data-length' => '100']) }}
											<label for="nama_bahasa">Nama Bahasa</label>
										</div>
										<div class="input-field col s12 m12 text-center">
											<button class="btn waves-effect waves-light blue"><i class="material-icons right">send</i>Simpan</button>			
										</div>
									</div>
								{{ Form::close() }}
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<span class="card-title text-center"><strong class="cyan-text">Tambah Subkategori</strong></span>
						<br>
						<div class="col s12 m12">
							<div class="container-fluid">
								{{ Form::open(array('route' => 'Hari.store','class' => 'col s12', 'method' => 'post')) }}
									<div class="row">
										<div class="input-field col s12 m6">
											{{ Form::text('nama_subkategori',null,['id' => 'subkategori','data-length' => '100']) }}
											<label for="subkategori">Nama Subkategori</label>
										</div>
										<div class="input-field col s12 m6">
											<select name="nama_hari">
												<option value="Senin">Senin</option>
												<option value="Selasa">Selasa</option>
												<option value="Rabu">Rabu</option>
												<option value="Kamis">Kamis</option>
												<option value="Jumat">Jumat</option>
												<option value="Sabtu">Sabtu</option>
												<option value="Minggu">Minggu</option>
											</select>	
											<label>Nama Subkategori :</label>					
										</div>
									</div>
									<div class="col s12 text-center">
										<button class="btn waves-effect waves-light blue"><i class="material-icons right">send</i>Simpan</button>
									</div>
								{{ Form::close() }}
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<span class="card-title text-center"><strong class="cyan-text">Tambah Lisensi</strong></span>
						<br>
						<div class="col s12 m12">
							<div class="container-fluid">
								{{ Form::open(array('route' => 'Hari.store','class' => 'col s12', 'method' => 'post')) }}
									<div class="row">
										<div class="input-field col s12 m6">
											{{ Form::text('lisensi',null,['id' => 'lisensi','data-length' => '100']) }}
											<label for="lisensi">Nama Lisensi</label>
										</div>
										<div class="input-field col s12 m6">
											{{ Form::text('link_lisensi',null,['id' => 'link_lisensi','data-length' => '200']) }}
											<label for="link_lisensi">URL Lisensi</label>				
										</div>
									</div>
									<div class="col s12 text-center">
										<button class="btn waves-effect waves-light blue"><i class="material-icons right">send</i>Simpan</button>
									</div>
								{{ Form::close() }}
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<span class="card-title text-center"><strong class="cyan-text">Tambah Penulis</strong></span>
						<br>
						<div class="col s12 m12">
							<div class="container-fluid">
								{{ Form::open(array('route' => 'Hari.store','class' => 'col s12', 'method' => 'post')) }}
									<div class="row">
										<div class="input-field col s12 m6">
											{{ Form::text('nama_penulis',null,['id' => 'nama_penulis','data-length' => '100']) }}
											<label for="nama_penulis">Nama Penulis</label>
										</div>
										<div class="input-field col s12 m6">
											{{ Form::text('link_penulis',null,['id' => 'link_penulis','data-length' => '200']) }}
											<label for="link_lisensi">URL Penulis</label>				
										</div>
									</div>
									<div class="col s12 text-center">
										<button class="btn waves-effect waves-light blue"><i class="material-icons right">send</i>Simpan</button>
									</div>
								{{ Form::close() }}
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<span class="card-title text-center"><strong class="cyan-text">Tambah Penerbit</strong></span>
						<br>
						<div class="col s12 m12">
							<div class="container-fluid">
								{{ Form::open(array('route' => 'Hari.store','class' => 'col s12', 'method' => 'post')) }}
									<div class="row">
										<div class="input-field col s12 m6">
											{{ Form::text('nama_penerbit',null,['id' => 'nama_penerbit','data-length' => '100']) }}
											<label for="nama_penerbit">Nama Penerbit</label>
										</div>
										<div class="input-field col s12 m6">
											{{ Form::text('link_penerbit',null,['id' => 'link_penerbit','data-length' => '200']) }}
											<label for="link_penerbit">URL Penerbit</label>				
										</div>
									</div>
									<div class="col s12 text-center">
										<button class="btn waves-effect waves-light blue"><i class="material-icons right">send</i>Simpan</button>
									</div>
								{{ Form::close() }}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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
@endsection