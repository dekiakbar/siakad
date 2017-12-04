@extends('P.master')

@section('judul','E-Library')

@section('isi')
	<div class="ui container aligned">
		<div class="ui centered grid ">
			<div class="ui ten wide column segment piled">
				<form class="ui form">
					<h3 class="ui dividing header centered">Contact Us</h3>
					<div class="field left aligned column">
						<label>Name</label>
						<div class="two fields left aligned column">
					  		<div class="field">
					    		<input name="namadepan" placeholder="First Name" type="text">
					  		</div>
					  		<div class="field left aligned column">
					    		<input name="namabelakang" placeholder="Last Name" type="text">
						  	</div>
						</div>
					</div>
					<div class="field left aligned column">
						<label>Email Address</label>
						<div class="fields">
					  		<div class="sixteen wide field">
					    		<input name="email" placeholder="Street Address" type="text">
					  		</div>
						</div>
					</div>
					<div class="field left aligned column">
						<label>Message</label>
						<textarea rows="3" name="pesan"></textarea>
					</div>
					<div class="field">
						<button class="ui inverted blue button">Send</button>
					</div>
				</form>
			</div>
		</div>		
	</div>
@endsection