@extends('layouts.app')

@section('content')

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

@endsection
