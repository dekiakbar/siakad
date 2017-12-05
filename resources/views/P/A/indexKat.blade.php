@extends('P.A.master')
@section('judul','E-Library | Daftar Kategori')

@section('isi')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center"><strong class="cyan-text">Daftar Kategori</strong></span>
					<div class="container">
						<div class="content">
							<br>
							<table class="table centered responsive-table bordered highlight striped">
								<thead>
									<tr class="white-text blue">
										<th class="text-center">No</th>
										<th class="text-center">Nama Kategori</th>
										<th class="text-center">Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach($datas as $data)
									<tr>
										<td>{{ ++$no }}</td>
										<td>{{ $data->nama_kategori }}</td>			
										<td>
											{{Form::Open(['method' => 'DELETE','route' => ['hapus.kategori',encrypt($data->p_kategori_id)]])}}
												<a href="{{action('P\PerpusController@editKat', encrypt($data->p_kategori_id))}}" class="btn-floating btn-sm waves-light waves-effect blue">
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
		</div>
	</div>
@endsection