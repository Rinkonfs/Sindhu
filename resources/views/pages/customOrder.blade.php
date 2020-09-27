<html>
<head>
    <meta charset="utf-8">
    <title>sindhu store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="Description" content="Custom Sharee designing module from Sindhu Store">
	<link rel="icon" href="{{asset('images/sindhu_logo.png')}}">
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>	
	<script type="text/javascript" src="{{asset('js/module_js/tshirtEditor.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/module_js/jquery.miniColors.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/module_js/fabric.js')}}"></script>


	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
	</script>
	
		
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js "></script>	 --}}
	<script type="text/javascript" src="{{asset('js/module_js/html2canvas.js')}}"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
	
	
	
    
<!-- OWN STYLE START-->
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap.css"> -->
	<script type="text/javascript" src="{{asset('js/module_js/bootstrap.min.js')}}"></script> 
	{{-- <script type="text/javascript" src="{{asset('js/module_js/FileSaver.js')}}"></script> --}}
	 

<!--  OWN STYLE END-->

<style type="text/css" >

	.Arial{font-family:"Arial";}
	.Helvetica{font-family:"Helvetica";}
	.MyriadPro{font-family:"Myriad Pro";}
	.Delicious{font-family:"Delicious";}
	.Verdana{font-family:"Verdana";}
	.Georgia{font-family:"Georgia";}
	.Courier{font-family:"Courier";}
	.ComicSansMS{font-family:"Comic Sans MS";}
	.Impact{font-family:"Impact";}
	.Monaco{font-family:"Monaco";}
	.Optima{font-family:"Optima";}
	.HoeflerText{font-family:"Hoefler Text";}
	.Plaster{font-family:"Plaster";}
	.Engagement{font-family:"Engagement";}

	/*|-------------------------------------------------------------------------------------------------------| 
	|                                         MEDIA QUERY MOBILE              	                              | 
	|                                                                          	    	                      |
	|---------------------------------------------------------------------------------------------------------| */

	@media only screen and (max-width: 600px) {
	#bottom_nav{
		position: fixed;
		bottom: 0px;
		overflow-x:auto;
		display:flex;
		width: 100%;
		height:50px;
		justify-content: space-between;
		align-items: center;
		background-color:black;
		padding:10px;
		color:grey;
	}
	#shirtDiv{
		width: 350px;
		height: 550px;
		position: absolute;
		background-color: rgb(255, 255, 255);
		background: url("{{URL::to('/')}}/images/module_images/sareeBody.png");
		background-blend-mode: multiply;
		background-size: 110%;
		background-position: center;
		background-repeat: no-repeat;
	}
	#par{
		width: 350px;
		height: 550px;
		position: absolute;
		background-blend-mode: multiply;
		background-size: 110%;
		background-position: center;
		background-repeat: no-repeat;
	}
	#shirtDiv2{
		width: 350px;
		height: 550px;
		position: absolute;
		background: url("{{URL::to('/')}}/images/module_images/wholeBody.png");
		background-size: 110%;
		background-position: center;
		background-repeat: no-repeat;
	}
	.top_nav_list_item{
		display: none;
	}
	}
	/*|-------------------------------------------------------------------------------------------------------| 
	|                                         MEDIA QUERY TABLET                                    	      | 
	|                                                                                                   	  |
	|---------------------------------------------------------------------------------------------------------| */
	@media only screen and (min-width: 600px) and (max-width: 768px){
		#bottom_nav{
			position: fixed;
			bottom: 0px;
			overflow-x:auto;
			display:flex;
			width: 100%;
			height:50px;
			justify-content: space-between;
			align-items: center;
			background-color:black;
			padding:10px;
			color:grey;
		}
	#shirtDiv{
		width: 350px;
		height: 650px;
		position: absolute;
		/* background-color: rgb(255, 255, 255); */
		background: url("{{URL::to('/')}}/images/module_images/sareeBody.png");
		background-blend-mode: multiply;
		background-size: 100%;
		background-position: center;
		background-repeat: no-repeat;
	}
	#par{
		width: 350px;
		height: 650px;
		position: absolute;
		background-blend-mode: multiply;
		background-size: 100%;
		background-position: center;
		background-repeat: no-repeat;
	}
	#shirtDiv2{
		width: 350px;
		height: 650px;
		position: absolute;
		background: {{URL::to('/')}}/images/module_images/sareeBody.png;
		background-size: 100%;
		background-position: center;
		background-repeat: no-repeat;
	}
	}
	/*|-------------------------------------------------------------------------------------------------------| 
	  |                                         MEDIA QUERY PC                                                | 
	  |                                                                                                       |
	  |-------------------------------------------------------------------------------------------------------| */

	@media only screen and (min-width: 768px) {
		#bottom_nav{
			display:none;
		}
		#shirtDiv{
			width: 550px;
			height: 750px;
			position: absolute;
			top:0;
			background: url("{{URL::to('/')}}/images/module_images/sareeBody.png");
			background-color: rgb(255, 255, 255);
			background-blend-mode: multiply;
			background-size: 100%;
			background-position: center;
			background-repeat: no-repeat;
		}
		#par{
			width: 550px;
			height: 750px;
			position: absolute;
			top:0;
			background-blend-mode: multiply;
			background-size: 100%;
			background-position: center;
			background-repeat: no-repeat;
		}
		
		#shirtDiv2{
			width: 550px;
			height: 750px;
			position: absolute;
			top:0;
			background: url("{{URL::to('/')}}/images/module_images/wholeBody.png");
			background-size: 100%;
			background-position: center;
			background-repeat: no-repeat;
		}
		.top_nav_list_item{
			list-style-type: none;
			width:70px;
			float: left;	
			margin-top: 15px;
		}
		.top_nav_list_item a{
			font-size:24px;
			color:#dbcc8f;
		}
	}	
	/*|-------------------------------------------------------------------------------------------------------| 
	|                                         MEDIA QUERY GLOBAL                                              | 
	|                                                                                                         |
	|---------------------------------------------------------------------------------------------------------| */

	/* The sidenav */
	.sidenav {
	height: 100%;
	width: 350px;
	position: fixed;
	z-index: 1;
	top: 0;
	left: 0;
	background-color: #efefef;
	overflow-x: hidden;
	transition: 0.5;
	}
	.color-preview {
		border: 1px solid #CCC;
		margin: 2px;
		zoom: 1;
		vertical-align: top;
		display: inline-block;
		cursor: pointer;
		overflow: hidden;
		width: 30px;
		height: 30px;
	}.color-preview:hover {
		border: 1px solid #CCC;
		margin: 2px;
		zoom: 1;
		vertical-align: top;
		display: inline-block;
		cursor: pointer;
		overflow: hidden;
		/* animation-name: wobble-horizontal;
  		animation-duration: 1s;
		animation-timing-function: ease-in; */
	}
	.rotate {  
		-webkit-transform:rotate(90deg);
		-moz-transform:rotate(90deg);
		-o-transform:rotate(90deg);
		-ms-transform:rotate(90deg);		   
	}	
	.btn{
		padding:4px 10px 4px;
		font-weight:normal;
		-webkit-border-radius:4px;
		-moz-border-radius:4px;
		border-radius:4px
	}
	.zoom {
		padding: 50px;
		background-color: green;
		transition: transform .2s; /* Animation */
		width: 200px;
		height: 200px;
		margin: 0 auto;
	} 
	.zoom:hover {
		transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
	}
	#main {
	margin-left: 300px; /* Same as the width of the sidenav */
	position: relative;
	}
	#select_place{
		position: relative;
		width: 90%;
		margin-left: 10px;
	}
	#color_pallet{
		position: relative;
		width: 90%;
		margin-left: 10px;
	}
	#design_pallet{
		position: relative;
		background-color: #f7f7f9;
		margin: 10px;
		overflow:auto;
		height:65%;
	}
	#footer_btn{
		position: relative;
		width: 100%;
		padding: 10px;
	}
	#btn_preview_save{
		position: relative;
		width: 49%;
		margin-top: 5px;
		padding: 5px;
		border-radius: 5px;
		border-color: black;
	}

	/* #btn_preview_order{
		position: relative;
		width: 100%;
		color: white;
		border-radius: 6px;
		background:#1085b5;
		padding:5px; 
	}
	#btn_preview_order:hover{
		background:#55bed8;
	} */
	#close{
	margin-bottom: 2px;		
	}
	label{
		margin-left: 12px;
	}
	#open_btn{
		/* border:2px solid #15aeda; */
		display: block;
		float: left;
		color: #dbcc8f;
		margin-left: 10px;
		font-size: 24px;
	}
	#logo{
		width:40px;
		height: auto;
		display: inline-block;
	}
	#top_nav_bar{
		display: flex;
		justify-content: space-between;
		align-items: center;
		position: relative;
		top: 0px;
		width: 100%;
		height:50px;
		/* border: 2px solid red; */
		background-color: black
	}
	#top_nav_bar h4{
		display: inline;
		font-weight: 800;
		font-size: 20px;
		color:#dbcc8f;
	}
