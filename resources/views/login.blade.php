<!DOCTYPE html>
<html>
<head>
    <title>Project</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="login-logo-container">
        <img src="{{asset('images/logo.png')}}" alt="logo" class="login-logo">
    </div>
    <div class="container">
        <div class="login-title-container">
            <text class="login-title">Welcome Back</text>
            <text class="login-subtitle">Reserve your seat</text>
        </div>
        <form>
            @csrf
            <div>
                <img src="{{asset('images/login-mail.png')}}">
                <input type="text" placeholder="Enter your email">
            </div>
            <div>
                <img src="{{asset('images/login-password.png')}}">
                <input type="password" placeholder="Password">
            </div>
            <button type="button" onclick="alert('Hello World!')"><text>Sign in</text></button>
        </form>
    </div>
</body>
</html>