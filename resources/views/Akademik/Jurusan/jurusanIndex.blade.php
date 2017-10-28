@extends('Akademik.masterAkademik')
@section('judul','Daftar Jurusan')

@section('content')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center"><strong class="cyan-text">Daftar Jurusan</strong></span>
					<div class="container-fluid">
						<div class="row">
							<div class="col s6 m4 right">
								<div class="input-field col s12 m12">
									{{ Form::open(['route' => 'Jurusan.search','method' => 'post']) }}
											{{ Form::text('cari',null,['id' => 'cari','class' => 'col s12']) }}
											<label for="cari">Cari</label>
									{{ Form::close() }}	
								</div>	
							</div>
						</div>
						<div class="content" >
							<table class="table centered responsive-table bordered striped highlight">
								<thead>
									<tr class="blue white-text">
										<th class="text-center">No</th>
										<th class="text-center">@sortablelink('kode_jurusan','Kode Jurusan')</th>
										<th class="text-center">@sortablelink('nama_jurusan',' Nama Jurusan')</th>
										<th class="text-center">@sortablelink('jenjang','Jenjang')</th>
										<th class="text-center">@sortablelink('jumlah_semester',' Semester')</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($jurusans as $jurusan)
									<tr>
										<td>{{++$no}}</td>
										<td>{{$jurusan->kode_jurusan}}</td>
										<td>{{$jurusan->nama_jurusan}}</td>
										<td>{{$jurusan->jenjang}}</td>
										<td>{{$jurusan->jumlah_semester}}</td>
										<td>
											{{Form::Open(['method' => 'DELETE','route' => ['Jurusan.destroy',encrypt($jurusan->id)]])}}
												<a href="{{action('Akademik\Jurusan\JurusanController@edit', encrypt($jurusan->id))}}" class="btn-floating btn-sm waves-light waves-effect blue">
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
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection