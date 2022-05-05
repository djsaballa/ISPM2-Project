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
            <form>
                @csrf
                <div class="inner-addon left-addon">
                    <i class="fi fi-sr-envelope"></i>
                    <input type="text" placeholder="Email" id="email">
                </div>
                <div class="inner-addon left-addon">
                    <i class="fi fi-sr-lock"></i>
                    <input type="password" placeholder="Password" id="password">
                </div>
                <button type="button" onclick="alert('Hello World!')"><text>Sign in</text></button>
            </form>
        </div>
    </div>
</body>

</html>