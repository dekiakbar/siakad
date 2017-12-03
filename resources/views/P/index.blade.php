@extends('P.master')

@section('judul','E-Library')

@section('isi')
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
				      		<a href="#" onclick="" id="detail">
				      			<i class="right floated zoom icon teal" style="font-size: 30px;"></i>
				      		</a>
				      		<div class="header">
				        		Judul
				      		</div>
				      		<div class="meta">
				        		<code>User email mwkwkwkkwkwkwwkkw</code>
				      		</div>
				      		<div class="description">
				        		A description about send to user email.mwkwkwkkwkwkwwkkw
				      		</div>
				    	</div>
				    	<div class="extra content">
				      		<span class="left floated like">
						      <a href="" data-tooltip="Like This Book" data-position="top center">
						      	<i class="like icon"></i>
						      </a>
						      Like
						    </span>
						    <span class="right floated star">
						      <a href="" data-tooltip="Download This Book" data-position="top center">
						      	<i class="download icon"></i>
						      </a>
						      Download
						    </span>
				    	</div>
					</div>

					<div class="ui longer modal detail" style="top: 765px; display: block !important;">
					    <div class="header">
					      Profile Picture
					    </div>
					    <div class="scrolling image content">
					    	<div class="ui medium image">
					        	<img src="Modal%20|%20Semantic%20UI_files/image.png">
					      	</div>
					      	<div class="description">
					        	<div class="ui header">Modal Header</div>
					        	<p>This is an example of expanded content that will cause the modal's dimmer to scroll</p>
					        	<img class="ui wireframe image" src="Modal%20|%20Semantic%20UI_files/paragraph.png">
						        <div class="ui divider"></div>
						        <img class="ui wireframe image" src="Modal%20|%20Semantic%20UI_files/paragraph.png">
						        <div class="ui divider"></div>
						        <img class="ui wireframe image" src="Modal%20|%20Semantic%20UI_files/paragraph.png">
						        <div class="ui divider"></div>
						        <img class="ui wireframe image" src="Modal%20|%20Semantic%20UI_files/paragraph.png">
						        <div class="ui divider"></div>
						        <img class="ui wireframe image" src="Modal%20|%20Semantic%20UI_files/paragraph.png">
						        <div class="ui divider"></div>
						        <img class="ui wireframe image" src="Modal%20|%20Semantic%20UI_files/paragraph.png">
						        <div class="ui divider"></div>
						        <img class="ui wireframe image" src="Modal%20|%20Semantic%20UI_files/paragraph.png">
					      	</div>
					    </div>
					    <div class="actions">
					      	<div class="ui primary approve button">
					        	Proceed
					        	<i class="right chevron icon"></i>
					      	</div>
					    </div>
				  	</div>

				  	<div class="card">
				    	<div class="content">
				      		<i class="right floated mail icon teal" style="font-size: 30px;"></i>
				      		<div class="header" style="white-space: nowrap;text-overflow: ellipsis; overflow: hidden;">
				        		Email to Account #888 wokwowkwokwokwowkowkwokwowkwok
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
				 	</div>
				</div>

	        </div>
		</div>
@endsection