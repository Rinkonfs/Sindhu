<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('images/sindhu_logo.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name = "author" content = "Sindhu Neegar and Shihan Mahmud" />
    <meta name = "keywords" content = "e-Commerce Shop in Bangladesh,silk sharee in Bangladesh,ecommerce site for sharee,
                                        ecommerce site for saree" />
    <meta name="Description" content="A Modern Online e-Commerce Shop for Sharee Lovers">
    

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    
    
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
     {{-- <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('css/dropdownlogin.css')}}"> --}}

<style>
  @media only screen and (max-width: 600px) {
    .dev_name{
      font-size: 14px;
    }
    .client_name{
      font-size: 14px;
    }
    .footer_credit{
      width:100%;
      text-align: center;
    }
  }
  @media only screen and (min-width: 768px) {
    .dev_name{
      float:right;
    }
    .client_name{
      float:left;
    }
    .footer_credit{
      width:100%;
      padding:10px;
    }
  }
  
/* ----------REGISTER CSS----------- */
  /* .left {
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
  } */
/* ----------Custom Module CSS----------- */


</style>

</head>