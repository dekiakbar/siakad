@extends('Mahasiswa.masterMahasiswa')

@section('title', 'Insert Data')

@section('content')
	<div class="col-sm-12 text-center">
		<h4>Insert Data Mahasiswa</h4>
	</div>
	<div class="content">
		{{ Form::open(array('url' => 'Mahasiswa', 'method' => 'post','files' => true, 'class' => 'col s12')) }}
			{{csrf_field()}}
			<div class="row">
				<div class="col s6 input-field">
					<i class="material-icons prefix">format_list_numbered</i>
					{{ Form::text('nim',null,['id' => 'nim','data-length' => '8']) }}
					<label for="nim">NIM</label>
				</div>
				<div class="input-field col s6">
					<i class="material-icons prefix">account_circle</i>
					{{ Form::text('nama',null,['id' => 'nama','data-length' => '30']) }}
					<label for="nama">Nama Mahasiswa</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">phone</i>
					{{ Form::text('no_tlp',null,['id' => 'notlp','data-length' => '12']) }}
					<label for="notlp">No Telpon</label>
				</div>
				<div class="col s6 input-field">
					<i class="material-icons prefix">email</i>
					{{ Form::text('email',null,['id' => 'email','data-length' => '30']) }}
					<label for="email">E-mail</label>
				</div>
			</div>
			<div class="row">
				<div class="col s6 input-field">
					<i class="material-icons prefix">assignment_ind</i>
					{{ Form::text('tempat',null,['id' => 'tempat', 'data-length' => '20']) }}
					<label for="tempat">Tempat Lahir</label>
				</div>
				<div class="col s6 input-field">
					<i class="material-icons prefix">perm_contact_calendar</i>
					{{ Form::text('tanggal',null,['id' => 'datepicker','data-length' => '15']) }}
					<label for="datepicker">Tanggal Lahir</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<div class="row">
						<div class="col s4">
							<i class="material-icons prefix">accessibility</i>
							<label>Jenis Kelamin</label>
						</div>
						<div class="col s4">
							{{ Form::radio('jenis_kelamin','Laki-Laki',true,['id' => 'jenis_kelamin','class' => 'with-gap']) }}
							<label for="jenis_kelamin">Laki-Laki</label>
						</div>
						<div class="col s4">
							{{ Form::radio('jenis_kelamin','Perempuan',false,['id' => 'jenis_kelamin1','class' => 'with-gap']) }}
							<label for="jenis_kelamin1">Perempuan</label>
						</div>
					</div>
				</div>
				<div class="col s6 input-field">
					<div class="file-field input-field">
				    	<div class="btn">
				    		<span>File</span>
				    		{{ Form::file('foto') }}
				    	</div>
				    	<div class="file-path-wrapper">
				    		<input class="file-path validate" type="text">
				    	</div>
				    </div>
				</div>
			</div>
			<div class="row">
				<div class="col s6 input-field">
					<i class="material-icons prefix">library_books</i>
					{{ Form::textarea('alamat',null,['id' => 'alamat','data-length' => '100', 'class' => 'materialize-textarea']) }}
					<label for="alamat">Alamat :</label>
				</div>
				<div class="col s6 input-field">
					{{ Form::select('id_jurusan',['' => 'Pilih Jurusan']+$data ,1,['id' => 'jurusan', 'style' => 'display:inline-block','class' => 'blue-text']) }}
					
				</div>
			</div>
			<div class="row">
				<div class="col s12 text-center">
					<button class="btn btn-sm waves-light waves-effect blue"><i class="material-icons right">send</i>Simpan</button>
				</div>
			</div>
		{{ Form::close() }}
		@if($errors->any())
			<div class="col-sm-12">
    			<div class="alert alert-danger">
        			@foreach($errors->all() as $error)
            			<p>{{ $error }}</p>
        			@endforeach
    			</div>
    		</div>
		@endif
		@if(session()->has('status'))
			<div class="col-sm-12">
				<div class="alert alert-{{session('status')}}">
					{!!session('pesan')!!}
				</div>
			</div>
		@endif
	</div>
@endsection