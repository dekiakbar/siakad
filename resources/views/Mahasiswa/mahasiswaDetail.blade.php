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
    		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    		  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    		  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    		  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    		  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    		  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    		</div>
    		<div class="card-action">
    		    <div class="fixed-action-btn horizontal click-to-toggle text-right" style="position: relative;bottom: auto;margin-bottom: auto;padding: none;right: auto;">
				    <a class="btn-floating btn-large blue">
				    	<i class="material-icons">menu</i>
				    </a>
				    <ul>
				    	<li><a class="btn-floating red" title="Hapus Data"><i class="material-icons">delete_forever</i></a></li>
				    	<li><a class="btn-floating cyan" title="Edit Data"><i class="material-icons">edit</i></a></li>
				    	<li><a class="btn-floating green" onclick="goBack()" title="Kembali"><i class="material-icons">keyboard_backspace</i></a></li>
				    </ul>
			  	</div>
    		</div>
      	</div>
	</div>
@endsection
