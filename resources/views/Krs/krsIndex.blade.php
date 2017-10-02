@extends('Krs.masterKrs')
@section('judul','Daftar Krs')

@section('content')
	<div class="col s12">
		<h4 class="text-center">Daftar Krs</h4>
	</div>
	<div class="content" style="margin-right: 20px;">
		<table class="table centered responsive-table bordered">
			<thead>
				<tr>
					<td class="text-center">Nama</td>
					<td class="text-center">Dosen</td>
					<td class="text-center">Mata Kuliah</td>
					<td class="text-center">Aksi</td>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $krs)
				<tr>
					<td>{{ $krs->nama }}</td>
					<td>{{ $krs->nama_dosen}}</td>
					<td>{{ $krs->makul }}</td>			
					<td>
						{{Form::Open(['method' => 'DELETE','route' => ['Krs.destroy',$krs->id_krs]])}}
							<a href="{{action('Krs\KrsController@edit', $krs->id_krs)}}" class="btn-floating btn-sm waves-light waves-effect blue">
								<i class="material-icons">mode_edit</i>
							</a>
							<button type="submit" class="btn btn-floating waves-effect waves-light red">
								<i class="material-icons">delete</i>
							</button>
						{{ Form::close()}}
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