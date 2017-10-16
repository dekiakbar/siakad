@extends('Akademik.masterAkademik')
@section('judul', 'Data Dosen')

@section('content')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center"><strong class="cyan-text">Daftar Dosen</strong></span>
					<br>
					<div class="content">
						<table class="table centered responsive-table bordered highlight striped">
							<thead>
								<tr class="blue white-text">
									<th class="text-center">No</th>
									<th class="text-center">@sortablelink('nip','NIP')</th>
									<th class="text-center">@sortablelink('nama','Nama')</th>
									<th class="text-center">@sortablelink('notlp','No Telpon')</th>
									<th class="text-center">@sortablelink('jeniskelamin','Jenis Kelamin')</th>
									<th class="text-center">Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($dosen as $data)
								<tr>
									<td>{{++$no}}</td>
									<td>{{$data->nip}}</td>
									<td>{{$data->nama_dosen}}</td>
									<td>{{$data->notlp}}</td>
									<td>{{$data->jeniskelamin}}</td>
									<td>
										{{Form::Open(['method' => 'DELETE','route' => ['Dosen.destroy',encrypt($data->id)]])}}
											<a href="{{action('Akademik\Dosen\DosenController@edit',encrypt($data->id))}}" class="btn-floating btn-sm waves-light waves-effect blue">
												<i class="material-icons">mode_edit</i>
											</a>
											<button type="submit" class="btn btn-floating waves-effect waves-light red">
												<i class="material-icons">delete</i>
											</button>
										{{ Form::close() }}
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>

						<div class="col s12 text-center">
							{!! $dosen->appends(\Request::except('page'))->render('vendor.pagination.customPagination') !!}
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