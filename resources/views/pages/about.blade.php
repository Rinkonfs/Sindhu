@include('inc.head')

<body class="goto-here">

  @include('inc.nav')


    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{ URL::to('home') }}">Home</a></span><span style="color:black">> </span><span>About</span></p>
            <h1 class="mb-0 bread">About Us</h1>
          </div>
        </div>
      </div>
    </div>

    {{-- <section class="ftco-section ftco-no-pt ftco-no-pb"> 
			{{-- <div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-bag"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Free Shipping</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>      
          </div>
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Support Customer</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>    
          </div>
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-payment-security"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Secure Payments</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>      
          </div>
        </div>
      </div> 
     </section> --}}
      
      {{-- <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3" >
            <img id="about_photo" src="images/SindhuApu.jpeg"/>
          </div>
          <div id="about_text" class="col-sm-3"  >
            <h3>Sindhu Neegar</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
              exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
              voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
              sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-sm-3"  >
            <img id="about_photo" src="images/SindhuApu.jpeg" />
          </div>
          <div class="col-sm-3">
            <h3>Sindhu Neegar</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
              exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
              voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
              sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>  --}}
      <div class="container pt-5  ">
        
         
          <div class="row team-row">
        
            <div class="col-md-4 col-sm-6 team-wrap">
              
            </div>
           
        
            <div class="col-md-4 col-sm-6 team-wrap">
              <div class="team-member text-center">
                <div class="team-img">
                  <img src="images/SindhuApu.jpeg" alt="Picture of Sindhu Neegar" >
                  <div class="overlay">
                    <div class="team-details text-justify">
                      <p>
                        As Sindhu's strength comes from the smell of every mother’s Sharee which is not a piece of cloth;
                        which is an emotion and a 6 yards story.  So we values in Innovation,
                        Tradition and Beautification and believe in quality, designs and fabrics.
                      </p>
                    </div>
                  </div>
                </div>
                <h6 class="team-title">Sindhu Neegar</h6>
                <span>Owner - Sindhu Store</span>
              </div>
            </div>
            
        
            <div class="col-md-4 col-sm-6 team-wrap">
              
            </div>
            
        
          </div>
        </div>
        {{-- <div class="row" style="padding:50px;">
          <div class="col-sm-12" >
            <div class="card">
              <div class="row no-gutters" style="padding:50px;">
                <div class="col-auto">
                <img src="images/SindhuApu.jpeg" class="img " alt="" height="auto" width="380">
                </div>
                <div class="col">
                  <div class="card-block px-2">
                    <h4 class="card-title pl-2">Sindhu Neegar</h4>
                    <p class="card-text p-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                       ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                       exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat<span id="dots">...</span>
                       <span id="more"> Duis aute irure dolor in reprehenderit in 
                      voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                      sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span href="" onclick="readMore('dots','more','myBtn')" id="myBtn">Read more</span></p>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
          {{-- <div class="col-sm-6">
            <div class="card">
              <div class="row no-gutters">
                <div class="col-auto">
                  <img src="images/SindhuApu.jpeg" class="img-fluid" alt="" height="auto" width="280">
                </div>
                <div class="col">
                  <div class="card-block px-2">
                    <h4 class="card-title pl-2">Sindhu Neegar</h4>
                    <p class="card-text p-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                       ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                       exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat<span id="dots1">...</span>
                       <span id="more1"> Duis aute irure dolor in reprehenderit in 
                      voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                      sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span href="" onclick="readMore('dots1','more1','myBtn1')" id="myBtn1">Read more</span></p>
                  </div>
                </div>
              </div>
            </div>
            
          </div> --}}
          
        </div> --}}
      </div> 
      
		

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container" style="padding:30px;">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about_picture.webp);">
						<a href="images/Video About-1.m4v" class="icon popup-vimeo d-flex justify-content-center align-items-center">
							<span class="icon-play"></span>
						</a>
					</div>
					<div class="col-md-7 py-md-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section-bold mb-4 mt-md-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4">Sindhu Store</h2>
	            </div>
	          </div>
	          <div class="pb-md-5 pb-4">
							<p>As Sindhu's strength comes from the smell of every motherтАЩs Sharee which is not a piece of cloth; which is an emotion and a 6 yards story.
							So we values in Innovation, Tradition and Beautification and believe in quality, designs and fabrics.</p>
							<p><a href="https://www.sindhustore.com/shop" class="btn btn-primary">Shop now</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row">
        	<div class="col-lg-5">
        		<div class="services-flow">
        			<div class="services-2 p-4 d-flex ftco-animate">
        				<div class="icon">
        					<span class="flaticon-bag"></span>
        				</div>
        				<div class="text">
	        				<h3>Handloom Sharee</h3>
	        				<p class="mb-0">We collect best handloom sharees directly from weaver, ensuring the premium design & exclusive color</p>
        				</div>
        			</div>
        			<div class="services-2 p-4 d-flex ftco-animate">
        				<div class="icon">
        					<span class="flaticon-heart-box"></span>
        				</div>
        				<div class="text">
	        				<h3>Typography Sharee</h3>
	        				<p class="mb-0">Following the lastest trend we ensure popular lyrics in typography sharees,Kurtis & handmade jewllery</p>
	        			</div>
        			</div>
        			<div class="services-2 p-4 d-flex ftco-animate">
        				<div class="icon">
        					<span class="flaticon-payment-security"></span>
        				</div>
        				<div class="text">
	        				<h3>Handmade Jewellery</h3>
	        				<p class="mb-0">To ensure ethnic style on jewellery we work with handmade jewellery on wooden & metal base</p>
	        			</div>
        			</div>
        			<div class="services-2 p-4 d-flex ftco-animate">
        				<div class="icon">
        					<span class="flaticon-customer-service"></span>
        				</div>
        				<div class="text">
	        				<h3>Customized Order</h3>
	        				<p class="mb-0">For better customer satisfaction we offer customized order to serve our best</p>
	        			</div>
        			</div>
        		</div>
        	</div>
          <div class="col-lg-7">
          	<div class="heading-section ftco-animate mb-5">
	            <h2 class="mb-4">Our Satisfied Customer says</h2>
	            <p>Sindhu Believes in customers satisfaction.Take a look at what our beloved customer says about us.</p>
	          </div>
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">her choice and the quality of the product ❤❤❤</p>
                    <p class="name">Arnisa Anawar Jhilik</p>
                    <span class="position">Training and Development Officer-Brac</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">A Trustworthy Online Page For Women Clothing, Specially for Sharees. I honestly recommend Sindhu for Shopping. Fully Satisfied with their Service.</p>
                    <p class="name">Maeenul Alam Atique </p>
                    <span class="position">IFIC BANK Limited</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">sarees r same as picture🌼 Besides prize also reasonable</p>
                    <p class="name">জান্নাতুল ইসলাম মীম</p>
                    <span class="position"> Dhaka University Drama Troupe -DUDT</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_4.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">আমি চা খোর না একদম।কিন্তু সিন্ধু তে যখন এই শাড়িটা দেখলাম সাথেই সাথেই মনে হলো এই শাড়ি আমার চাই।ব্যাস নিজের করে নিলাম শাড়িটা কে। জোস একটা শাড়ি। ♥♥♥ সিন্ধু'র জন্য শুভকামনা রইলো অনেক। 💙</p>
                    <p class="name">অভ্র তনয়া বৃষ্টি</p>
                    <span class="position">Business Owner at khudroo</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_5.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">সিন্ধুর যত্নে করা শাড়িতে, শিল্পের ছোঁয়ায় হয়ে উঠবেন মূর্তিমতী কবিতা। প্রিয় বিষয় বা লিরিকসহ মানসম্মত শাড়ি খুঁজে পাবেন। শুভকামনা সিন্ধুর জন্য। 💖</p>
                    <p class="name">মারিয়াতুন মীমবৃষ্টি</p>
                    <span class="position">Student,University of Dhaka</span>
                  </div>
                </div>
              </div>
              
              {{-- <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div> --}}
              {{-- <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </section>
@include('inc/footer')
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
    </svg>
  </div>

@include('inc/scripts')

    
  </body>
</html>