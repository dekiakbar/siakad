@extends('Makul.makulMaster')
@section('title','List Mata Kuliah')

@section('content')
	<div class="col s12">
		<h4 class="text-center">Daftar Mata Kuliah</h4>
	</div>
	<div class="container">
		<table class="table table stripped">
			<thead>
				<tr>
					<td>Kode Mata Kuliah</td>
					<td>Nama Mata Kuliah</td>
					<td>Jumlah SKS</td>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $data)
				<tr>
					<td>{{$data->kode_mk}}</td>
					<td>{{$data->makul}}</td>
					<td>{{$data->sks}}</td>
					<td> 
						<a href="{{action('Makul\MakulController@edit',$data->id)}}" class="btn waves waves-effect blue">Edit</a>
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