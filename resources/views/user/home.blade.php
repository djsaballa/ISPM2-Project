<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->

    <script src="https://kit.fontawesome.com/0000000000.js" crossorigin="anonymous"></script>

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('images/favicon-32x32.png') }}">

    <title>eMachine | Home</title>
</head>

<body>


    <!-- <div class="home-div"> -->
    <div class="container">

        <sideNav>
            @include('components.sidenavUser')
        </sideNav>

        <div class="main-content">
            <h1 class="home-header">
                {!! 'You don’t have <br>
                any bookings yet' !!}
            </h1>

            <!-- <h1 class="home-header">
                    "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."
                </h1> -->


            <div class="booking-header">
                YOUR BOOKINGS
            </div>

            <div class="home-bookings">
                <div class="home-bookings-circle">
                    <h3 class="home-booking-desk">Desk</h3>
                    <p class="home-desk-num">106</p>
                    <h3 class="home-booking-mon">APR</h3>
                    <p class="home-booking-date">07</p>
                    <img src="{{ asset('images/Desk.svg') }}" class="circle-desk">
                </div>
                <div class="circle-div"></div>
            </div>

            <div class="upcomingEvents-div">
                <h1 class="upcomingHeader">
                    Upcoming Events
                </h1>
                <div class="event-col">
                    <div class="event-calendar">
                        <!-- <img src="{{ asset('images/calendar.png') }}" class="calendar" alt="calen"> -->
                        <img src="{{ asset('images/calendar.svg') }}" class="calendar">
                        <div class="calend-mon">APR</div>
                        <div class="calend-date">31</div>
                    </div>

                    <div class="event-info">
                        <h3 class="event-title">
                            eMachine Foundation Day
                        </h3>
                        <p class="event-time">9:00 a.m. - 5:00 p.m.</p>
                        <p class="event-desc">"Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit,
                            sed do eiusmod tempor”
                        </p>
                    </div>
                </div>
            </div>
            <div class="home-calendar">

            </div>
        </div>
        <!-- </div> -->
        <footer>
            @include('components.footer')
        </footer>
    </div>

</body>

</html>