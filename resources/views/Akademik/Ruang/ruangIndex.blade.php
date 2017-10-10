@extends('Akademik.masterAkademik')

@section('judul','Daftar Ruangan')
@section('content')
	<div class="col s12">
		<h4 class="text-center cyan-text">Daftar Ruang Kelas</h4>
	</div>
	<div class="container">
		<table class="table responsive-table centered">
			<thead>
				<tr>
					<td class="text-center">Kelas</td>
					<td class="text-center">Action</td>
				</tr>
			</thead>
			<tbody>
				@foreach($datas as $data)
					<tr>
						<td>{{ $data->nama_ruang }}</td>
						<td class="text-center"> 
							{!!Form::open(['method' => 'DELETE','route' => ['Ruang.destroy', encrypt($data->id)]])!!}
								<a href="{{action('Akademik\Ruang\RuangController@edit',encrypt($data->id))}}" class="btn btn-floating waves-light waves-effect blue"><i class="material-icons">mode_edit</i></a>
								<button type="submit" class="btn btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></button>
							{!! Form::close()!!}		
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection