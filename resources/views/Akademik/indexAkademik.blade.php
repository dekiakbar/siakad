@extends('Akademik.masterAkademik')

@section('judul','Akademik')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col s10 offset-s1 m6 l4">
		    	<div class="card blue z-depth-3 hoverable">
		        	<div class="card-content white-text">
		        		<div class="icon-block">
		            		<h6 class="center white-text"><i class="material-icons medium">school</i></h6>
		          			<div class="card-title">
		            			<h6 class="center">Mahasiswa : {{ $mhs }}</h6>
		            		</div>
		        		</div>
		        	</div>
		        	<div class="card-action white">
		          		<a href="Akademik/Mahasiswa"><i class="material-icons">list</i></a>
		          		<a href="Akademik/Mahasiswa/create"><i class="material-icons">add</i></a>
		          	</div>
		    	</div>
		    </div>
		    <div class="col s10 offset-s1 m6 l4">
		    	<div class="card pink z-depth-3 hoverable">
		        	<div class="card-content white-text">
		        		<div class="icon-block">
		            		<h6 class="center white-text"><i class="material-icons medium">book</i></h6>
		          			<div class="card-title">
		            			<h6 class="center">Mata Kuliah : {{ $makul }}</h6>
		            		</div>
		        		</div>
		        	</div>
		        	<div class="card-action white">
		          		<a href="Akademik/Makul"><i class="material-icons">list</i></a>
		          		<a href="Akademik/Makul/create"><i class="material-icons">add</i></a>
		          	</div>
		    	</div>
		    </div>
		    <div class="col s10 offset-s1 m6 l4">
		    	<div class="card brown z-depth-3 hoverable">
		        	<div class="card-content white-text">
		        		<div class="icon-block">
		            		<h6 class="center white-text"><i class="material-icons medium">account_box</i></h6>
		          			<div class="card-title">
		            			<h6 class="center">Dosen : {{ $dsn }}</h6>
		            		</div>
		        		</div>
		        	</div>
		        	<div class="card-action white">
		          		<a href="Akademik/Dosen"><i class="material-icons">list</i></a>
		          		<a href="Akademik/Dosen/create"><i class="material-icons">add</i></a>
		          	</div>
		    	</div>
		    </div>
		    <div class="col s10 offset-s1 m6 l4">
		    	<div class="card grey z-depth-3 hoverable">
		        	<div class="card-content white-text">
		        		<div class="icon-block">
		            		<h6 class="center white-text"><i class="material-icons medium">home</i></h6>
		          			<div class="card-title">
		            			<h6 class="center">Ruang : {{ $ruang }}</h6>
		            		</div>
		        		</div>
		        	</div>
		        	<div class="card-action white">
		          		<a href="Akademik/Ruang"><i class="material-icons">list</i></a>
		          		<a href="Akademik/Ruang/create"><i class="material-icons">add</i></a>
		          	</div>
		    	</div>
		    </div>
		    <div class="col s10 offset-s1 m6 l4">
		    	<div class="card green z-depth-3 hoverable">
		        	<div class="card-content white-text">
		        		<div class="icon-block">
		            		<h6 class="center white-text"><i class="material-icons medium">account_balance</i></h6>
		          			<div class="card-title">
		            			<h6 class="center">Fakultas : {{ $fak }}</h6>
		            		</div>
		        		</div>
		        	</div>
		        	<div class="card-action white">
		          		<a href="Akademik/Fakultas"><i class="material-icons">list</i></a>
		          		<a href="Akademik/Fakultas/create"><i class="material-icons">add</i></a>
		          	</div>
		    	</div>
		    </div>
		    <div class="col s10 offset-s1 m6 l4">
		    	<div class="card purple z-depth-3 hoverable">
		        	<div class="card-content white-text">
		        		<div class="icon-block">
		            		<h6 class="center white-text"><i class="material-icons medium">link</i></h6>
		          			<div class="card-title">
		            			<h6 class="center">Jurusan : {{ $jurusan }}</h6>
		            		</div>
		        		</div>
		        	</div>
		        	<div class="card-action white">
		          		<a href="Akademik/Jurusan"><i class="material-icons">list</i></a>
		          		<a href="Akademik/Jurusan/create"><i class="material-icons">add</i></a>
		          	</div>
		    	</div>
		    </div>
		</div>
	</div>
@endsection