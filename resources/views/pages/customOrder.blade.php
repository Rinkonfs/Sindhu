@include('inc.head')

<body>
<div class="slide">
	<section>
		
	</section>

</div>
 
	<div class="container">
		<img id="bg" src="{{asset('images/module_images/cbg_1.png')}}" alt="picture" width="200px" height="300px"/>
		
		<canvas id="myCanvas" width="450" height="600" style="border:1px solid #d3d3d3;">
			Your browser does not support the HTML5 canvas tag.
		</canvas>
	</div>
 
		 
	  

@include('inc.scripts')
<script>
	window.onload = function() {
		var c = document.getElementById("myCanvas");
		var ctx = c.getContext("2d");
		var img = document.getElementById("bg");
		ctx.drawImage(img, 0, 0);
	}; 
</script>
</body>
</html>