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

    <form class="edit-book-box" action="/list-of-bookings.blade.php">
        <label>Employee: </label>
        <input type="text" id="employee" value="">
        <label>Desk: </label>
        <select class="edit-select-desk" id="desk">
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
        <label class="edit-top-margin">Date: </label>
        <input type="date" id="date" value="">
        <label>Booking Title: </label>
        <input type="text" id="urreason" value="">
        <button class="button"> Save </button>
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