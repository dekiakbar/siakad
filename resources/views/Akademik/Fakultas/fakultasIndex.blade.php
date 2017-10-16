@extends('Akademik.masterAkademik')

@section('judul','Daftar Fakultas')

@section('content')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center"><strong class="cyan-text">Daftar mahasiswa</strong></span>
					<div class="row">
						<div class="col s6 m4 right">
							<div class="input-field col s12 m12">
								{{ Form::open(['route' => 'Fakultas.search','method' => 'post']) }}
										{{ Form::text('cari',null,['id' => 'cari','class' => 'col s12']) }}
										<label for="cari">Cari</label>
								{{ Form::close() }}	
							</div>	
						</div>
					</div>
					<div class="content">
						<table class="table centered responsive-table bordered">
							<thead>
								<tr>
									<th class="text-center">Kode Fakultas</th>
									<th class="text-center">Nama Fakultas</th>
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