@extends('Akademik.masterAkademik')
@section('judul','Daftar Jadwal')

@section('content')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center"><strong class="cyan-text">Daftar Jadwal</strong></span>
					<div class="container-fluid">
						<div class="row">
							<div class="col s6 m4 right">
								<div class="input-field col s12 m12">
									{{ Form::open(['route' => 'Jadwal.search','method' => 'post']) }}
											{{ Form::text('cari',null,['id' => 'cari','class' => 'col s12']) }}
											<label for="cari">Cari</label>
									{{ Form::close() }}	
								</div>	
							</div>
						</div>
						<div class="content">
							<table class="table centered responsive-table bordered highlight striped">
								<thead>
									<tr class="white-text blue">
										<th class="text-center">No</th>
										<th class="text-center">@sortablelink('kode_jadwal','Kode Jadwal')</th>
										<th class="text-center">@sortablelink('nip','Nama Dosen')</th>
										<th class="text-center">@sortablelink('kode_ruang','Ruang')</th>
										<th class="text-center">@sortablelink('kode_jurusan','Jurusan')</th>
										<th class="text-center">@sortablelink('kode_kelas','Kelas')</th>
										<th class="text-center">@sortablelink('kode_mk','Mata Kuliah')</th>
										<th class="text-center">Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach($jadwals as $jadwal)
									<tr>
										<td>{{ ++$no }}</td>
										<td>{{ $jadwal->kode_jadwal }}</td>
										<td>{{ $jadwal->nama_dosen}}</td>
										<td>{{ $jadwal->nama_ruang }}</td>
										<td>{{ $jadwal->nama_jurusan }}</td>
										<td>{{ $jadwal->nama_kelas }}</td>
										<td>{{ $jadwal->makul }}</td>			
										<td>
											{{Form::Open(['method' => 'DELETE','route' => ['Jadwal.destroy',encrypt($jadwal->jadwal_id)]])}}
												<a href="{{action('Akademik\Jadwal\JadwalController@edit', encrypt($jadwal->jadwal_id))}}" class="btn-floating btn-sm waves-light waves-effect blue">
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
							<div class="col s12 m12 text-center">
								{!! $jadwals->appends(\Request::except('page'))->render('vendor.pagination.customPagination') !!}
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
	</div>
@endsection