@extends('Dosen.masterDosen')
@section('judul', 'Data Dosen')

@section('content')
	<div class="col s12">
		<h4 class="text-center">Daftar Data Dosen</h4>
	</div>
	<div class="content" style="margin-right: 20px;">
		<table class="table centered responsive-table bordered">
			<thead>
				<tr>
					<td class="text-center">No</td>
					<td class="text-center">NIP</td>
					<td class="text-center">Nama</td>
					<td class="text-center">No Telpon</td>
					<td class="text-center">Jenis Kelamin</td>
					<td class="text-center">Alamat</td>
					<td class="text-center">Aksi</td>
				</tr>
			</thead>
			<tbody>
				@foreach($dosen as $no => $data)
				<tr>
					<td>{{++$no}}</td>
					<td>{{$data->nip}}</td>
					<td>{{$data->nama}}</td>
					<td>{{$data->notlp}}</td>
					<td>{{$data->jeniskelamin}}</td>
					<td>{{$data->alamat}}</td>
					<td>
						{{Form::Open(['method' => 'DELETE','route' => ['Dosen.destroy',$data->id]])}}
							<a href="{{action('Dosen\DosenController@edit',$data->id)}}" class="btn-floating btn-sm waves-light waves-effect blue">
								<i class="material-icons">mode_edit</i>
							</a>
							<button type="submit" class="btn btn-floating waves-effect waves-light red">
								<i class="material-icons">delete</i>
							</button>
						{{ Form::close() }}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@if(session()->has('status'))
			<div class="col s12">
				<div class="alert alert-{{session('status')}}">
					{!! session('pesan') !!}
				</div>
			</div>
		@endif
	</div>
@endsection