<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Bookings</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>

<body>
    <sideNav>
        @include('components.sidenavAdmin')
    </sideNav>

    <h1 class="admin-header">Bookings</h1>

    <table class="admin-table" id="bookings">
        <thead class="admin-table-header">
            <tr>
                <th class="profile-image-header"></th>
                <th>Employee</th>
                <th>Desk</th>
                <th>Date</th>
                <th>Booking Tile</th>
            <tr>
        </thead>
        <tbody class="admin-table-row">
            <tr>
                <td class="profile-image"></td>
                <td>Dave Sadsad</td>
                <td>Desk 12</td>
                <td>Monday, March 28, 2022</td>
                <td>Wala, uupo lang</td>
            </tr>
        </tbody>
    </table>

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