</style>
</head>


<body>

	<div id="mySidenav" class="sidenav">
		<div id="footer_btn" >
			<button id="close" onclick="closeNav()" type="button" class="btn btn-danger btn-lg btn-block">Close</button>
			{{-- <input id="btn_preview_save" placeholder="Quantity" type="number"  data-toggle="modal" data-target="#share_prev"/> --}}
			<button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal" data-target="#exampleModalCenter" >Order</button>
			{{-- <input id="btn_preview_order" type="button" value="Order" /> --}}
		</div>
		
		<!-- THIS IS THE START OF COLOR PALLET -->
		<div class="well">
			<label for="color_pallet">Select Your Color:</label>
			<!-- <input class="color-preview jscolor" value="ffffff" style="width:80%;height:20%"> -->
			<ul id="color_pallet" class="nav">		
				<li class="color-preview" title="White" style="background-color:#ffffff;"></li>
				<li class="color-preview" title="Dark Heather" style="background-color:#616161;"></li>
				<li class="color-preview" title="Gray" style="background-color:#f0f0f0;"></li>
				<li class="color-preview" title="Charcoal" style="background-color:#5b5b5b;"></li>
				<li class="color-preview" title="Black" style="background-color:#222222;"></li>
				<li class="color-preview" title="Heather Orange" style="background-color:#fc8d74;"></li>
				<li class="color-preview" title="Heather Dark Chocolate" style="background-color:#432d26;"></li>
				<li class="color-preview" title="Salmon" style="background-color:#eead91;"></li>
				<li class="color-preview" title="Chesnut" style="background-color:#806355;"></li>
				<li class="color-preview" title="Dark Chocolate" style="background-color:#382d21;"></li>
				<li class="color-preview" title="Citrus Yellow" style="background-color:#faef93;"></li>
				<li class="color-preview" title="Avocado" style="background-color:#aeba5e;"></li>
				<li class="color-preview" title="Kiwi" style="background-color:#8aa140;"></li>
				<li class="color-preview" title="Irish Green" style="background-color:#1f6522;"></li>
				<li class="color-preview" title="Scrub Green" style="background-color:#13afa2;"></li>
				<li class="color-preview" title="Teal Ice" style="background-color:#b8d5d7;"></li>
				<li class="color-preview" title="Heather Sapphire" style="background-color:#15aeda;"></li>
				<li class="color-preview" title="Sky" style="background-color:#a5def8;"></li>
			</ul>
		</div>
		<!-- THIS IS THE END OF COLOR PALLET -->

		<!-- THIS IS THE START OF DESIGN PALLET -->
		<label id="add-text" for="design_pallet">Input Designs:</label>
		<div class="row" id="design_pallet" >
			
			<div class="col-6 ">
				<img class="img-fluid" id="img-polaroid0" src="{{URL::to('/')}}/images/module_images/icon/none.png" height="150px" width="150px" alt="none">
				<img class="img-fluid" id="img-polaroid2" src="{{URL::to('/')}}/images/module_images/icon/logo2.png" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid4" src="{{URL::to('/')}}/images/module_images/icon/logo4.png" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid6" src="{{URL::to('/')}}/images/module_images/icon/logo6.png" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid8" src="{{URL::to('/')}}/images/module_images/icon/logo8.png" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid10" src="{{URL::to('/')}}/images/module_images/icon/logo10.png" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid12" src="{{URL::to('/')}}/images/module_images/icon/logo12.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid14" src="{{URL::to('/')}}/images/module_images/icon/logo14.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid16" src="{{URL::to('/')}}/images/module_images/icon/logo16.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid18" src="{{URL::to('/')}}/images/module_images/icon/logo18.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid20" src="{{URL::to('/')}}/images/module_images/icon/logo20.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid22" src="{{URL::to('/')}}/images/module_images/icon/logo22.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid24" src="{{URL::to('/')}}/images/module_images/icon/logo24.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid26" src="{{URL::to('/')}}/images/module_images/icon/logo26.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid28" src="{{URL::to('/')}}/images/module_images/icon/logo28.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid30" src="{{URL::to('/')}}/images/module_images/icon/logo30.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid32" src="{{URL::to('/')}}/images/module_images/icon/logo32.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid34" src="{{URL::to('/')}}/images/module_images/icon/logo34.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid36" src="{{URL::to('/')}}/images/module_images/icon/logo36.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid38" src="{{URL::to('/')}}/images/module_images/icon/logo38.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid40" src="{{URL::to('/')}}/images/module_images/icon/logo40.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid42" src="{{URL::to('/')}}/images/module_images/icon/logo42.jpg" height="150px" width="150px" alt="">
			</div>
			
			<div class="col-6">
				<img class="img-fluid" id="img-polaroid1" src="{{URL::to('/')}}/images/module_images/icon/logo1.png" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid3" src="{{URL::to('/')}}/images/module_images/icon/logo3.png" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid5" src="{{URL::to('/')}}/images/module_images/icon/logo5.png" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid7" src="{{URL::to('/')}}/images/module_images/icon/logo7.png" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid9" src="{{URL::to('/')}}/images/module_images/icon/logo9.png" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid11" src="{{URL::to('/')}}/images/module_images/icon/logo11.png" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid13" src="{{URL::to('/')}}/images/module_images/icon/logo13.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid15" src="{{URL::to('/')}}/images/module_images/icon/logo15.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid17" src="{{URL::to('/')}}/images/module_images/icon/logo17.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid19" src="{{URL::to('/')}}/images/module_images/icon/logo19.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid21" src="{{URL::to('/')}}/images/module_images/icon/logo21.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid23" src="{{URL::to('/')}}/images/module_images/icon/logo23.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid25" src="{{URL::to('/')}}/images/module_images/icon/logo25.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid27" src="{{URL::to('/')}}/images/module_images/icon/logo27.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid29" src="{{URL::to('/')}}/images/module_images/icon/logo29.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid31" src="{{URL::to('/')}}/images/module_images/icon/logo31.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid33" src="{{URL::to('/')}}/images/module_images/icon/logo33.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid35" src="{{URL::to('/')}}/images/module_images/icon/logo35.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid37" src="{{URL::to('/')}}/images/module_images/icon/logo37.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid39" src="{{URL::to('/')}}/images/module_images/icon/logo39.jpg" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid41" src="{{URL::to('/')}}/images/module_images/icon/logo41.jpg" height="150px" width="150px" alt="">
			</div>

		</div>
		<!-- THIS IS THE END OF DESIGN PALLET -->	
	</div>

	<section id="main">
		<header id="top_nav_bar">
			
			<span id="open_btn" onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></span>
			
			<a class="navbar-brand" href="{{ URL::to('/')}}">
				<img	src="{{asset('images/sindhu_logo.png')}}"
						width="40px"
						height="auto"
						alt="Sindhu Logo">
							<h4>Sindhu Store</h4>
			</a>
			
			<ul>	
				<li class="top_nav_list_item"><a href="{{ URL::to('/')}}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
				<li class="top_nav_list_item" ><a href="{{ URL::to('/shop') }}"><i class="fas fa-shopping-cart" aria-hidden="true"></i></a></li>
				<li class="top_nav_list_item"><a href="{{ URL::to('/contact') }}"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
			<ul>

		</header>
		
		
		<!-- REDUNDENT PART START -->
						<div style="display: none;">
						<button class="btn" id="bring-to-front" title="Bring to Front"><i class="fas fa-undo" style="height:19px;"></i></button>
						<button class="btn" id="send-to-back" title="Send to Back"><i class="fas fa-redo" style="height:19px;"></i></button>
						<button id="flip" type="button" class="btn" title="Show Back View"><i class="fas fa-retweet" style="height:19px;"></i></button>
						<button id="remove-selected" class="btn" title="Delete selected item"><i class="fas fa-trash" style="height:19px;"></i></button>
						</div>
		<!-- REDUNDENT PART ENDS -->
		
		<span class="success" style="color:green; margin-top:10px; margin-bottom: 10px;margin-left:80%"></span>
		<div class="row justify-content-center">
			<div id="sareeImage" class="col-lg-6 col-sm-12" style="margin:50px">
					
					
					<img id="shirtDiv"> 
					<div id="par"><div>
					<img id="shirtDiv2">
					
			</div>
		</div>
		
	<div id="bottom_nav" >
		<i class="fa fa-home" aria-hidden="true"></i>
		<i class="fa fa-phone" aria-hidden="true"></i>
		<i class="fa fa-question-circle" aria-hidden="true"></i>
	</div>
	
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalCenterTitle">Order Confirmation</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			
				<div id="error" class="alert alert-primary" role="alert">
					
				  </div>
			
			<div class="row" >
				<div class="col-lg-4 col-sm-12" style="height: 400px;width: auto;">
					<img  src="{{URL::to('/')}}/images/module_images/wholeBody.png" style="top:0;position: absolute;height:350px ;width:auto;background-size: 100%;" >
					<div  id="pictureOrderConfirmation2" style="height:350px ;width:auto;background-size: 100%;"></div>
					<img id="pictureOrderConfirmation"  style="top:0;position: absolute;height:350px ;width:auto;background-size: 100%;">
				</div>
				<div class="col-lg-8 col-sm-12">
					<form  id="ajaxform">
						<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Name (required)" required>
						</div>
						<div class="form-group">
						<input type="phone" name="mobile" class="form-control" placeholder="Phone (required)" required>
						</div>
						<div class="form-group">
							<input type="number" name="quantity" class="form-control" placeholder="Quantity" required>
						</div>
						<div class="form-group">
						<textarea name="message" cols="30" rows="4" class="form-control" placeholder="Any Message"></textarea>
						</div>
						<p class="text-danger" style="font-size:12px ">*All Pictures shown are for illustration purpose only.Actual product may vary due to product enhancement.</p>
				</div>
			</div>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <input id="orderConfirmation_btn"type="submit"  value="Order" class="btn btn-primary">
		</div>
		</form>
	  </div>
	</div>
  </div>
  

