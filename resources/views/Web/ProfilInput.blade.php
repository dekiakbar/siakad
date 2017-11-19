@extends('Web.masterWeb')

@section('judul','Profil Web')

@section('content')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center"><strong class="cyan-text">Profil Web</strong></span>
					<div class="container-fluid">
						<div class="row">
							{{ Form::open(array('action' => 'W\ProfController@store','method' => 'post','files' => true,'class' => 'col s12')) }}
								<div class="row">
									<div class="col s12 m6 input-field">
										{{ Form::text('nama_kampus',null,['id' => 'nama_kampus','data-length' => '50']) }}
										<label for="nama_kampus">Nama Kampus</label>
									</div>
									<div class="col s12 m6 input-field">
										{{ Form::text('judul_about',null,['id' => 'judul_about','data-length' => '30']) }}
										<label for="judul_about"> Judul About</label>
									</div>
								</div>
								<div class="row">
									<div class="col s12 m6 input-field">
										{{ Form::text('isi_about',null,['id' => 'isi_about','data-length' => '200']) }}
										<label for="isi_about">Deskripsi About</label>
									</div>
									<div class="file-field input-field col s12 m6">
								    	<div class="btn">
								    		<span>File</span>
								    		{{ Form::file('foto_about') }}
								    	</div>
								    	<div class="file-path-wrapper">
								    		<input class="file-path validate" type="text" placeholder="Foto About">
								    	</div>
									</div>
								</div>
								<div class="row">
									<div class="col s12 m6 input-field">
										{{ Form::text('alamat_kampus',null,['id' => 'alamat_kampus','data-length' => '100']) }}
										<label for="alamat_kampus">Alamat Kampus</label>
									</div>
									<div class="col s12 m6 input-field">
										{{ Form::text('telepon_kampus',null,['id' => 'telepon_kampus','data-length' => '20']) }}
										<label for="telepon_kampus">Telepon Kampus</label>
									</div>
								</div>
								<div class="row">
									<div class="col s12 m6 input-field">
										{{ Form::text('fax_kampus',null,['id' => 'fax_kampus','data-length' => '20']) }}
										<label for="fax_kampus">No Fax</label>
									</div>
									<div class="col s12 m6 input-field">
										{{ Form::text('email_kampus',null,['id' => 'email_kampus','data-length' => '50']) }}
										<label for="email_kampus">Email</label>
									</div>
								</div>
								<div class="row">
									<div class="col s12 m6 input-field">
										{{ Form::text('twitter_kampus',null,['id' => 'twitter_kampus','data-length' => '100']) }}
										<label for="twitter_kampus">Twitter</label>
									</div>
									<div class="col s12 m6 input-field">
										{{ Form::text('fb_kampus',null,['id' => 'fb_kampus','data-length' => '100']) }}
										<label for="fb_kampus">Facebook</label>
									</div>
								</div>
								<div class="row">
									<div class="col s12 m6 input-field">
										{{ Form::text('linkedin_kampus',null,['id' => 'linkedin_kampus','data-length' => '100']) }}
										<label for="linkedin_kampus">Linkedin</label>
									</div>
									<div class="col s12 m6 input-field">
										{{ Form::text('google_kampus',null,['id' => 'google_kampus','data-length' => '100']) }}
										<label for="google_kampus">Google+</label>
									</div>
								</div>
								<div class="row">
									<div class="col s12 m6 input-field">
										{{ Form::text('koordinat',null,['id' => 'koordinat','data-length' => '100']) }}
										<label for="koordinat">Koordinat Map</label>
									</div>
									<div class="file-field input-field col s12 m6">
								    	<div class="btn">
								    		<span>File</span>
								    		{{ Form::file('slider[]',['multiple']) }}
								    	</div>
								    	<div class="file-path-wrapper">
								    		<input class="file-path validate" type="text" placeholder="Foto Slider">
								    	</div>
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