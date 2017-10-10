@extends('Akademik.masterAkademik')
@section('judul','Detail Mahasiswa')

@section('content')
		<div class="card">
    		<div class="card-header">
    		    <div class="row">
    		  	   <div class="col s12">
    		  		  <h4 class="text-center">Detail Mahasiswa</h4>
    		        </div>
    		    </div>
    		</div>
    		<div class="card-content">
    		    <div class="panel panel-info">
                    <div class="panel-heading cyan">
                      <h3 class="panel-title white-text">{{ $data->nama }}</h3>
                    </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center"> 
                            <img src="/imageMahasiswa/{{ $data->link }}" class="img-thumbnail img-responsive"> 
                        </div>
                        <div class=" col-md-9 col-lg-9 "> 
                            <table class="table table-user-information">
                                <tbody>
                                    <tr>
                                        <td>NIM</td>
                                        <td>{{ $data->nim }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Lahir</td>
                                        <td>{{ $data->tempat }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td>{{ $data->tanggal }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>{{ $data->jenis_kelamin }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><a href="mailto:{{ $data->email }}">{{ $data->email }}</a></td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Telepon</td>
                                        <td>{{ $data->no_tlp }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jurusan</td>
                                        <td>{{ $jurusan->nama_jurusan.'('.$jurusan->kode_jurusan.')' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jenjang</td>
                                        <td>{{ $jurusan->jenjang }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>{{ $data->alamat }}</td>
                                    </tr>  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    		</div>
    		<div class="card-action">
    		    <div class="fixed-action-btn horizontal click-to-toggle text-right">
				    <a class="btn-floating btn-large blue">
				    	<i class="material-icons">menu</i>
				    </a>
				    <ul>
				    	<li>
                            {{Form::Open(['method' => 'DELETE','route' => ['Mahasiswa.destroy',$data->id]])}}
                                <button type="submit" class="btn btn-floating red">
                                    <i class="material-icons">delete</i>
                                </button>
                            {{ Form::close()}}
				    	</li>
				    	<li>
                            <a href="{{ action('Akademik\Mahasiswa\MahasiswaController@edit',$data->id) }}" class="btn-floating cyan" title="Edit Data">
                                <i class="material-icons">edit</i>
                            </a>
                        </li>
				    	<li>
                            <a class="btn-floating green" onclick="goBack()" title="Kembali">
                                <i class="material-icons">keyboard_backspace</i>
                            </a>
                        </li>
				    </ul>
			  	</div>
    		</div>
      	</div>
@endsection
