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

    <title>eMachine | Upcoming Events</title>
</head>

<body>
    <div class="container">
        <sideNav>
            @include('components.sidenavAdmin')
        </sideNav>

        <h1 class="sched-header">UPCOMING EVENTS</h1>

        <table class="sched-table" id="bookings">
            <thead class="sched-table-header">
                <tr>
                    <th class="profile-image-header"></th>
                    <th>Event</th>
                    <th>Date</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>
                        <a href="{{ route('admin_add_bookings') }}">
                            <button class="button add2">Add</button>
                        </a>
                    </th>
                <tr>
            </thead>
            <tbody class="sched-table-row">
                @foreach($upcoming_events as $upcoming_event)
                <tr>
                    <td class="profile-image"></td>
                    <td>{{ $upcoming_event->title }}</td>
                    <td>{{ $upcoming_event->date }}</td>
                    <td>{{ $upcoming_event->start_time }}</td>
                    <td>{{ $upcoming_event->end_time }}</td>
                    <td>
                        <a href="{{ route('admin_edit_schedules'), $upcoming_event->id }}">
                            <button class="button edit2">Edit</button>
                        </a>
                        <a onClick="">
                            <button class="button delete2">Delete</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <footer>
            @include('components.footer')
        </footer>
    </div>
</body>

<script src="https://­code.jquery.com/­jquery-3.5.1.slim.min­.js" integrity="sha384-Df­Xdz2htPH0lsSSs5nCTpu­j/­zy4C+OGpamoFVy38MVBnE­+IbbVYUew+OrCXaRkfj" ­ crossorigin="anonymo­us"></script>
<script src="https://­cdn.jsdelivr.net/npm/­bootstrap@4.6.0/dist/­js/­bootstrap.bundle.min.­js" integrity="sha384-Pi­v4xVNRyMGpqkS2by6br4­gNJ7DXjqk09RmUpJ8jgG­tD7zP9yug3goQfGII0yA­ns" crossorigin="anonymo­us"></script>
<script type="text/­javascript" charset="utf8" src="https://­cdn.datatables.net/­1.10.24/js/­jquery.dataTables.js"></script>

</html>