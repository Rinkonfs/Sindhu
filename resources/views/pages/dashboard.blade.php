@include('inc.head')

<body>
<!-- Navbar Starts -->
    @include('inc.nav')
<!-- Navbar Ends -->



<section class="py-md-5" style="height:600px;">
    <div class="container">


        <h1>DASHBOARD</h1>

        @if (session('success'))

            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ session('success') }}
            </div>
        @endif


        <div class="row">
            <div class="col-xs-8">
                <div class="list-group" style="border:2px solid red;">
                    <span class="list-group-item" style="background-color: black;color:#7b7d80;font-weight:700;font-size:18px">
                        Menu
                    </span>
                    <a href="{{ route('users.dashboard') }}" class="list-group-item">
                        Account Detail
                    </a>
                    <a href="{{ route('users.orders.index') }}" class="list-group-item">
                        Order History
                    </a>
                    <a href="#" class="list-group-item">
                        Support 
                    </a>
                    <a href="#" class="list-group-item">
                        Track Order
                    </a>
                </div>        
            </div>
            <div class="col-xs-4 card-body" style="padding: 50px;">
                <h4>Account Details</h4>
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
                <div id="accountDetail">

                </div>
            </div>
        </div>
    </div>
</section>







<!-- footer Starts-->
    @include('inc/footer')
<!-- footer Ends-->

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