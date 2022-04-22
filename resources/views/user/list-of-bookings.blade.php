<!DOCTYPE html>
<html lang="en">

<head>
    <title>List of Employee</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>

<body>
    <sideNav>
        @include('components.sidenavUser')
    </sideNav>

    <h1 class="employee-header">MY BOOKINGS</h1>

    <input class="search-bar" type="text" name="searchbar" id="searchbar" placeholder="search people by name or email">

    <table class="employee-table" id="bookings">
        <thead class="employee-table-header">
            <tr>
                <th class="profile-image-header"></th>
                <th>Date</th>
                <th>Desk Number</th>
            <tr>
        </thead>
        <tbody class="employee-table-row">
            <tr>
                <td class="profile-image"></td>
                <td>April 25, 2022</td>
                <td>Desk 109</td>
            </tr>
        </tbody>
    </table>

</body>

<script src="https://­code.jquery.com/­jquery-3.5.1.slim.min­.js" integrity="sha384-Df­Xdz2htPH0lsSSs5nCTpu­j/­zy4C+OGpamoFVy38MVBnE­+IbbVYUew+OrCXaRkfj" ­ crossorigin="anonymo­us"></script>
<script src="https://­cdn.jsdelivr.net/npm/­bootstrap@4.6.0/dist/­js/­bootstrap.bundle.min.­js" integrity="sha384-Pi­v4xVNRyMGpqkS2by6br4­gNJ7DXjqk09RmUpJ8jgG­tD7zP9yug3goQfGII0yA­ns" crossorigin="anonymo­us"></script>
<script type="text/­javascript" charset="utf8" src="https://­cdn.datatables.net/­1.10.24/js/­jquery.dataTables.js"></script>
<script>
    jQuery(document).ready(function() {
        jQuery('#bookings').DataTable();
    });
</script>

</html>