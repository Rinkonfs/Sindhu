<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    
    {{-- <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/dropdownlogin.css')}}"> --}}

{{-- custom Module Style sheets --}}
    
<style>
/* ----------REGISTER CSS----------- */
  .left {
    width: 200px;
    padding: 10px;
  }

  .left ul{
    
    background-color: #F2F2F2;
    padding: 0px;
  }

  .left ul li {
    list-style: none;
    line-height: 30px;
  }

  .left ul li a {
    color: #000000;
    display: block;
    padding: 5px;
    text-align: center;
    text-decoration: none;
    width: 190px;
  }

  .left ul li a:hover {
    background-color: #E4E4E4;
  }
  
  body {
    background:#efefef;
    font-size:16px;
    color:#777;
    font-family:sans-serif;
    font-weight:300;
  }
  #login-box {
    position:relative;
    margin: 10% auto;
    height:400px;
    width:600px;
    background:#fff;
    box-shadow: 0 2px 4px rgba(0,0,0,0.6);
  }
  .left-box {
    position:absolute;
    top:0;
    left:0;
    box-sizing: border-box;
    padding:40px;
    width:300px;
    height:400px;
  }
  h1 {
    margin:0 0 20px 0;
    font-weight:300;
    font-size:28px;
  }
  input[type="text"], input[type="password"] {
    display:block;
    box-sizing:border-box;
    margin-bottom:20px;
    padding:4px;
    width:220px;
    height:32px;
    border:none;
    outline:none;
    border-bottom:1px solid #aaa;
    font-family:sans-serif;
    font-weight:400;
    font-size:15px;
    transition: 0.2s ease;
  }
  input[type="submit"] {
    margin-bottom:28px;
    width:220px;
    height:32px;
    background:#f44336;
    border:none;
    border-radius:2px;
    color:#fff;
    font-family:sans-serif;
    font-weight:500;
    text-transform:uppercase;
    transition:0.25s ease;
    cursor:pointer;
  }
  input[type="submit"]:hover,input[type="submit"]:focus {
    background:#ff5722;
    transition: 0.2s ease;
  }
  .right-box {
    position:absolute;
    top:0;
    right:0;
    box-sizing:border-box;
    padding:40px;
    width:300px;
    height:400px;
    background-image:url({{asset('images/color.jpg')}});
    background-size:cover;
    background-position:center;
  }
  .or {
    position:absolute;
    top:180px;
    left:280px;
    width:40px;
    height:40px;
    background:#efefef;
    border-radius:50%;
    box-shadow: 0 2px 4px rgba( 0,0,0,0.6);
    line-height:40px;
    text-align:center;
  }
  .right-box .signinwith {
    display:block;
    margin-bottom:40px;
    font-size:28px;
    color:#fff;
    text-align:center;
    text-shadow:0 2px 4px rgba( 0,0,0,0.6);
  }
/* ----------Custom Module CSS----------- */
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
			.shirtDiv{
			width: 200%;
			height: 159vh;
			position: relative;
			background-color: rgb(255, 255, 255);
			background: url(img/bg-cloth.png);
			
			background-blend-mode: multiply;
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



		/* html, body {
		    margin: 0;
		    height: 100%;
		} */
/* The mysidenav */
.mysidenav {
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

/* Page content */
#main {
  margin-left: 300px; /* Same as the width of the mysidenav */
}
#select_place{
	width: 90%;
	margin-left: 10px;
}
#color_pallet{
width: 90%;
	margin-left: 10px;
}
#design_pallet{
	background-color: #f7f7f9;
	margin: 10px;
	overflow:auto;
	height:50%;
}
#footer_btn{

top:0;
width: 100%;
padding: 10px;
}
#btn_preview_save{
width:49%;
}
#close{
margin-bottom: 2px;		
}
label{
	margin-left: 12px;
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

/* CUSTOM MODULE REMADE */
body,
html {
  margin: 0;
  padding: 0;
  height: 100%;
  width: 100%;
}

*,
*:before,
*:after {
  box-sizing: border-box;
}

#container {
  height: 100%;
  width: 100%;

}

#product-svg {
  position: relative;
  z-index: 2;
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: 50%;
  mix-blend-mode: multiply;
}

#product-shape {
  fill: #DBED64;
}


.jscolor {
  position: fixed;
  bottom: 4em;
  right: 4em;
  z-index: 3;
  padding: 1em;
  box-shadow: 0px 5px 10px rgba(0, 255, 255,1);
  border: 0;
  border-radius: 5px;
  cursor: pointer;
}

#dic{
  background-color:rgba( 10,255,4,1);
  mix-blend-mode: hue;
  width: 500px;
  height: 500px;
  position: absolute;
  top: 0;
}



</style>

</head>