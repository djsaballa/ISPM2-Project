<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMachine | Add Tables</title>
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

    <h1 class="edit-book-header">ADD TABLES</h1>


    <form class="edit-book-box" method="POST" action="{{ route('admin_save_tables') }}">
        @csrf

        <label>Number of Desk to Be Added: </label>
        <input type="number" id="dnum" name="dnum">
        <p class="error text-md-center" style="color: red;">@error('dnum'){{ $message }} @enderror</p>

        <p class="error text-md-center" style="color: red;"></p>

        <label class="edit-top-margin">Status: </label>
        <br>
        <select id="status" name="status">
            <option value="1" selected>Enabled</option>
            <option value="0">Disabled</option>
        </select>
        <p class="error text-md-center" style="color: red;">@error('status'){{ $message }} @enderror</p>

        <br>
        <button class="button "> Save </button>
        <a href="{{ route('admin_tables') }}">
            <input class="button cncl-btn" type="button" style=" background-color: #ff6d6d" value="Cancel">
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