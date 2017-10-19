@extends('Akademik.masterAkademik')

@section('judul','Daftar Kelas')
@section('content')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center"><strong class="cyan-text">Daftar Kelas</strong></span>
					<div class="container">
						<div class="row">
							<div class="col s6 m4 right">
								<div class="input-field col s12 m12">
									{{ Form::open(['route' => 'Kelas.search','method' => 'post']) }}
											{{ Form::text('cari',null,['id' => 'cari','class' => 'col s12']) }}
											<label for="cari">Cari</label>
									{{ Form::close() }}	
								</div>	
							</div>
						</div>
						<table class="table responsive-table centered highlight striped">
							<thead>
								<tr class="blue white-text">
									<th class="text-center">No</th>
									<th class="text-center">@sortablelink('kode_kelas','Kode Kelas')</th>
									<th class="text-center">@sortablelink('kode_jurusan','Kode Jurusan')</th>
									<th class="text-center">@sortablelink('nama_kelas','Nama Kelas')</th>
									<th class="text-center">@sortablelink('tahun','Tahun')</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($datas as $data)
									<tr>
										<td>{{ ++$no }}</td>
										<td>{{ $data->kode_kelas }}</td>
										<td>{{ $data->kode_jurusan }}</td>
										<td>{{ $data->nama_kelas }}</td>
										<td>{{ $data->tahun }}</td>
										<td class="text-center"> 
											{!!Form::open(['method' => 'DELETE','route' => ['Kelas.destroy', encrypt($data->id)]])!!}
												<a href="{{action('Akademik\Ruang\KelasController@edit',encrypt($data->id))}}" class="btn btn-floating waves-light waves-effect blue"><i class="material-icons">mode_edit</i></a>
												<button type="submit" class="btn btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></button>
											{!! Form::close()!!}		
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					<div class="col s12 m12 text-center">
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
	</div>
@endsection