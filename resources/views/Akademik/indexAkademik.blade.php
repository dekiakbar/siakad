@extends('Akademik.masterAkademik')

@section('judul','Akademik')

@section('content')
	<div class="container-fluid">
				<div class="row">
			        <div class="col s12 m4">
			          	<div class="card blue z-depth-3 hoverable">
				            <div class="card-content white-text">
				            	<span class="card-title"><i class="material-icons medium right">school</i>Mahasiswa</span>
				            	<h5>{{ $mhs }}</h5>
				            </div>
				            <div class="card-action white-text white">
				              	<a href="#">This is a link</a>
				              	<a href="#">This is a link</a>
			            	</div>
			          	</div>
			        </div>
			        <div class="col s12 m4">
			          	<div class="card purple z-depth-3 hoverable">
				            <div class="card-content white-text">
				            	<span class="card-title"><i class="material-icons medium right">book</i>Mata Kuliah</span>
				              	<h5>{{ $makul }}</h5>
				            </div>
				            <div class="card-action white-text white">
				              	<a href="#">This is a link</a>
				              	<a href="#">This is a link</a>
			            	</div>
			          	</div>
			        </div>
			        <div class="col s12 m4">
			          	<div class="card orange z-depth-3 hoverable">
				            <div class="card-content white-text">
				            	<span class="card-title"><i class="material-icons medium right">account_box</i>Dosen</span>
				              	<h5>{{ $dsn }}</h5>
				            </div>
				            <div class="card-action white-text white">
				              	<a href="#">This is a link</a>
				              	<a href="#">This is a link</a>
			            	</div>
			          	</div>
			        </div>
			        <div class="col s12 m4">
			          	<div class="card green z-depth-3 hoverable">
				            <div class="card-content white-text">
				            	<span class="card-title"><i class="material-icons medium right">home</i>Ruang</span>
				              	<h5>{{ $ruang }}</h5>
				            </div>
				            <div class="card-action white-text white">
				              	<a href="#">This is a link</a>
				              	<a href="#">This is a link</a>
			            	</div>
			          	</div>
			        </div>
			        <div class="col s12 m4">
			          	<div class="card pink z-depth-3 hoverable">
				            <div class="card-content white-text">
				            	<span class="card-title"><i class="material-icons medium right">star</i>Jurusan</span>
				              	<h5>{{ $jurusan }}</h5>
				            </div>
				            <div class="card-action white-text white">
				              	<a href="#">This is a link</a>
				              	<a href="#">This is a link</a>
			            	</div>
			          	</div>
			        </div>
			        <div class="col s12 m4">
			          	<div class="card grey z-depth-3 hoverable">
				            <div class="card-content white-text">
				            	<span class="card-title"><i class="material-icons medium right">link</i>Fakultas</span>
				              	<h5>{{ $fak }}</h5>
				            </div>
				            <div class="card-action white-text white">
				              	<a href="#">This is a link</a>
				              	<a href="#">This is a link</a>
			            	</div>
			          	</div>
			        </div>
			    </div>
	</div>
@endsection