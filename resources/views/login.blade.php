<!DOCTYPE html>
<html>

<head>
    <title>Login</title>

    <!-- ICONS -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>

    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
</head>

<body>
    <div class="login">
        <div class="login-logo-container">
            <img class="login-logo" src="{{asset('images/E_Blue.svg')}}" alt="e-machine logo">
        </div>
        <div class="container">
            <div class="login-title-container">
                <text class="login-title">Welcome</text>
                <text class="login-subtitle">Reserve your seat</text>
            </div>
            <form method="POST" action="{{ route('login_auth') }}"> 
                @csrf
                <div class="inner-addon left-addon">
                    <i class="fi fi-sr-envelope"></i>
                    <input type="text" placeholder="Email" id="email" name="email">
                </div>
                <span class="error" style="color: red;">@error('email'){{ $message }} @enderror</span>
                <span class="error" style="color: red;">{{ Session::get('failEmail') }}</span>
                <div class="inner-addon left-addon">
                    <i class="fi fi-sr-lock"></i>
                    <input type="password" placeholder="Password" id="password" name="password">
                </div>
                <span class="error" style="color: red;">@error('password'){{ $message }} @enderror</span>
                <span class="error" style="color: red;">{{ Session::get('failPass') }}</span>
                <button type="submit"><text>Sign in</text></button>
            </form>
        </div>
    </div>
</body>

</html>