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
        <a href="/admin-home"> <img src="{{ asset('images/logo135.png') }}" class="logo" alt="logo"></a>

        <ul class="navv">
            <li class="navv-item {{ request()->is('/') ? 'active2' : '' }}">
                <i class="fi fi-br-home {{ request()->is('/') ? 'active' : '' }}"></i>
                <a class="navv-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('admin_home') }}">
                    Home
                </a>
            </li>
            <li class="navv-item {{ request()->is('bookings') ? 'active2' : '' }}">
                <i class="fi fi-br-list {{ request()->is('bookings') ? 'active' : '' }}"></i>
                <a class="navv-link {{ request()->is('bookings') ? 'active' : '' }}" href="{{ route('admin_bookings') }}">
                    Bookings
                </a>
            </li>
            <li class="navv-item {{ request()->is('employees') ? 'active2' : '' }}">
                <i class="fi fi-br-users {{ request()->is('employees') ? 'active' : '' }}"></i>
                <a class="navv-link  {{ request()->is('employees') ? 'active' : '' }}" href="{{ route('admin_employees') }}">
                    Employees
                </a>
            </li>
            <li class="navv-item {{ request()->is('schedules') ? 'active2' : '' }}">
                <i class="fi fi-br-calendar {{ request()->is('schedules') ? 'active' : '' }}"></i>
                <a class="navv-link  {{ request()->is('schedules') ? 'active' : '' }}" href="{{ route('admin_upcoming_events') }}">
                    Upcoming Event
                </a>
            </li>

            <!-- LOGOUT -->
            <li class="navv-item nav-last">
                <i class="fi fi-br-sign-out-alt"></i>
                <a class="navv-link " href="{{ route('login') }}">
                    Logout
                </a>
            </li>
        </ul>

    </div>

</body>

</html>