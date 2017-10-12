@extends('Akademik.masterAkademik')
@section('judul','Daftar Mahasiswa')

@section('content')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center">Daftar mahasiswa</span>
					<div class="content" style="margin-right: 20px;">
						<div class="col s4 m6 right">
							{{ Form::open(array('method' => 'get')) }}
								<div class="row">
									<div class="input-field col s12">
										{{ Form::text('cari',null,['id' => 'cari','class' => 'col s12']) }}
										<label for="cari">Cari</label>
									</div>
								</div>
							{{ Form::close() }}
						</div>
						<table class="table centered responsive-table bordered highlight">
							<thead>
								<tr>
									<td class="text-center">No</td>
									<td class="text-center">NIM</td>
									<td class="text-center">Nama</td>
									<td class="text-center">Jenis Kelamin</td>
									<td class="text-center">Tempat Tanggal Lahir</td>
									<td class="text-center">Aksi</td>
								</tr>
							</thead>
							<tbody>
								@foreach($datas as $data)
								<tr>
									<td>{{ ++$no }}</td>
									<td>{{$data->nim}}</td>
									<td><a href="{{ action('Akademik\Mahasiswa\MahasiswaController@show', encrypt($data->id)) }}">{{$data->nama}}</a></td>
									<td>{{$data->jenis_kelamin}}</td>
									<td>{{$data->tempat.','.$data->tanggal}}</td>
									<td>
										{{Form::Open(['method' => 'DELETE','route' => ['Mahasiswa.destroy',encrypt($data->id)]])}}
											<a href="{{action('Akademik\Mahasiswa\MahasiswaController@edit', encrypt($data->id))}}" class="btn-floating btn-sm waves-light waves-effect blue">
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
						<div class="col s12 text-center">
							{!! $datas->links('vendor.pagination.customPagination') !!}
						</div>
						@if(session()->has('status'))
							<script type="text/javascript">
					      		const Icon = '<i class="material-icons print">{{ session('status') }}</i>';
								const Message = '{{ session('pesan') }}';
								const $Content = Icon + Message ;
								Materialize.toast( $Content, 4000,'rounded cyan' );
				      		</script>
						@endif
					</div>				
				</div>
			</div>			
		</div>
	</div>
@endsection