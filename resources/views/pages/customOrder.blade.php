<html lang="en">
<head>
    <meta charset="utf-8">
    <title>sindhu store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="Description" content="Custom Sharee designing module from Sindhu Store">
	<link rel="icon" href="{{asset('images/sindhu_logo.png')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>	
	<script type="text/javascript" src="{{asset('js/module_js/tshirtEditor.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/module_js/jquery.miniColors.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/module_js/fabric.js')}}"></script> 
	
    
<!-- OWN STYLE START-->
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap.css"> -->
	<script type="text/javascript" src="{{asset('js/module_js/bootstrap.min.js')}}"></script> 

	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>	
	<!-- Canvas to image function -->
	 <script src="https://hongru.github.io/proj/canvas2image/canvas2image.js"></script>

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
	|                                         MEDIA QUERY MOBILE                                            | 
	|                                                                                                       |
	|-------------------------------------------------------------------------------------------------------| */

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
		.shirtDiv{
		width: 200%;
		height: 159vh;
		position: relative;
		background-color: rgb(255, 255, 255);
		background: url("{{URL::to('/')}}/images/module_images/bg-cloth.png");
		/*background-repeat: repeat-x, no-repeat;*/
		background-blend-mode: multiply;
		border:2px solid red;
	} 
	#shirtDiv{
		width: 350px;
		height: 550px;
		position: absolute;
		background-color: rgb(255, 255, 255);
		background: url("{{URL::to('/')}}/images/module_images/bg-cloth.png");
		background-blend-mode: multiply;
		background-size: 100%;
		background-position: center;
		background-repeat: no-repeat;
	}
	#shirtDiv1{
		width: 350px;
		height: 550px;
		position: absolute;
		background: url("{{URL::to('/')}}/images/module_images/bg-cloth_fullbody.png");
		background-blend-mode: multiply;
		background-size:100%;
		background-position: center;
		background-repeat: no-repeat;
	}
	#shirtDiv1_white{
		width: 350px;
		height: 550px;
		position: absolute;
		background: url("{{URL::to('/')}}/images/module_images/white.png");
		background-blend-mode: multiply;
		background-size:100%;
		background-position: center;
		background-repeat: no-repeat;
	}
	#par{
		width: 350px;
		height: 550px;
		position: absolute;
		background-blend-mode: multiply;
		background-size: 100%;
		background-position: center;
		background-repeat: no-repeat;
	}
	#achol{
		width: 350px;
		height: 550px;
		position: absolute;
		background-blend-mode: multiply;
		background-size: 100%;
		background-position: center;
		background-repeat:no-repeat;
	}
	#parSide{
		width: 350px;
		height: 550px;
		position: absolute;
		background-blend-mode: multiply;
		background-size: 100%;
		background-position: center;
		background-repeat: no-repeat;
	}
	#shirtDiv2{
		width: 350px;
		height: 550px;
		position: absolute;
		background: url("{{URL::to('/')}}/images/module_images/bg-body.png");
		background-size: 100%;
		background-position: center;
		background-repeat: no-repeat;
	}
	.top_nav_list_item{
		display: none;
	}
	}
	/*|-------------------------------------------------------------------------------------------------------| 
	|                                         MEDIA QUERY TABLET                                            | 
	|                                                                                                       |
	|-------------------------------------------------------------------------------------------------------| */
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
	.shirtDiv{
		width: 200%;
		height: 159vh;
		position: relative;
		background-color: rgb(255, 255, 255);
		background: url("{{URL::to('/')}}/images/module_images/bg-cloth.png");
		/*background-repeat: repeat-x, no-repeat;*/
		background-blend-mode: multiply;
		border:2px solid red;
	} 
	#shirtDiv{
		width: 350px;
		height: 650px;
		position: absolute;
		background-color: rgb(255, 255, 255);
		background: url("{{URL::to('/')}}/images/module_images/bg-cloth.png");
		background-blend-mode: multiply;
		background-size: 100%;
		background-position: center;
		background-repeat: no-repeat;
	}
	#shirtDiv1{
		width: 350px;
		height: 650px;
		position: absolute;
		background: url("{{URL::to('/')}}/images/module_images/bg-cloth_fullbody.png");
		background-blend-mode: multiply;
		background-size:100%;
		background-position: center;
		background-repeat: no-repeat;
	}
	#shirtDiv1_white{
		width: 350px;
		height: 650px;
		position: absolute;
		background: url("{{URL::to('/')}}/images/module_images/white.png");
		background-blend-mode: multiply;
		background-size:100%;
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
	#achol{
		width: 350px;
		height: 650px;
		position: absolute;
		background-blend-mode: multiply;
		background-size: 100%;
		background-position: center;
		background-repeat:no-repeat;
	}
	#parSide{
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
		background: url("{{URL::to('/')}}/images/module_images/bg-body.png");
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
		.shirtDiv{
		width: 200%;
		height: 159vh;
		position: relative;
		background-color: rgb(255, 255, 255);
		background: url("{{URL::to('/')}}/images/module_images/bg-cloth.png");
		background-blend-mode: multiply;
		border:2px solid red;
			} 
	#shirtDiv{
		width: 450px;
		height: 650px;
		position: absolute;
		background-color: rgb(255, 255, 255);
		background: url("{{URL::to('/')}}/images/module_images/bg-cloth.png");
		background-blend-mode: multiply;
		background-size: 100%;
		background-position: center;
		background-repeat: no-repeat;
	}
	#shirtDiv1{
		width: 450px;
		height: 650px;
		position: absolute;
		background: url("{{URL::to('/')}}/images/module_images/bg-cloth_fullbody.png");
		background-blend-mode: multiply;
		background-size:100%;
		background-position: center;
		background-repeat: no-repeat;
	}
	#shirtDiv1_white{
		width: 450px;
		height: 650px;
		position: absolute;
		background: url("{{URL::to('/')}}/images/module_images/white.png");
		background-blend-mode: multiply;
		background-size:100%;
		background-position: center;
		background-repeat: no-repeat;
	}
	#par{
		width: 450px;
		height: 650px;
		position: absolute;
		background-blend-mode: multiply;
		background-size: 100%;
		background-position: center;
		background-repeat: no-repeat;
	}
	#achol{
		width: 450px;
		height: 650px;
		position: absolute;
		background-blend-mode: multiply;
		background-size: 100%;
		background-position: center;
		background-repeat:no-repeat;
	}
	#parSide{
		width: 450px;
		height: 650px;
		position: absolute;
		background-blend-mode: multiply;
		background-size: 100%;
		background-position: center;
		background-repeat: no-repeat;
	}
	#shirtDiv2{
		width: 450px;
		height: 650px;
		position: absolute;
		background: url("{{URL::to('/')}}/images/module_images/bg-body.png");
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
	|                                         MEDIA QUERY GLOBAL                                            | 
	|                                                                                                       |
	|-------------------------------------------------------------------------------------------------------| */

	/* The sidenav */
	.sidenav {
	height: 100%;
	width: 300px;
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
		width: 20px;
		height: 20px;
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
		height:50%;
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

	#btn_preview_order{
		position: relative;
		width: 49%;
		color: white;
		border-radius: 6px;
		background:#1085b5;
		/* #28a745 */
		padding:5px; 
	}
	#btn_preview_order:hover{
		
		background:#55bed8;
		
	}
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
			<input id="btn_preview_save" placeholder="Quantity" type="number" class=""  data-toggle="modal" data-target="#share_prev"/>
			<input id="btn_preview_order" type="submit" value="Order" class=""  onclick="testScrnShot()" />
		</div>
			
		<!-- THIS IS THE START OF SELECT BUTTON -->
		<div>
			<label for="select_place">Select Place:</label>
			<p>
				<select id="select_place" class="custom-select-lg">
					<option value="0" selected >None</option>
					<option value="1" >Design Par</option>
				</select>
				<span class="warning" id="warning_text"></span>				
			</p>								
		</div>
		<!-- THIS IS THE END OF SELECT BUTTON -->

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
				<img class="img-fluid" id="img-polaroid0" src="{{URL::to('/')}}/images/module_images/none.png" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid2" src="{{URL::to('/')}}/images/module_images/logo2.png" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid4" src="{{URL::to('/')}}/images/module_images/logo4.png" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid6" src="{{URL::to('/')}}/images/module_images/logo6.png" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid8" src="{{URL::to('/')}}/images/module_images/logo8.png" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid10" src="{{URL::to('/')}}/images/module_images/logo10.png" height="150px" width="150px" alt="">
			</div>
			<div class="col-6">
				<img class="img-fluid" id="img-polaroid1" src="{{URL::to('/')}}/images/module_images/logo1.png" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid3" src="{{URL::to('/')}}/images/module_images/logo3.png" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid5" src="{{URL::to('/')}}/images/module_images/logo5.png" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid7" src="{{URL::to('/')}}/images/module_images/logo7.png" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid9" src="{{URL::to('/')}}/images/module_images/logo9.png" height="150px" width="150px" alt="">
				<img class="img-fluid" id="img-polaroid11" src="{{URL::to('/')}}/images/module_images/logo11.png" height="150px" width="150px" alt="">
				
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

		<div id="sharee">
			<div  id="shirtDiv"> </div>
			<div  id="shirtDiv1"> </div>
			<div  id="shirtDiv1_white"> </div>
			<div  id="par"> </div>
			<div  id="achol"> </div>
			<div  id="parSide"> </div>
			<div  id="shirtDiv2" > </div>
	</div>
	</section>
	<div id="bottom_nav" >
		<i class="fa fa-home" aria-hidden="true"></i>
		<i class="fa fa-phone" aria-hidden="true"></i>
		<i class="fa fa-question-circle" aria-hidden="true"></i>

	</div>

	{{-- THis is the custom image --}}
	{{-- <canvas id="canvasSharee" width="500" height="680" style="border:2px solid red;position: absolute;left:700;" >
		<div  id="canvasshirtDiv"> </div>
		<div  id="canvasshirtDiv1"> </div>
		<div  id="canvasshirtDiv1_white"> </div>
		<div  id="canvaspar"> </div>
		<div  id="canvasachol"> </div>
		<div  id="canvasparSide"> </div>
		<div  id="canvasshirtDiv2" > </div>
	</canvas>	
	<div id="previewImage"></div> --}}

	{{-- THis is the custom image END--}}




		

	<script>
		
		var dataURL;
		function testScrnShot() {
			html2canvas(document.getElementById("sharee"), {
				onrendered: function (canvas) {
					document.body.appendChild(canvas);            
					dataURL = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
					dataURL.png;
					console.log(dataURL);


				}
			});
		}
		
		console.log("THIS IS THE TEXT"+dataURL);
		function check(){
			if(dataURL!="" || dataURL!=undefined ){
				window.location.href=dataURL;
				console.log("INSIDE:"+dataURL);
			}
			else{
				alert("No picture is saved yet");	
				console.log("INSIDE ELSE:"+dataURL);
			}
		}
		// function to_image(){
				
        //         var canvas = document.getElementById("canvasSharee");
        //         document.getElementById("previewImage").src = canvas.toDataURL("image/png");
        //         Canvas2Image.saveAsPNG(canvas);
		// 		console.log("THIS IS THE CONSOL OF IMAGE" + Canvas2Image.saveAsPNG(canvas) );

        // }




		//Custom FUNTION STARTS
		/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
		function openNav() {
		document.getElementById("mySidenav").style.width = "300px";
		document.getElementById("main").style.marginLeft = "300px";
		}

		/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
		function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		document.getElementById("main").style.marginLeft = "0";
		}
		//Custom FUNTION ENDS

	$(document).ready(function(){
		
		
	$('#select_place').change(function(){ 
		var selectVar="0";
		var opt = $("#select_place").val();
		console.log("second console-log:"+opt);


	if(opt == "1"){
		
		$("#img-polaroid0").click(function() {
				/*$("#shirtDiv").css("background-blend-mode", "darken");*/
				$("#par").css("background-image", "none");
				console.log(opt +" :clicked 0" );
				selectVar="0";
				
			});
		$("#img-polaroid1").click(function() {
				/*$("#shirtDiv").css("background-blend-mode", "darken");*/
				$("#par").css("background-image", "url('{{ asset('images/module_images/par-1.png')}}')");
				console.log(opt +" :clicked 1" );
				selectVar="1";
			});
		$("#img-polaroid2").click(function() {
				/*$("#shirtDiv").css("background-blend-mode", "darken");*/
				$("#par").css("background-image", "url('{{ asset('images/module_images/par-2.png')}}')");
				console.log(opt +" :clicked 2");
				selectVar="2";
			});
		$("#img-polaroid3").click(function() {
				/*$("#shirtDiv").css("background-blend-mode", "darken");*/
				$("#par").css("background-image", "url('{{ asset('images/module_images/par-3.png')}}')");
				console.log(opt +" :clicked 3");
			});
		$("#img-polaroid4").click(function() {
				/*$("#shirtDiv").css("background-blend-mode", "darken");*/
				$("#par").css("background-image", "url('{{ asset('images/module_images/par-4.png')}}')");
				console.log(opt +" :clicked 4");
			});
		$("#img-polaroid5").click(function() {
				/*$("#shirtDiv").css("background-blend-mode", "darken");*/
				$("#par").css("background-image", "url('{{ asset('images/module_images/par-5.png')}}')");
				console.log(opt +" :clicked 5");
			});
		$("#img-polaroid6").click(function() {
				/*$("#shirtDiv").css("background-blend-mode", "darken");*/
				$("#par").css("background-image", "url('{{ asset('images/module_images/par-6.png')}}')");
			});
		$("#img-polaroid7").click(function() {
				/*$("#shirtDiv").css("background-blend-mode", "darken");*/
				$("#par").css("background-image", "url('{{ asset('images/module_images/par-7.png')}}')");
			});
		$("#img-polaroid8").click(function() {
				/*$("#shirtDiv").css("background-blend-mode", "darken");*/
				$("#par").css("background-image", "url('{{ asset('images/module_images/par-8.png')}}')");
			});
		$("#img-polaroid9").click(function() {
				/*$("#shirtDiv").css("background-blend-mode", "darken");*/
				$("#par").css("background-image", "url('{{ asset('images/module_images/par-9.png')}}')");
			});
		$("#img-polaroid10").click(function() {
				/*$("#shirtDiv").css("background-blend-mode", "darken");*/
				$("#par").css("background-image", "url('{{ asset('images/module_images/par-10.png')}}')");
			});
		$("#img-polaroid11").click(function() {
				/*$("#shirtDiv").css("background-blend-mode", "darken");*/
				$("#par").css("background-image", "url('{{ asset('images/module_images/par-11.png')}}')");
			});
	}
		else if(opt == "2"){

			
		}
		if(opt == "null"){
			$("#warning_text").text("WARNING");
		}
		

	});
		
	});
	
	
	</script>

</body>	
</html>
