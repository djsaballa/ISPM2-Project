<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMachine</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bookings-events.css')}}">
</head>

<body>
    <sideNav>
        @include('components.sidenavAdmin')
    </sideNav>

    <h1 class="add-schedule-header"> ADD UPCOMING EVENTS </h1>

    <p class="error" style="color: red; text-align:center;">{{ Session::get('unsuccessful-add') }}</p>

    <form class="add-schedule-box" method="POST" action="{{ route('admin_save_schedules') }}">
        @csrf
        <label>Event Title: </label>
        <input type="text" id="eventTitle" name="eventTitle" placeholder="Title of Event">
        <p class="error text-md-center" style="color: red;">@error('eventTitle'){{ $message }} @enderror</p>

        <label>Description: </label>
        <input class="event-edit-input" type="text" id="desc" name="desc" placeholder="Description of Event">
        <p class="error text-md-center" style="color: red;">@error('desc'){{ $message }} @enderror</p>

        <label>Date: </label>
        <input type="date" id="date" name="date">
        <p class="error text-md-center" style="color: red;">@error('date'){{ $message }} @enderror</p>

        <p>(If you desire to have a Start Time or End Time, then all Hour, Minute, and Period of Time must be filled out)</p>

        <div class="add-date">
            <label>Start Time: </label>
            <input type="time" id="startTime" name="startTime">
            <p class="error text-md-center" style="color: red;">@error('startTime'){{ $message }} @enderror</p>

            <label>End Time: </label>
            <input type="time" id="endTime" name="endTime">
            <p class="error text-md-center" style="color: red;">@error('endTime'){{ $message }} @enderror</p>
        </div>

        <button class="button"> Add </button>
    </form>

    <footer>
        @include('components.footer')
    </footer>
</body>

<script src="https://­code.jquery.com/­jquery-3.5.1.slim.min­.js" integrity="sha384-Df­Xdz2htPH0lsSSs5nCTpu­j/­zy4C+OGpamoFVy38MVBnE­+IbbVYUew+OrCXaRkfj" ­ crossorigin="anonymo­us"></script>
<script src="https://­cdn.jsdelivr.net/npm/­bootstrap@4.6.0/dist/­js/­bootstrap.bundle.min.­js" integrity="sha384-Pi­v4xVNRyMGpqkS2by6br4­gNJ7DXjqk09RmUpJ8jgG­tD7zP9yug3goQfGII0yA­ns" crossorigin="anonymo­us"></script>
<script type="text/­javascript" charset="utf8" src="https://­cdn.datatables.net/­1.10.24/js/­jquery.dataTables.js"></script>

</html>