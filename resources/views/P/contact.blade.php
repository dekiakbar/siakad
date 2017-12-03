@extends('P.master')

@section('judul','E-Library')

@section('isi')
	<div class="container">
		<form class="ui form">
		  	<h4 class="ui dividing header centered">Contact Us</h4>
		  	<div class="field">
		    	<label>Name</label>
		    	<div class="two fields">
		      		<div class="field">
		        		<input name="nama" placeholder="First Name" type="text">
		      		</div>
		      		<div class="field">
		        		<input name="shipping[last-name]" placeholder="Last Name" type="text">
		      		</div>
		    	</div>
		  	</div>
		  	<div class="field">
		    	<label>Email Address</label>
		    	<div class="fields">
		      		<div class="sixteen wide field">
		        		<input name="shipping[address]" placeholder="Street Address" type="text">
		      		</div>
		    	</div>
		  	</div>
		  	<div class="field">
		    	<label>Message</label>
		    	<textarea></textarea>
		  	</div>
		  	<button class="ui inverted blue button">Send</button>
		</form>
	</div>
@endsection