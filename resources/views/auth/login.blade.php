@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="./css/login.css">
<script src="./js/validation.js" defer></script>
<script src="./js/login.js" defer></script>

<div class="content">
    <form class="login-form" method="POST" action="{{ route('login') }}">
    @csrf
        <div class="input-group phone-input">
            <label for="phone">{{ __('Numero Telephone') }}</label>
            <input id="phone" type="tel" name="phone" required autocomplete="phone" autofocus>
        </div>

        <div class="input-group password-input">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required autocomplete="current-password">       
        </div>
                    
        <div class="input-group remember-input">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember">{{ __('Remember Me') }}</label>
        </div>
        <div class="input-group submit-input">
            <button class="btn" type="submit">{{ __('Login') }}</button>
        </div>
    </form>
</div>

@endsection
