<!DOCTYPE html>
<html>
<head>
    <title>Project</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="login">
        <div class="login-logo-container">
            <img src="{{asset('images/logo.png')}}" alt="logo" class="login-logo">
        </div>
        <div class="container">
            <div class="login-title-container">
                <text class="login-title">Welcome</text>
                <text class="login-subtitle">Reserve your seat</text>
            </div>
            <form>
                @csrf
                <div>
                    <input type="text" placeholder="Email" id="email">
                </div>
                <div>
                    <input type="password" placeholder="Password" id="password">
                </div>
                <button type="button" onclick="alert('Hello World!')"><text>Sign in</text></button>
            </form>
        </div>
    </div>
</body>
</html>