<div class="py-1 bg-black">
  <div class="container">
    <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
      <div class="col-lg-12 d-block">
        <div class="row d-flex">
          <div class="col-md pr-4 d-flex topper align-items-center">
            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
            <span class="text"><a href="tel:+8801766598447">+8801766598447</a></span>
          </div>
          <div class="col-md pr-4 d-flex topper align-items-center">
            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
            <span class="text">info@sindhustore.com</span>
          </div>
          <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
            <span class="text">3-5 Business days delivery &amp; Free Returns</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
    <a class="navbar-brand" href="./">Sindhu Store</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="./" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{ URL::to('/shop') }}" class="nav-link">Shop</a></li>
          <li class="nav-item"><a href="{{ URL::to('/about') }}" class="nav-link">About</a></li>
          <li class="nav-item"><a href="{{ URL::to('/contact') }}" class="nav-link">Contact</a></li>


            @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
            @endif
            @guest
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item"  href="{{ route('register') }}">{{ __('Login') }}</a>
                @if (Route::has('register'))
                <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
              </div>
            </li>
                @else
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('/dashboard') }}">{{ __('Dashboard') }}</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
                </div>
                </li>
              @endguest


{{--          <li class="nav-item cta cta-colored"><a href="cart" class="nav-link"><span class="icon-shopping_cart"></span>{{ count((array) session('cart')) }}</a></li>--}}


              <li class="nav-item dropdown cta cta-colored">
                <a class="nav-link dropdown-toggle" href="cart" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon-shopping_cart"></span>
                {{ count((array) session('cart')) }}
                </a>
                
                <div>
                  <div class="dropdown-menu" aria-labelledby="dropdown05">
                    <div class="row total-header-section">
                      <div class="col-lg-12 col-sm-6 col-6">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> 
                        <span class="badge badge-pill badge-danger">
                          {{ count((array) session('cart')) }}
                        </span>
                      </div>

                        <?php $total = 0 ?>
                      @foreach((array) session('cart') as $id => $details)
                        <?php $total += $details['price'] * $details['quantity'] ?>
                      @endforeach

                      <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                        <p>Total: <span class="text-info">${{ $total }}</span></p>
                      </div>
                    </div>

                    @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                    <div class="row cart-detail">
                      <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                        <img src="{{url('/images/'.$details['photo'])}}" />
                      </div>
                      <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                        <p>{{ $details['name'] }}</p>
                        <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                      </div>
                    </div>
                    @endforeach
                    @endif
                      <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                          <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                      </div>
                  </div>
                </div>
              </li> 
            
              {{-- <div class="container">
                <div class="shopping-cart">
                  <div class="shopping-cart-header">
                    <i class="fa fa-shopping-cart cart-icon"></i><span class="badge">3</span>
                    <div class="shopping-cart-total">
                      <span class="lighter-text">Total:</span>
                      <span class="main-color-text">$2,229.97</span>
                    </div>
                  </div> 

                <ul class="shopping-cart-items">
                
                </li>
                </ul>
                <li class="clearfix">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item1.jpg" alt="item1" />
                <span class="item-name">Sony DSC-RX100M III</span>
                <span class="item-price">$849.99</span>
                <span class="item-quantity">Quantity: 01</span>
                </li>

                <li class="clearfix">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item2.jpg" alt="item1" />
                <span class="item-name">KS Automatic Mechanic...</span>
                <span class="item-price">$1,249.99</span>
                <span class="item-quantity">Quantity: 01</span>
                </li>

                <li class="clearfix">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item3.jpg" alt="item1" />
                <span class="item-name">Kindle, 6" Glare-Free To...</span>
                <span class="item-price">$129.99</span>
                <span class="item-quantity">Quantity: 01</span>

                <a href="#" class="button">Checkout</a>
                </div> 
              </div>  --}}
              

        </ul>
      </div>
    </div>
  </nav>
