 @extends('layouts.app')
@section('title', 'Login')
@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="login-container">
            <h2>Login</h2>
            <div class="row100">
                <div class="col">
                    <img src="{{url('images/icons/user.png')}}" alt="">
                    <input id="email" type="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col">
                    <img src="{{url('images/icons/lock.png')}}" alt="">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                    
                </div>
            </div>

            <div id="password-toggle" onclick="showHide();"></div>

            <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>

            <!-- <div class="remember">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
            </div> -->

            <div class="forget">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>   
        </div>
    </form>
</body>
</html>
<script src="{{url('https://code.jquery.com/jquery-3.4.1.js')}}"></script>
@endsection