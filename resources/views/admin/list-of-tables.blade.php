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

    <title>eMachine | List of Tables</title>
</head>

<body>
    <div class="container">
        <sideNav>
            @include('components.sidenavAdmin')
        </sideNav>

        <h1 class="sched-header">DESKS</h1>

        @if (Session::has('table'))
            <div role="alert">
                <p class="error" style="color: #226acc; text-align:center; background-color: #eaeefb">{!! Session::get('table') !!}</p>
            </div>
        @endif

        <table class="sched-table" id="bookings">
            <thead class="sched-table-header">
                <tr>
                    <th>Seat Number</th>
                    <th class="last-col">Status</th>
                    <th>
                        <a href="{{ route(('admin_add_tables')) }}">
                            <button class="button add2">Add Table</button>
                        </a>
                    </th>
                <tr>
            </thead>
            <tbody class="sched-table-row">
                @foreach($desks as $desk)
                <tr>
                    <td>Desk {{ $desk->seat_number }}</td>
                    @if( $desk->getStatus($desk->id) == 'Disabled') 
                        <td style="color: #ff6d6d">{{ $desk->getStatus($desk->id) }}</td>
                    @else
                        <td>{{ $desk->getStatus($desk->id) }}</td>
                    @endif
                    <td style="display:flex;">
                        <form method="POST" action="{{ route('admin_enable_tables') }}">
                            @csrf
                            <input type="hidden" id="deskId" name="deskId" value="{{ $desk->id }}">
                            <button type="submit" class="button enable-btn" style=" background-color: #5dbea3">Enable</button>
                        </form>
                        <form method="POST" action="{{ route('admin_disable_tables') }}">
                            @csrf
                            <input type="hidden" id="deskId" name="deskId" value="{{ $desk->id }}">
                            <button type="submit" class="button enable-btn" style=" background-color: #ff6d6d">Disable</button>
                        </form>
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

<script src="https://??code.jquery.com/??jquery-3.5.1.slim.min??.js" integrity="sha384-Df??Xdz2htPH0lsSSs5nCTpu??j/??zy4C+OGpamoFVy38MVBnE??+IbbVYUew+OrCXaRkfj" ?? crossorigin="anonymo??us"></script>
<script src="https://??cdn.jsdelivr.net/npm/??bootstrap@4.6.0/dist/??js/??bootstrap.bundle.min.??js" integrity="sha384-Pi??v4xVNRyMGpqkS2by6br4??gNJ7DXjqk09RmUpJ8jgG??tD7zP9yug3goQfGII0yA??ns" crossorigin="anonymo??us"></script>
<script type="text/??javascript" charset="utf8" src="https://??cdn.datatables.net/??1.10.24/js/??jquery.dataTables.js"></script>


</html>