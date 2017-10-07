@extends('Akademik.masterAkademik')
@section('judul','Daftar Mata Kuliah')

@section('content')
	<div class="col s12">
		<h4 class="text-center">Daftar Mata Kuliah</h4>
	</div>
	<div class="content">
		<table class="table centered responsive-table bordered">
			<thead>
				<tr>
					<td class="text-center">No</td>
					<td class="text-center">Kode Mata Kuliah</td>
					<td class="text-center">Nama Mata Kuliah</td>
					<td class="text-center">Jumlah SKS</td>
					<td class="text-center">Aksi</td>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $no =>$data)
				<tr>
					<td>{{ ++$no}}</td>
					<td>{{$data->kode_mk}}</td>
					<td>{{$data->makul}}</td>
					<td>{{$data->sks}}</td>
					<td class="text-center"> 
						{!!Form::open(['method' => 'DELETE','route' => ['Makul.destroy', encrypt($data->id)]])!!}
							<a href="{{action('Akademik\Makul\MakulController@edit',encrypt($data->id))}}" class="btn btn-floating waves-light waves-effect blue"><i class="material-icons">mode_edit</i></a>
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