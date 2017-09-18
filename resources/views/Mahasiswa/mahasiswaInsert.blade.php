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
					<i class="material-icons prefix">photo_camera</i>
					{{ Form::file('foto') }}
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
		{{-- <form method="post" action="{{url('Mahasiswa')}}" enctype="multipart/form-data">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label col-form-label-lg">Nim :</label>
				<div class="col-sm-10">
					<input type="text" name="nim" class="form-control" placeholder="Masukan NIM">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label col-form-label-lg">Nama :</label>
				<div class="col-sm-10">
					<input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label col-form-label-lg">Alamat :</label>
				<div class="col-sm-10">
					<input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat">
				</div>
			</div>
			<div class="row form-group">
				<label class="col-form-label col-form-label-lg col-sm-2">No Tlp :</label>
				<div class="col-sm-10">
					<input type="text" name="no_tlp" placeholder="08xxxxxxxxxxx" class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label col-form-label-lg">Email :</label>
				<div class="col-sm-10">
					<input type="text" name="email" placeholder="email@contoh.com" class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label-lg col-form-label">Tempat Lahir :</label>
				<div class="col-sm-5">
					<input type="text" name="tempat" placeholder="Masukan Tempat Lahir" class="form-control">
				</div>
				<label class="col-sm-2 col-form-label">Tanggal Lahir:</label>
				<div class="col-sm-3">
					<input type="text" name="tanggal" class="form-control" id="datepicker" placeholder="Tanggal Lahir">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-form-label col-form-label-lg col-sm-2">Jenis Kelamin :</label>
				<div class="col-sm-2">
					<select name="jenis_kelamin">
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</div>
				<label class="col-sm-1 col-form-label col-form-label-lg">Jurusan :</label>
				<div class="col-sm-2">
					<select name="id_jurusan">
						<option value="1">Teknik Informatika</option>
						<option value="2">Teknik Elektro</option>
					</select>
				</div>
				<label class="col-sm-1 col-form-label col-form-label-lg">Foto :</label>
				<div class="col-sm-4">
					<input type="file" name="foto">
				</div>
			</div>
			<div class="col-sm-12 text-center">
				<button type="submit" class="btn btn-primary ">Save</button>
			</div>
		</form> --}}
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