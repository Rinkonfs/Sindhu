<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<script type="text/javascript" src="{{asset('js/module_js/html2canvas.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>	
<style>
    #shirtDiv{
		width: 550px;
		height: 750px;
		position: absolute;
		top:0;
		
	}
</style>
</head>

<body>

    
    <div id="capture">
        {{-- <img id="shirtDiv" class="img-status" style="
        width: 550px;
			height: 750px;
			position: absolute;
			top:0;
            background: url({{URL::to('/')}}/images/module_images/sareeBody.png);
            background-color: rgb(0, 6, 255);
			background-blend-mode: multiply;
			background-size: 100%;
			background-position: center;
			background-repeat: no-repeat;
        ">
        <img id="shirtDiv" src="{{URL::to('/')}}/images/module_images/wholeBody.png" >
        <img id="shirtDiv" src="{{ asset('images/module_images/par/par-2.png')}}"> --}}

        <div  id="pictureOrderConfirmation2" style="top:0;height:350px ;width:auto; background-color: rgb(0, 26, 215);background-size: 100%;background-position: center;
        background-repeat: no-repeat;"><div>
    </div>
   
    
    <script type="text/javascript">
    // var source ="{{asset('images/module_images/sareeBody.png')}}"
    //    $('.img-status').attr('src',source) ;
    // </script>

    

</body>
</html> 