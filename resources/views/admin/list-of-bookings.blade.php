<!DOCTYPE html>
<html lang="en">

<head>
    <title>EMachine | Bookings</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>

<body>
    <div>
        <sideNav>
            @include('components.sidenavAdmin')
        </sideNav>

        <h1 class="bookings-header">BOOKINGS</h1>

        <div class="bookings-table-container">
            <table class="bookings-table" id="bookings">
                <thead class="bookings-table-header">
                    <tr>
                        <th class="profile-image-header"></th>
                        <th>ID</th>
                        <th>Employee</th>
                        <th>Desk</th>
                        <th>Date</th>
                        <th>Booking Tile</th>
                        <th></th>
                    <tr>
                </thead>
                <tbody class="bookings-table-row">
                    <tr>
                        <td class="profile-image"></td>
                        <td>1</td>
                        <td>Dave Sadsad</td>
                        <td>Desk 23</td>
                        <td> May 26, 2022</td>
                        <td>Wala, uupo lang</td>
                        <td>
                            <a href="/admin-edit-bookings">
                                <button type="button" class="bookings-btn">Edit</button>
                            </a>
                            <button type="button" class="bookings-cncl-btn">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="profile-image"></td>
                        <td>2</td>
                        <td>Melrose Berocil Cortes</td>
                        <td>Desk 8</td>
                        <td> May 22, 2022</td>
                        <td>Wala, uupo lang</td>
                        <td>
                            <a href="/admin-edit-bookings">
                                <button type="button" class="bookings-btn">Edit</button>
                            </a>
                            <button type="button" class="bookings-cncl-btn">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="profile-image"></td>
                        <td>3</td>
                        <td>Heidi Guevarra</td>
                        <td>Desk 22</td>
                        <td> May 22, 2022</td>
                        <td>Wala, uupo lang</td>
                        <td>
                            <a href="/admin-edit-bookings">
                                <button type="button" class="bookings-btn">Edit</button>
                            </a>
                            <button type="button" class="bookings-cncl-btn">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="profile-image"></td>
                        <td>4</td>
                        <td>Daniel Emili Gaspar</td>
                        <td>Desk 12</td>
                        <td> May 18, 2022</td>
                        <td>Wala, uupo lang</td>
                        <td>
                            <a href="/admin-edit-bookings">
                                <button type="button" class="bookings-btn">Edit</button>
                            </a>
                            <button type="button" class="bookings-cncl-btn">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="profile-image"></td>
                        <td>5</td>
                        <td>Daniel John Saballa</td>
                        <td>Desk 16</td>
                        <td> May 28, 2022</td>
                        <td>Wala, uupo lang</td>
                        <td>
                            <a href="/admin-edit-bookings">
                                <button type="button" class="bookings-btn">Edit</button>
                            </a>
                            <button type="button" class="bookings-cncl-btn">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <footer>
            @include('components.footer')
        </footer>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
<script>
    jQuery(document).ready(function() {
        jQuery('#bookings').DataTable();
    });
</script>

</html>