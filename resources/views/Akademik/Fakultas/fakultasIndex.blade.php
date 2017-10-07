@extends('Akademik.masterAkademik')

@section('judul','Daftar Fakultas')

@section('content')
	<div class="col s12">
		<h4 class="text-center">Daftar Fakultas</h4>
	</div>
	<div class="content">
		<table class="table centered responsive-table bordered">
			<thead>
				<tr>
					<td class="text-center">Kode Fakultas</td>
					<td class="text-center">Nama Fakultas</td>
				</tr>
			</thead>
			<tbody>
				@foreach($datas as $data)
					<tr>
						<td>{{ $data->kode_fak }}</td>
						<td>{{ $data->nama_fak }}</td>
						<td class="text-center"> 
							{!!Form::open(['method' => 'DELETE','route' => ['Fakultas.destroy', encrypt($data->id)]])!!}
								<a href="{{action('Akademik\Fakultas\FakultasController@edit',encrypt($data->id))}}" class="btn btn-floating waves-light waves-effect blue"><i class="material-icons">mode_edit</i></a>
								<button type="submit" class="btn btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></button>
							{!! Form::close()!!}		
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		@if(session()->has('status'))
			<script type="text/javascript">
	      		const Icon = '<i class="material-icons print">{{ session('status') }}</i>';
				const Message = '{{ session('pesan') }}';
				const $Content = Icon + Message ;
				Materialize.toast( $Content, 4000,'rounded cyan' );
      		</script>
		@endif	
	</div>
@endsection