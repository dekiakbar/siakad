@extends('Akademik.masterAkademik')
@section('judul','Daftar Mahasiswa')

@section('content')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center"><strong class="cyan-text">Daftar mahasiswa</strong></span>
					<div class="row">
						<div class="col s6 m4 right">
							{{ Form::open(['route' => 'Mahasiswa.search','method' => 'post']) }}
									<div class="input-field col s12 m12">
										{{ Form::text('cari',null,['id' => 'cari','class' => 'col s12']) }}
										<label for="cari">Cari</label>
									</div>
							{{ Form::close() }}
						</div>
					</div>
					<table class="table centered responsive-table bordered highlight striped">
						<thead>
							<tr class="blue white-text">
								<th class="text-center">No</th>
								<th class="text-center">@sortablelink('nim','NIM')</th>
								<th class="text-center">@sortablelink('nama','Nama')</th>
								<th class="text-center">@sortablelink('jenis_kelamin','Jenis Kelamin')</th>
								<th class="text-center">@sortablelink('tanggal','Tempat Tanggal Lahir')</th>
								<th class="text-center">Aksi</th>
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
						{!! $datas->appends(\Request::except('page'))->render('vendor.pagination.customPagination') !!}
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
@endsection