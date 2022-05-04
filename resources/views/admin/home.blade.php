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

    <title>AdminHomepage</title>
</head>

<body>
    <sideNav>
        @include('components.sidenavAdmin')
    </sideNav>
    <h1 class="admin-title"> WELCOME,  ADMIN!</h1>
    <p class="admin-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

    <button class="button-admin">See All Bookings</button>



    <img src="{{ asset('images/adminbg.jpg') }}" class="admin-bg">
    <section class="border-clock"></section>
  
     <!-- </div> -->
     <footer>
            @include('components.footer')
        </footer>
</body>




</html>