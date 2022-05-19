<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bookings-events.css')}}">

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('images/favicon-32x32.png') }}">

    <title>EMachine | Edit Upcoming Events</title>
</head>

<body>
    <div class="container">
        <sideNav>
            @include('components.sidenavAdmin')
        </sideNav>

        <h1 class="edit-schedule-header"> EDIT UPCOMING EVENTS </h1>
        <div class="schedule-box-container">
            <form class="edit-schedule-box" method="POST" action="{{ route('admin_update_schedules') }}">
                @csrf
                <input type="hidden" id="eventId" name="eventId" value="{{ $event_info->id }}">

                <label>Event Title: </label>
                <input type="text" id="eventTitle" name="eventTitle" value="{{ $event_info->title }}">
                <p class="error text-md-center" style="color: red;">@error('eventTitle'){{ $message }} @enderror</p>

                <label>Description: </label>
                <input class="event-edit-input" type="text" id="desc" name="desc" value="{{ $event_info->description }}">
                <p class="error text-md-center" style="color: red;">@error('desc'){{ $message }} @enderror</p>

                <label>Date: </label>
                <input type="date" id="date" name="date" value="{{ $event_info->date }}">
                <p class="error text-md-center" style="color: red;">@error('date'){{ $message }} @enderror</p>

                <label>Start Time: </label>
                <input type="time" id="startTime" name="startTime" value="{{ $event_info->start_time }}">
                <p class="error text-md-center" style="color: red;">@error('startTime'){{ $message }} @enderror</p>

                <label>End Time: </label>
                <input type="time" id="endTime" name="endTime" value="{{ $event_info->end_time }}">
                <p class="error text-md-center" style="color: red;">@error('endTime'){{ $message }} @enderror</p>

                <button class="button"> Save </button>
            </form>
        </div>
        <footer>
            @include('components.footer')
        </footer>
    </div>
</body>

<script src="https://­code.jquery.com/­jquery-3.5.1.slim.min­.js" integrity="sha384-Df­Xdz2htPH0lsSSs5nCTpu­j/­zy4C+OGpamoFVy38MVBnE­+IbbVYUew+OrCXaRkfj" ­ crossorigin="anonymo­us"></script>
<script src="https://­cdn.jsdelivr.net/npm/­bootstrap@4.6.0/dist/­js/­bootstrap.bundle.min.­js" integrity="sha384-Pi­v4xVNRyMGpqkS2by6br4­gNJ7DXjqk09RmUpJ8jgG­tD7zP9yug3goQfGII0yA­ns" crossorigin="anonymo­us"></script>
<script type="text/­javascript" charset="utf8" src="https://­cdn.datatables.net/­1.10.24/js/­jquery.dataTables.js"></script>

</html>