@extends('Makul.makulMaster')
@section('title','List Mata Kuliah')

@section('content')
	<div class="col s12">
		<h4 class="text-center">Daftar Mata Kuliah</h4>
	</div>
	<div class="container">
		<table class="table table-stripped">
			<thead>
				<tr>
					<td>Kode Mata Kuliah</td>
					<td>Nama Mata Kuliah</td>
					<td>Jumlah SKS</td>
					<td class="text-center">Aksi</td>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $data)
				<tr>
					<td>{{$data->kode_mk}}</td>
					<td>{{$data->makul}}</td>
					<td>{{$data->sks}}</td>
					<td> 
						{!!Form::open(['method' => 'DELETE','route' => ['Makul.destroy', $data->id]])!!}
							<a href="{{action('Makul\MakulController@edit',$data->id)}}" class="btn btn-floating waves-light waves-effect blue"><i class="material-icons">mode_edit</i></a>
							<button type="submit" class="btn btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></button>
						{!! Form::close()!!}
							
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@if(session()->has('status'))
		<div class="col s12">
			<div class="alert alert-{{session('status')}}">
				{!!session('pesan')!!}
			</div>
		</div>
		@endif
	</div>
@endsection