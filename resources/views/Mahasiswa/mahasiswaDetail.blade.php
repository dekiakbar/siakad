@extends('Mahasiswa.masterMahasiswa')
@section('judul','Detail Mahasiswa')

@section('content')
	<div class="container-fluid">
		<div class="card">
    		<div class="card-header">
    		  <div class="row">
    		  	<div class="col s12">
    		  		<h4 class="text-center">Detail Mahasiswa</h4>
    		  	</div>
    		  </div>
    		</div>
    		<div class="card-content">
    		  <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
    		</div>
    		<div class="card-action">
    		    <div class="fixed-action-btn horizontal click-to-toggle text-right" style="position: relative;bottom: auto;margin-bottom: auto;padding: none;right: auto;">
				    <a class="btn-floating btn-large blue">
				    	<i class="material-icons">menu</i>
				    </a>
				    <ul>
				    	<li><a class="btn-floating red"><i class="material-icons">delete_forever</i></a></li>
				    	<li><a class="btn-floating cyan"><i class="material-icons">edit</i></a></li>
				    	<li><a class="btn-floating green"><i class="material-icons">home</i></a></li>
				    	<li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
				    </ul>
			  	</div>
    		</div>
      	</div>
	</div>
@endsection
