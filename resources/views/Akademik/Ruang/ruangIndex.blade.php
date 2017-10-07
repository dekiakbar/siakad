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
				</tr>
			</thead>
			<tbody>
				@foreach($datas as $data)
					<tr>
						<td>{{ $data->nama_ruang }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection