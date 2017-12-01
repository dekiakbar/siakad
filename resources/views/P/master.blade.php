<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('judul')</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/perpus/perpus.css') }}">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
	      <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand" href="#">E-Library</a>
	  </div>

	  <div class="collapse navbar-collapse" id="menu">
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="#">Home</a></li>
	      <li><a href="#">About</a></li>
	      <li><a href="#">Contact</a></li>
	      <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b> List</a>
	        <ul class="dropdown-menu">
	          <li><a href="#">Action</a></li>
	          <li><a href="#">Another action</a></li>
	          <li><a href="#">Something else here</a></li>
	          <li class="divider"></li>
	          <li><a href="#">Separated link</a></li>
	          <li class="divider"></li>
	          <li><a href="#">One more separated link</a></li>
	        </ul>
	      </li>
	    </ul>
	    <div class="col-sm-3 col-md-3">
	        <form class="navbar-form" role="search">
	        <div class="input-group">
	            <input type="text" class="form-control" placeholder="Search" name="q">
	            <div class="input-group-btn">
	                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
	            </div>
	        </div>
	        </form>
	    </div>
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="#">Web</a></li>
	      <li><a href="#">Forum</a></li>
	      <li>
	      	<a href="#"><i class="glyphicon glyphicon-logout"></i>Login</a>
	      </li>
	    </ul>
	  </div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-3">
	        	<div class="ui card">
	        		<div class="content">
		        		<ul class="nav bs-sidenav">
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdowns</a>
							  <ul class="dropdown-menu">
							    <li><a href="#dropdowns-example">Example</a></li>
							    <li><a href="#dropdowns-alignment">Alignment options</a></li>
							    <li><a href="#dropdowns-headers">Headers</a></li>
							    <li><a href="#dropdowns-disabled">Disabled menu items</a></li>
							  </ul>
							</li>
							<li>
							  <a href="#btn-groups">Button groups</a>
							  <ul class="nav">
							    <li><a href="#btn-groups-single">Basic example</a></li>
							    <li><a href="#btn-groups-toolbar">Button toolbar</a></li>
							    <li><a href="#btn-groups-sizing">Sizing</a></li>
							    <li><a href="#btn-groups-nested">Nesting</a></li>
							    <li><a href="#btn-groups-vertical">Vertical variation</a></li>
							    <li><a href="#btn-groups-justified">Justified link variation</a></li>
							  </ul>
							</li>    
			            </ul>
	        		</div>
	        	</div>
	        </div>
	        <div class="col-xs-12 col-sm-8 col-md-9">
				<div class="ui cards">
				  	<div class="card">
				    	<div class="content">
				      		<i class="right floated mail icon teal" style="font-size: 30px;"></i>
				      		<div class="header">
				        		Send to user email
				      		</div>
				      		<div class="meta">
				        		<code>User email</code>
				      		</div>
				      		<div class="description">
				        		A description about send to user email.
				      		</div>
				    	</div>
				    	<div class="extra content">
				      		<div>
				        		<i class="users icon"></i> Staff, Students
				      		</div>
				      		<div>
				        		<i class="user icon"></i> Kaylee Fryee
				      		</div>
				    	</div>
				    <!-- <div class="ui bottom attached button">
				        <i class="edit icon"></i>
				        Edit
				      </div> -->
					</div>

				  	<div class="card">
				    	<div class="content">
				      		<i class="right floated folder icon teal" style="font-size: 30px;"></i>
					      	<div class="header">
					        	Send to HR folder
					      	</div>
					      	<div class="meta">
					        	<code>\\hr\scanned\</code>
					      	</div>
					      	<div class="description">
				        		Scan directly to HR
				      		</div>
				    	</div>
				    	<div class="extra content">
				      		<div>
				        		<i class="users icon"></i> All users
				      		</div>
				    	</div>
					    <!-- <div class="ui bottom attached button">
					        <i class="edit icon"></i>
					        Edit
					      </div> -->
				  	</div>

				  	<div class="card">
				    	<div class="content">
				      		<i class="right floated folder icon teal" style="font-size: 30px;"></i>
					      	<div class="header">
					        	Send to HR folder
					      	</div>
					      	<div class="meta">
					        	<code>\\hr\scanned\</code>
					      	</div>
					      	<div class="description">
				        		Scan directly to HR
				      		</div>
				    	</div>
				    	<div class="extra content">
				      		<div>
				        		<i class="users icon"></i> All users
				      		</div>
				    	</div>
					    <!-- <div class="ui bottom attached button">
					        <i class="edit icon"></i>
					        Edit
					      </div> -->
				  	</div>

				  	<div class="card">
				    	<div class="content">
				      		<i class="right floated folder icon teal" style="font-size: 30px;"></i>
					      	<div class="header">
					        	Send to HR folder
					      	</div>
					      	<div class="meta">
					        	<code>\\hr\scanned\</code>
					      	</div>
					      	<div class="description">
				        		Scan directly to HR
				      		</div>
				    	</div>
				    	<div class="extra content">
				      		<div>
				        		<i class="users icon"></i> All users
				      		</div>
				    	</div>
					    <!-- <div class="ui bottom attached button">
					        <i class="edit icon"></i>
					        Edit
					      </div> -->
				  	</div>

				  	<div class="card">
				    	<div class="content">
				      		<i class="right floated folder icon teal" style="font-size: 30px;"></i>
					      	<div class="header">
					        	Send to HR folder
					      	</div>
					      	<div class="meta">
					        	<code>\\hr\scanned\</code>
					      	</div>
					      	<div class="description">
				        		Scan directly to HR
				      		</div>
				    	</div>
				    	<div class="extra content">
				      		<div>
				        		<i class="users icon"></i> All users
				      		</div>
				    	</div>
					    <!-- <div class="ui bottom attached button">
					        <i class="edit icon"></i>
					        Edit
					      </div> -->
				  	</div>

				  	<div class="card">
				    	<div class="content">
				      		<i class="right floated mail icon teal" style="font-size: 30px;"></i>
				      		<div class="header">
				        		Email to Account #888
				      		</div>
				      		<div class="meta">
				        		<code>888@papercut.com</code>
				      		</div>
				      		<div class="description">
				        		Only to the Serenity crew
				      		</div>
				    	</div>
				    	<div class="extra content">
				      		<div style="white-space: nowrap; text-overflow: ellipsis; overflow: hidden; width: 100%;">
				        		<i class="user icon"></i> Malcolm Reynolds, River Tam, Kaylee Fryee, Inara Serra, Shepherd Book, Jaybe Cobb
				      		</div>
				    	</div>
					    <!-- <div class="ui bottom attached button">
					        <i class="edit icon"></i>
					        Edit
					      </div> -->
				 	</div>
				</div>
	        </div>
		</div>
	</div>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/semantic.min.js') }}"></script>
</body>
</html>