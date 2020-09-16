@include('inc.head')

<body>
<!-- Navbar Starts -->
    @include('inc.nav')
<!-- Navbar Ends -->
<div class="hero-wrap hero-bread" style="background-image: url({{url('images/bg_6.jpg')}});">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2">Dashboard</span><span style="color:black">> </span><span>Account Details</span></p>
                <h1 class="mb-0 bread">Dashboard</h1>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid pt-2">
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('success') }}
        </div>
    @endif
        <div class="row" style="padding: 50px;">
            <div class="col-lg-2 col-sm-12" >
                <div>
                    <h4 >My Account</h4>
                    <hr>
                    <ul class="list-group">
                        <li>
                            <a href="{{ route('users.dashboard') }}" >
                                Account Details
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('users.orders.index') }}">
                                Order History
                            </a>
                        </li>
                        <li>
                            <a href="#" > Support </a>
                        </li>
                        <li >
                            <a href="#" > Track Order </a>
                        </li>
                    <ul>
                </div>        
            </div>
            <div class="col-lg-10 col-sm-12" style="border-left:1px solid #e5e5e5;padding-left:25px;padding-right:25px;">
                <h4>Account Details</h4>
                <hr>
                <div id="accountDetail">
                    <form action="{{ route('users.profile.update', Auth::id()) }}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                          <fieldset class="col-sm-6 form-group">
                            <div class="form-group">
                              <label class="form-control-label" for="ownername">Full name</label>
                              <input required name="name" @if(Auth::user()) value="{{ Auth::user()->name }}"@endif class="form-control  @error('name') is-invalid @enderror" id="ownername" placeholder="Your Name" type="text">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- form-group -->
                      
                            <div class="form-group">
                              <label class="form-control-label" for="owneremail">Email address</label>
                              <input required name="email" @if(Auth::user()) value="{{ Auth::user()->email }}"@endif aria-describedby="emailHelp" class="form-control  @error('email') is-invalid @enderror" id="owneremail" placeholder="Enter email" type="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- form-group -->
                          </fieldset>
                          <!-- fieldset -->
                      
                          <fieldset class="form-group col-sm-6">
                            
                            <div class="form-group">
                              <label class="form-control-label" for="phone">Phone</label>
                              <input required name="phone" @if(Auth::user()) value="{{ Auth::user()->phone }}"@endif class="form-control  @error('phone') is-invalid @enderror" id="phone" placeholder="Your phone number" type="text">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                              <div class="form-group">
                                  <label class="form-control-label" for="password">Password</label>
                                  <input name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter new password" type="password">
                                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                              </div>
                            <!-- form-group -->

                          </fieldset>
                       
                        <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>


    @include('inc/footer') <!-- Footer -->


<!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
        </svg>
    </div>
<!-- Java Scripts -->
    @include('inc/scripts')
    
  </body>
</html>