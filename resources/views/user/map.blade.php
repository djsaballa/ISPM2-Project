<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ICONS -->
    <script src="https://kit.fontawesome.com/efe1f7e790.js" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('images/favicon-32x32.png') }}">

    <title>eMachine | Hotdesk Map</title>
</head>

<body>
    <div>
        <sideNav>
            @include('components.sidenavUser')
        </sideNav>

        <h1 class="map-header">HOTDESK MAP</h1>
        <div class="map-option">


            <img class="map" src="{{asset('images/Map.svg')}}">
        </div>

        <form class="map-booking-container" method="POST" action="{{ route('user_make_booking') }}">
            @csrf
            <h1 class="map-booking-header">NEW BOOKING</h1>
            <p class="error" style="color: red; text-align:center;">{{ Session::get('notAvailable') }}</p>
            
            <input type="hidden" id="userId" name="userId" value="{{ $user_info->id }}">

            <label class="form-title" for="fname">Date</label>
            <br>
            <input class="form-title-input" type="date" id="date" name="date" value="{{ old('date') }}">
            <p class="error text-md-center" style="color: red;">@error('date'){{ $message }} @enderror</p>

            <br>

            <label class="form-title" for="desk">Desk</label>
            <br>
            <select class="desk-dropdown" id="desk" name="desk">
                    <option selected="selected" disabled>Desk Number</option>
                @foreach($desks as $desk)
                    <option value="{{ $desk->id }}">Desk {{ $desk->seat_number }}</option>
                @endforeach
                <p class="error text-md-center" style="color: red;">@error('date'){{ $message }} @enderror</p>
            </select>

            <br>

            <input type="submit" value="Make Reservation">
        </form>

        <footer>
            @include('components.footer')
        </footer>
    </div>
</body>

</html>