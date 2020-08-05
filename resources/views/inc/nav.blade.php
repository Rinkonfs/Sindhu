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
      <a class="navbar-brand" href="{{ URL::to('/')}}">
        <img src="{{asset('images/sindhu_logo.png')}}" width="40" height="auto" class="d-inline-block align-top" alt="Sindhu Logo">
      Sindhu Store
      </a>
      <button class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#ftco-nav"
              aria-controls="ftco-nav"
              aria-expanded="false"
              aria-label="Toggle navigation">
        <span class="icon-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="{{ URL::to('/') }}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{ URL::to('/shop') }}" class="nav-link">Shop</a></li>
          <li class="nav-item"><a href="{{ URL::to('/about') }}" class="nav-link">About</a></li>
          <li class="nav-item"><a href="{{ URL::to('/contact') }}" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="{{ URL::to('/Custom_Order') }}" class="nav-link">Custom Order</a></li>


            @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
            @endif
          @guest
            <li class="nav-item dropdown">
              <a  class="nav-link dropdown-toggle"
                  href="#"
                  id="dropdown04"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false">
                  Account
              </a>
              <div  class="dropdown-menu"
                    aria-labelledby="dropdown04">
                <a  class="dropdown-item"
                    href="{{ route('login') }}">
                      {{ __('Login') }}
                </a>
                @if (Route::has('register'))
                  <a  class="dropdown-item" 
                      href="{{ route('register') }}">
                        {{ __('Register') }}
                  </a>
                @endif
              </div>
            </li>
              @else
              <li class="nav-item dropdown">
                <a  id="navbarDropdown"
                    class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                </a>

              <div  class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="navbarDropdown">
                      <a  class="dropdown-item"
                          href="{{ url('/dashboard') }}">{{ __('Dashboard') }}
                      </a>
                      <a  class="dropdown-item"
                          href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                      </a>
                <form id="logout-form"
                      action="{{ route('logout') }}"
                      method="POST"
                      style="display: none;">
                        @csrf
                </form>
              </div>
            </li>
          @endguest

              <li class="nav-item dropdown cta cta-colored">
                <a  class="nav-link dropdown-toggle cart_a"
                    onclick="myFunction()"
                    id="navbarDropdown">
                    <span class="icon-shopping_cart"></span>
                    {{ count((array) session('cart')) }}
                </a>
         {{-- SCRIPT STARTS HERE--}}
                <script>
                  function myloadFunction(){
                      document.getElementById("mySidenav").style.display="none";
                  }
                  document.addEventListener("DOMContentLoaded", myloadFunction);
                  function myFunction() {
                    if(screen.width > 768) { 
                      var x = document.getElementById("mySidenav");
                      if(x.style.display === "none") {
                        x.style.display = "block";
                      } 
                      else {
                        x.style.display = "none";
                      }
                    }
                    else{
                      window.location.href = "{{ url('cart') }}"; 
                    }
                  }
                </script>
        {{-- SCRIPT ENDS HERE--}}        
                <div id="mySidenav" class="scroller ">
                  <div>
                    <div class="shopping-cart-header">
                    {{-- <i class="fa fa-shopping-cart cart-icon"></i><span class="badge">{{ count((array) session('cart')) }}</span> --}}
                      <div class="shopping-cart-total">
                        <?php $total = 0 ?>
                        @foreach((array) session('cart') as $id => $details)
                          <?php $total += $details['price'] * $details['quantity'] ?>
                        @endforeach
                      </div>
                      <p>Total: <span>৳{{ $total }}</span></p>
                      <hr>
                    </div>

                    @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                    <ul class="shopping-cart-items">
                      <li class="cart_li">
                        <img class="cart_img" src="{{url('/images/'.$details['photo'])}}" />
                        <span class="item-name">{{ $details['name'] }}</span>
                        <span class="item-price">৳ {{ $details['price'] }}</span>
                        <span class="item-quantity">{{ $details['quantity'] }} Pcs</span>
                      </li>
                    </ul>
                    @endforeach
                    @endif
                      
                      {{-- <div class="row">--}}
                        <div class="cart_button">
                          <a href="{{ url('cart') }}">View all</a>
                        </div>
                      {{-- </div> --}}
                  </div>
                </div>
              </li> 
        </ul>
      </div>
    </div>
  </nav>
