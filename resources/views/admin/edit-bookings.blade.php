<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMachine | Edit Bookings</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bookings-events.css')}}">

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('images/favicon-32x32.png') }}">
</head>

<body>
    <sideNav>
        @include('components.sidenavAdmin')
    </sideNav>

    <h1 class="edit-book-header">EDIT BOOKINGS</h1>


    <form class="edit-book-box" method="POST" action="{{ route('admin_update_bookings', $booking_info->id) }}">
    <p class="error" style="color: red; text-align:center;">{{ Session::get('notAvailable') }}</p>

        @csrf
        <input type="hidden" id="bookingId" name="bookingId" value="{{ $booking_info->id }}">

        <label>Employee:</label>
            <input type="text" id="fullName" name="fullName" value="{{ $booking_info->getUserFullName($booking_info->user_id) }}" readonly>            
            <input type="hidden" id="userId" name="userId" value="{{ $booking_info->user_id }}">

            
        <p class="error text-md-center" style="color: red;">@error('userId'){{ $message }} @enderror</p>

        <label>Desk: </label>
        <select class="edit-select-desk" id="deskId" name="deskId">
            <option selected="selected" value="{{ $booking_info->desk_id }}">Desk {{ $booking_info->getSeatNumber($booking_info->desk_id) }}</option>
            @foreach($desks as $desk)
            <option value="{{ $desk->id }}">Desk {{ $desk->seat_number }}</option>
            @endforeach
        </select>
        <p class="error text-md-center" style="color: red;">@error('deskId'){{ $message }} @enderror</p>

        <label class="edit-top-margin">Date: </label>
        <input type="date" id="date" name="date" value="{{ $booking_info->date }}">
        <p class="error text-md-center" style="color: red;">@error('date'){{ $message }} @enderror</p>

        <button class="button"> Save </button>
        <a href="{{ route('admin_bookings') }}">
            <input type="button" value="Cancel">
        </a>
    </form>

    <footer>
        @include('components.footer')
    </footer>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script>
    jQuery(document).ready(function() {
        jQuery('#bookings').DataTable();
    });
</script>

</html>