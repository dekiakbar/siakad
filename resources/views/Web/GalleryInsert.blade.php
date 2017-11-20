@extends('Web.masterWeb')

@section('judul','Profil Web')

@section('content')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center"><strong class="cyan-text">Profil Web</strong></span>
					<div class="container-fluid">
						<div class="row">
							{{ Form::open(array('route' => 'Gallery.store','method' => 'post','files' => true,'class' => 'col s12')) }}
								<div class="row">			
									<div class="file-field input-field col s12 m6">
								    	<div class="btn">
								    		<span>File</span>
								    		{{ Form::file('foto_background1') }}
								    	</div>
								    	<div class="file-path-wrapper">
								    		<input class="file-path validate" type="text" placeholder="Foto Background 1">
								    	</div>
								    </div>
								    <div class="file-field input-field col s12 m6">
								    	<div class="btn">
								    		<span>File</span>
								    		{{ Form::file('foto_background2') }}
								    	</div>
								    	<div class="file-path-wrapper">
								    		<input class="file-path validate" type="text" placeholder="Foto Background 2">
								    	</div>
								    </div>
								</div>
								<div class="row">
									<div class="file-field input-field col s12 m6">
								    	<div class="btn">
								    		<span>File</span>
								    		{{ Form::file('foto_background3') }}
								    	</div>
								    	<div class="file-path-wrapper">
								    		<input class="file-path validate" type="text" placeholder="Foto Background 3">
								    	</div>
								    </div>
								    <div class="file-field input-field col s12 m6">
								    	<div class="btn">
								    		<span>File</span>
								    		{{ Form::file('foto_galery',['multiple']) }}
								    	</div>
								    	<div class="file-path-wrapper">
								    		<input class="file-path validate" type="text" placeholder="Foto Gallery">
								    	</div>
								    </div>
								</div>
								<div class="col s12 text-center">
									<button type="submit" class="btn waves-light waves-effect blue"><i class="material-icons right">send</i>Simpan</button>
								</div>
							{{ Form::close() }}
						</div>
						@if(session()->has('status'))
							<script type="text/javascript">
					      		const Icon = '<i class="material-icons print">{{ session('status') }}</i>';
								const Message = '{{ session('pesan') }}';
								const $Content = Icon + Message ;
								Materialize.toast( $Content, 4000,'rounded cyan' );
				      		</script>
						@endif
						@if($errors->any())
							@foreach($errors->all() as $error)
								<script type="text/javascript">
							      		const Icon = '<i class="material-icons print">clear</i>';
										const Message = '{!! $error !!}';
										const $Content = Icon + Message ;
									Materialize.toast( $Content, 4000,'rounded red' );
					      		</script>
				      		@endforeach
						@endif	
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection