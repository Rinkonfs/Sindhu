  @include('inc.head')

<style>
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
}

</style>
</head>

<body>
  @include('inc.nav')
 
  <div id="login-box">
    <form class="left-box" method="POST" action="{{ route('register') }}">
      @csrf
      <h1> Sign Up </h1>
      <input  id="name"
              type="text"
              class="@error('name') is-invalid @enderror"
              name="name"
              value="{{ old('name') }}"
              required
              autocomplete="name"
              placeholder="Username"
              autofocus/>
              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
      <input  id="email"
              type="text"
              name="email"
              placeholder="Email"
              class="@error('email') is-invalid @enderror"
              value="{{ old('email') }}"
              required
              autocomplete="email"/>
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
      <input  id="password"
              type="password"
              name="password"
              placeholder="Password"
              class="@error('password') is-invalid @enderror"
              required
              autocomplete="new-password"/>
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
      <input  id="password-confirm"
              type="password"
              name="password_confirmation"
              placeholder="Retype Password"
              required
              autocomplete="new-password"/>
      <input  type="submit"
              value="Register"
              name="signup-button"
              placeholder="Sign Up"/>

    </form>
    
    <form class="right-box" method="POST" action="{{ route('login') }}">
      @csrf
      <span class="signinwith">Login In</span>
      <input  id="email" 
              type="text"
              class=" @error('email') is-invalid @enderror"
              name="email"
              value="{{ old('email') }}"
              required
              autocomplete="email"
              placeholder="Email"
              autofocus/>
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
              
      <div>
         <input id="password" 
              type="password"
              name="password"
              placeholder="Password"
              class="@error('password') is-invalid @enderror"
              required
              autocomplete="current-password"/>
      </div>
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
             
      
        <div class="form-check">
          <input  class="form-check-input"
                  type="checkbox"
                  name="remember"
                  id="remember" {{ old('remember') ? 'checked' : '' }}>

          <label class="form-check-label" for="remember" style="color:#141a46;">
            {{ __('Remember Me') }}
          </label>
       </div>
        <input type="submit"
          value="Login"
          name="signup-button"
          placeholder="Sign Up"/>
        @if (Route::has('password.request'))
        <a  style="font-size:13px;color:#141a46; font-weight:600;margin-left:20%;" href="{{ route('password.request') }}">
              {{ __('Forgot Your Password?') }}
        </a>
        @endif
    </form>

    <div class="or">OR</div>

  </div>


  @include('inc.footer') 
  @include('inc.scripts')
 
</body>
</html>
