@include('inc/head')
<body>
@include('inc/nav')
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{ URL::to('home') }}">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">Shopping Cart</h1>
          </div>
        </div>
      </div>
	</div>

		

		
    	<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">

					@if(session('cart'))
						<?php $total = 0 ?>

						<div class="cart-list">
							<table class="table">
								<thead class="thead-primary">
								  <tr class="text-center">
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>Product</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Total</th>
								  </tr>
								</thead>
								<tbody>
									@foreach(session('cart') as $id => $details)
										<?php $total += $details['price'] * $details['quantity'] ?>
	
									<tr class="text-center">
										
										{{-- <td class="product-remove"><a href="#"><span class="ion-ios-close  remove-from-cart" data-id="{{ $id }}"></span></a></td> --}}
										{{-- <td class="product-remove"><button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="ion-ios-close"></i></button></td> --}}
										<td class="product-remove"><a href="#" class="remove-from-cart" data-id="{{ $id }}"><i style="color:white" class="icon-close"></i></a></td>	
										<td class="image-prod">
											<div>
												<img class="responsive" width="100px" height="auto" src="{{url('/images/'.$details['photo'])}}" alt="{{ $details['name'] }}" >
											</div>
										</td>
										
										<td class="product-name">
											<h3>{{ $details['name'] }}</h3>
											<p>{{ $details['description'] }}</p>
										</td>
										
										<td class="price">&#2547;{{ $details['price'] }}</td>
										
										<td class="quantity">
											<div class="input-group mb-3">
												<input type="text" name="quantity" class="quantity form-control input-number" value="{{ $details['quantity'] }}" min="1" max="100">
											</div>
										</td>
										
										<td class="total">&#2547;{{ $details['price'] * $details['quantity'] }}</td>
									  </tr><!-- END TR-->

									  
									  
									  @endforeach
	
								  
								</tbody>
							</table>
						</div>

						<div class="row justify-content-END">
							<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
								<div class="cart-total mb-3">
									<h3>Cart Totals</h3>
									<p class="d-flex">
										<span>Subtotal</span>
									<span>&#2547;{{ $total }}</span>
									</p>
									<p class="d-flex">
										<span>Delivery</span>
										<span>&#2547;0.00</span>
									</p>
									<p class="d-flex">
										<span>Discount</span>
										<span>&#2547;0.00</span>
									</p>
									<hr>
									<p class="d-flex total-price">
										<span>Total</span>
										<span>&#2547;{{ $total }}</span>
									</p>
								</div>
								<p class="text-center"><a href="{{ route('users.products.checkout') }}" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
							</div>
						</div>
							
					@else
							
						<div class="text-center ">Empty Cart</div>
						
					@endif

    				
    			</div>
    		</div>
    		
			</div>
		</section>

		

  @include('inc/footer')
  

  <!-- loader -->
	<div id="ftco-loader" class="show fullscreen">
		<svg	class="circular"
				width="48px"
				height="48px">
					<circle	class="path-bg"
							cx="24"
							cy="24"
							r="22"
							fill="none"
							stroke-width="4"
							stroke="#eeeeee"/>
					<circle class="path"
							cx="24"
							cy="24"
							r="22"
							fill="none"
							stroke-width="4"
							stroke-miterlimit="10"
							stroke="#F96D00"/>
		</svg>
	</div>


  @include('inc/scripts')

  <script>

	  
		$(document).ready(function(){

			// $(".update-cart").click(function (e) {
				//    e.preventDefault();
		 
				//    var ele = $(this);
		 
				// 	$.ajax({
				// 	   url: '{{ url('/products/update-cart') }}',
				// 	   method: "patch",
				// 	   data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
				// 	   success: function (response) {
				// 		   window.location.reload();
				// 	   }
				// 	});
				// });
		 
				$(".remove-from-cart").click(function (e) {
					e.preventDefault();
		 
					var ele = $(this);
		 
					
						$.ajax({
							url: '{{ url('/products/remove-from-cart') }}',
							method: "DELETE",
							data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
							success: function (response) {
								window.location.reload();
							}
						});
					
				});

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>