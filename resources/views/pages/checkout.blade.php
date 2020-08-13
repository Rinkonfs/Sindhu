@include('inc.head')
<body>
  @include('inc.nav')

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread">Checkout</h1>
          </div>
        </div>
      </div>
	</div>
	
	@if(session('cart'))
	
	<section class="ftco-section">
		<div class="container">
		  <div class="row justify-content-center">
				<div class="col-xl-10 ftco-animate">
				  <form method="post" action="{{ route('users.orders.create') }}" class="billing-form"  enctype="multipart/form-data">
					  @csrf
					  <h3 class="mb-4 billing-heading">Billing Details</h3>
					  <div class="row align-items-end">
							<div class="col-md-6">
							  <div class="form-group">
								  <label for="firstname">First Name <span class="text-danger">*</span></label>
								  <input name="first_name" required type="text" class="form-control" placeholder="Enter your first name" @if(Auth::user())value="{{ Auth::user()->name }}"@endif>

							  </div>
						  </div>
							
						  <div class="col-md-6">
							  <div class="form-group">
								  <label for="lastname">Last Name <span class="text-danger">*</span></label>
								  <input name="last_name" required type="text" class="form-control" placeholder="Enter your last name" @if(Auth::user())value="{{ Auth::user()->name }}"@endif>
							  </div>
						  </div>

						  <div class="w-100"></div>
							  <div class="col-md-12">
								  <div class="form-group">
									  <label for="country">State / Country <span class="text-danger">*</span></label>
									  <div class="select-wrap">
											<div class="icon"><span class="ion-ios-arrow-down"></span></div>
										  <select required name="country" id="" class="form-control">
											  @if(Auth::user() and Auth::user()->address )<option value="{{ Auth::user()->address->country }}" selected >{{ Auth::user()->address->country }}</option>@endif
											  <option value="France">France</option>
											  <option value="Italy">Italy</option>
											  <option value="Philippines">Philippines</option>
											  <option value="South">South Korea</option>
											  <option value="Hongkong">Hongkong</option>
											  <option value="Japan">Japan</option>
										  </select>
									  </div>
								  </div>
							  </div>
							  
							  <div class="w-100"></div>
							  
							  <div class="col-md-6">
								  <div class="form-group">
									  <label for="streetaddress">Street Address <span class="text-danger">*</span></label>
										<input name="street" @if(Auth::user() and Auth::user()->address )value="{{ Auth::user()->address->street }}"@endif required type="text" class="form-control" placeholder="House number and street name">
								  </div>
							  </div>
							  
							  <div class="col-md-6">
								  <div class="form-group">
										<input name="apartment" @if(Auth::user() and Auth::user()->address )value="{{ Auth::user()->address->apartment }}"@endif type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
								  </div>
							  </div>
				  
							  <div class="w-100"></div>
							  
							  <div class="col-md-6">
								  <div class="form-group">
									  <label for="towncity">Town / City <span class="text-danger">*</span></label>
										<input name="city" @if(Auth::user() and Auth::user()->address )value="{{ Auth::user()->address->city }}"@endif required type="text" class="form-control" placeholder="Your city">
								  </div>
							  </div>
				  
							  <div class="col-md-6">
					  
								  <div class="form-group">
						  
									  <label for="postcodezip">Postcode / ZIP <span class="text-danger">*</span></label>
					
									  <input name="post_code" @if(Auth::user() and Auth::user()->address )value="{{ Auth::user()->address->post_code }}"@endif required type="text" class="form-control" placeholder="Area postal code">
				  
								  </div>
				  
							  </div>
				  
							  <div class="w-100"></div>
				  
							  <div class="col-md-6">
				  
								  <div class="form-group">
					  
									  <label for="phone">Phone <span class="text-danger">*</span></label>
					
									  <input name="phone" @if(Auth::user())value="{{ Auth::user()->phone }}"@endif required type="text" class="form-control" placeholder="Your phone number">
				  
								  </div>
				
							  </div>
				
							  <div class="col-md-6">
				  
								  <div class="form-group">
					  
									  <label for="emailaddress">Email Address <span class="text-danger">*</span></label>
					
									  <input name="email" @if(Auth::user())value="{{ Auth::user()->email }}"@endif required type="text" class="form-control" placeholder="Your email address">
				  
								  </div>
			  
							  </div>
			  
							  <div class="w-100"></div>

								@if(!Auth::user())
							  <div class="col-md-12">

								  <div class="form-group mt-4">
									  <div class="radio">
										  <label class="mr-3"><input checked type="radio" name="optradio"> Create an Account? </label>
										  <label class="mr-3 text-danger"> Already have an account? <a href="{{ route('login') }}">Login</a> </label>
									  </div>
								  </div>
			  
							  </div>
									@endif
			  
						  </div>
			



							<?php $total = 0 ?>

							@foreach(session('cart') as $id => $details)
								<?php $total += $details['price'] * $details['quantity'] ?>
							@endforeach

						<div class="row mt-5 pt-3 d-flex">
							<div class="col-md-6 d-flex">
								<div class="cart-detail cart-total bg-light p-3 p-md-4">
									<h3 class="billing-heading mb-4">Cart Total</h3>
									<p class="d-flex">
											  <span>Subtotal</span>
											  <span>Tk. 0.00</span>
										  </p>
										  <p class="d-flex">
											  <span>Delivery</span>
											  <span>Tk. 0.00</span>
										  </p>
										  <p class="d-flex">
											  <span>Discount</span>
											  <span>Tk. 0.00</span>
										  </p>
										  <hr>
										  <p class="d-flex total-price">
											  <span>Total</span>
											  <span>Tk. {{ $total }}</span>
										  </p>
										  </div>
							</div>
							<div class="col-md-6">
								<div class="cart-detail bg-light p-3 p-md-4">
									<h3 class="billing-heading mb-4">Payment Method</h3>

											  <div class="form-group">
												  <div class="col-md-12">
													  <div class="radio">
														 <label><input type="radio" name="optradio" class="mr-2"> bKash</label>
													  </div>
												  </div>
											  </div>
											<div class="form-group">
												<div class="col-md-12">
													<div class="radio">
														<label><input type="radio" name="optradio" class="mr-2"> Cash On Delivery</label>
													</div>
												</div>
											</div>
											  <div class="form-group">
												  <div class="col-md-12">
						   							  <div class="checkbox">
														 <label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
													  </div>
												  </div>
											  </div>
											<button class="btn btn-primary py-3 px-4" type="submit">Place an order</button>
									</div>
								</div>
							</div>
				  </form><!-- END -->
		</div> <!-- .col-md-8 -->
	  </div>
	</div>
  </section> <!-- .section -->
						
	@else
		<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
					<div class="col-md-12 ftco-animate">
							
						<div class="billing-heading text-center">Empty Cart</div>
						
					</div>
				</div>
			
			</div>
		</section>

	@endif

    
		
	@include('inc.footer')
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  @include('inc.scripts')
  <script>
		$(document).ready(function(){

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