{{-- MODAL END --}}

</section>
	
	
	<script>
	
		//Custom sidebar on/off STARTS
			/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
			function openNav() {
			document.getElementById("mySidenav").style.width = "350px";
			document.getElementById("main").style.marginLeft = "350px";
			};

			/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
			function closeNav() {
				console.log("cliCked");
			document.getElementById("mySidenav").style.width = "0";
			document.getElementById("main").style.marginLeft = "0";
			};
		//Custom sidebar on/off ENDS
		var color;
		var design;
	$(document).ready(function(){

		$( "#error" ).css("display","none" );
		$( "p" ).append(design);
						
			$( ".color-preview" ).click(function() {
				color = $( this ).css( "background-color");
				$( "#pictureOrderConfirmation2" ).css( "background-color", color);
			});
			
			

			$("#img-polaroid0").click(function() {
					$("#par").css("background-image", "none");
					$("#pictureOrderConfirmation").attr("src", "");
				});
			$("#img-polaroid1").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-1.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-1.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid2").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-2.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-2.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid3").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-3.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-3.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid4").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-4.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-4.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid5").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-5.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-5.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid6").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-6.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-6.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid7").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-7.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-7.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid8").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-8.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-8.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid9").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-9.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-9.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid10").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-10.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-10.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid11").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-11.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-11.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});

			
				$("#img-polaroid12").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-12.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-12.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid13").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-13.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-13.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid14").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-14.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-14.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid15").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-15.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-15.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid16").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-16.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-16.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid17").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-17.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-17.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid18").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-18.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-18.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid19").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-19.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-19.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid20").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-20.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-20.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid21").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-21.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-21.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid22").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-22.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-22.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			
			$("#img-polaroid23").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-23.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-23.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid24").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-24.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-24.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid25").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-25.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-25.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid26").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-26.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-26.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid27").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-27.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-27.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid28").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-28.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-28.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid29").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-29.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-29.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid30").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-30.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-30.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid31").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-31.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-31.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid32").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-32.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-32.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid33").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-33.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-33.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			
			$("#img-polaroid34").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-34.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-34.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid35").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-35.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-35.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid36").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-36.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-36.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid37").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-37.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-37.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid38").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-38.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-38.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid39").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-39.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-39.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid40").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-40.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-40.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid41").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-41.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-41.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
			$("#img-polaroid42").click(function() {
					$("#par").css("background-image", "url('{{ asset('images/module_images/par/par-42.png')}}')");
					$("#pictureOrderConfirmation").attr("src", "{{ asset('images/module_images/par/par-42.png')}}");
					design=$('#pictureOrderConfirmation').prop('src');
				});
	});


	$("#orderConfirmation_btn").click(function(event){
		
	  event.preventDefault();
	  if($("input[name=name]").val()==null || $("input[name=name]").val()=="" || $("input[name=name]").val()==" "){
		$( "#error" ).css("display","block" );
		$( "#error" ).empty().append(" Enter Your Name");
	  }
	  else if($("input[name=mobile]").val()==null || $("input[name=mobile]").val()=="" || $("input[name=mobile]").val()==" "){
		$( "#error" ).css("display","block" );
		$( "#error" ).empty().append(" Enter Your Mobile Number");
	  }
	  else if($("input[name=quantity]").val()==null || $("input[name=quantity]").val()=="" || $("input[name=quantity]").val()==" "){
		$( "#error" ).css("display","block" );
		$( "#error" ).empty().append(" Enter Your Quantity");
	  }
	  else{
	  			let mobile = $("input[name=mobile]").val();
				let quantity = $("input[name=quantity]").val();
				let name = $("input[name=name]").val();
				let message = $("textarea[name=message]").val();
				let _token   = $('meta[name="csrf-token"]').attr('content');
				$.ajax({
					url: "ajax-request",
					type:"POST",
					data:{
						name:name,
						mobile:mobile,
						quantity:quantity,
						message:message,
						ajax_color:color,
						ajax_design:design,
						_token: _token
					},
					success:function(response){
						console.log(response);
						if(response) {
							$('#error').text(response.success).show();
							setTimeout(function(){
								$('#error').text(response.success).hide();
							}, 2000);
							$("#ajaxform")[0].reset();
						}
					},
				});
			  
			}
			
	 
	});

	
	</script>

</body>	
</html>
