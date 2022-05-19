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

        <form class="map-booking-container">
            <h1 class="map-booking-header">NEW BOOKING</h1>

            <label class="form-title" for="fname">Date</label>
            <br>
            <input class="form-title-input" type="date" id="fname" name="date">

            <br>

            <label class="form-title" for="desk">Desk</label>
            <br>
            <select class="desk-dropdown" id="desk" name="desk">
                <option value="">Desk 01</option>
                <option value="">Desk 02</option>
                <option value="">Desk 03</option>
                <option value="">Desk 04</option>
                <option value="">Desk 05</option>
                <option value="Desk 1">Desk 01</option>
                <option value="Desk 2">Desk 02</option>
                <option value="Desk 3">Desk 03</option>
                <option value="Desk 4">Desk 04</option>
                <option value="Desk 5">Desk 05</option>
                <option value="Desk 6">Desk 06</option>
                <option value="Desk 7">Desk 07</option>
                <option value="Desk 8">Desk 08</option>
                <option value="Desk 9">Desk 09</option>
                <option value="Desk 10">Desk 10</option>
                <option value="Desk 11">Desk 11</option>
                <option value="Desk 12">Desk 12</option>
                <option value="Desk 13">Desk 13</option>
                <option value="Desk 14">Desk 14</option>
                <option value="Desk 15">Desk 15</option>
                <option value="Desk 16">Desk 16</option>
                <option value="Desk 17">Desk 17</option>
                <option value="Desk 18">Desk 18</option>
                <option value="Desk 19">Desk 19</option>
                <option value="Desk 20">Desk 20</option>
                <option value="Desk 21">Desk 21</option>
                <option value="Desk 22">Desk 22</option>
                <option value="Desk 23">Desk 23</option>
                <option value="Desk 24">Desk 24</option>
                <option value="Desk 25">Desk 25</option>
                <option value="Desk 26">Desk 26</option>
                <option value="Desk 27">Desk 27</option>
                <option value="Desk 28">Desk 28</option>
                <option value="Desk 29">Desk 29</option>
                <option value="Desk 30">Desk 30</option>
            </select>

            <br>

            <label class="form-title" for="subject">Booking Title</label>
            <br>
            <textarea class="form-input" id="subject" name="subject" placeholder="An optional booking summary"></textarea>
            <br>
            <input type="submit" value="Add Booking">
        </form>

        <footer>
            @include('components.footer')
        </footer>
    </div>
</body>

</html>