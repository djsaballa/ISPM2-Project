<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ICONS -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>


    <title>Add Bookings</title>
</head>

<body>

    <div class="container">
        <sideNav>
            @include('components.sidenavUser')
        </sideNav>

        <h1 class="bookings-header">ADD BOOKINGS</h1>

        <div class="add-bookings-container">
            <form action="action_page.php">

                <label for="fname">Date</label>
                <input type="date" id="fname" name="date">

                <label for="lname">Time</label>
                <input type="time" id="lname" name="lastname" placeholder="Your last name..">

                <label for="desk">Desk</label>
                <select id="desk" name="desk">
                    <option value="australia">Desk 01</option>
                    <option value="canada">Desk 02</option>
                    <option value="usa">Desk 03</option>
                    <option value="usa">Desk 04</option>
                    <option value="usa">Desk 05</option>
                    <option value="usa">Desk 06</option>
                    <option value="usa">Desk 07</option>
                    <option value="usa">Desk 08</option>
                    <option value="usa">Desk 09</option>
                    <option value="usa">Desk 10</option>
                </select>

                <label for="subject">Booking Title</label>
                <textarea id="subject" name="subject" placeholder="An optional booking summary" style="height:200px"></textarea>

                <input type="submit" value="Submit">

            </form>
        </div>


    </div>

</body>

</html>