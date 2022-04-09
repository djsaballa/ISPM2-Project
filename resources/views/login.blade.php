<!DOCTYPE html>
<html>
<head>
    <title>Project</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="container">
        <div class="login-title-container">
            <text class="login-title">Welcome Back</text>
            <text class="login-subtitle">Reserve your seat</text>
        </div>
        <form>
            @csrf
            <input type="text" placeholder="Enter your email">
            <input type="password" placeholder="Password">
            <button type="button" onclick="alert('Hello World!')"><text>Sign in</text></button>
        </form>
    </div>
</body>
</html>