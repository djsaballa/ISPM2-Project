<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ICONS -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>


    <title>eMachine | My Bookings</title>
</head>

<body>

    <div class="container">
        <sideNav>
            @include('components.sidenavUser')
        </sideNav>

        <h1 class="bookings-header">MY BOOKINGS</h1>

        <div class="bookings-table-container">
            <table class="bookings-table" id="bookings">
                <thead class="bookings-table-header">
                    <tr>
                        <th class="profile-image-header">Date</th>
                        <th class="profile-image-header">Desk Number</th>
                        <th class="profile-image-header "> <a href="/user-map"> <button class="bookings-btn" type="button">Add</button></a>
                        </th>
                    </tr>
                </thead>
                <tbody class="bookings-table-row">
                    <tr>
                        <!-- <td class="profile-image"></td> -->
                        <td>April 25, 2022</td>
                        <td>Desk 109</td>
                        <td><button type="button" class="bookings-cncl-btn">Cancel</button></td>
                    </tr>
                    <tr>
                        <!-- <td class="profile-image"></td> -->
                        <td>May 12, 2022</td>
                        <td>Desk 19</td>
                        <td><button type="button" class="bookings-cncl-btn">Cancel</button></td>
                    </tr>
                    <tr>
                        <!-- <td class="profile-image"></td> -->
                        <td>May 22, 2022</td>
                        <td>Desk 09</td>
                        <td><button type="button" class="bookings-cncl-btn">Cancel</button></td>
                    </tr>
                    <tr>
                        <!-- <td class="profile-image"></td> -->
                        <td>May 25, 2022</td>
                        <td>Desk 112</td>
                        <td><button type="button" class="bookings-cncl-btn">Cancel</button></td>
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