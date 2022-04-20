<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- ICONS -->
    <script src="https://kit.fontawesome.com/efe1f7e790.js" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>

    <style>
        .active {
            color: #226acc;
        }

        .active2 {
            background-color: #eaeefb;
        }
    </style>

    <title>Document</title>
</head>

<body>

    <div class="div-nav">


        <!-- LOGO -->
        <a href="/"> <img src="{{ asset('images/logo135.png') }}" class="logo" alt="logo"></a>

        <ul class="nav">


            <li class="nav-item {{ request()->is('/') ? 'active2' : '' }}">
                <i class="fi fi-br-home {{ request()->is('/') ? 'active' : '' }}"></i>
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">
                    Home
                </a>
            </li>

            <li class="nav-item {{ request()->is('map') ? 'active2' : '' }}">
                <i class="fi fi-br-map {{ request()->is('map') ? 'active' : '' }}"></i>
                <a class="nav-link  {{ request()->is('map') ? 'active' : '' }}" href="map">
                    Map
                </a>
            </li>

            <li class="nav-item {{ request()->is('myBookings') ? 'active2' : '' }}">
                <i class="fi fi-br-list {{ request()->is('myBookings') ? 'active' : '' }}"></i>
                <a class="nav-link {{ request()->is('myBookings') ? 'active' : '' }}" href="myBookings">
                    Bookings
                </a>
            </li>



            <!-- LOGOUT -->
            <li class="nav-item nav-last">
                <i class="fi fi-br-sign-out-alt"></i>
                <a class="nav-link " href="#">
                    Logout
                </a>
            </li>
        </ul>

    </div>

</body>

</html>