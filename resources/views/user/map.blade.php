<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ICONS -->
    <script src="https://kit.fontawesome.com/efe1f7e790.js" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('images/favicon-32x32.png') }}">

    <title>eMachine | Hotdesk Map</title>

    <style>
        table {
            border-spacing: 2px;
        }

        .clearfix:before,
        .clearfix:after {
            content: " ";
            /* 1 */
            display: table;
            /* 2 */
        }

        .clearfix:after {
            clear: both;
        }

        .clearfix {
            *zoom: 1;
        }

        a,
        a:hover {
            text-decoration: none;
        }

        .img-responsive {
            max-width: 100%;
            height: auto;
        }


        .elegant-calencar {
            /* margin-right: 100px; */
            /* float: right; */
            border-radius: 20px;
            width: 30em;
            height: 25em;
            border: 1px solid #c9c9c9;
            -webkit-box-shadow: 10 10 10 15px #c9c9c9;
            box-shadow: 0 0 5px #c9c9c9;
            text-align: center;
            margin: 4em auto;
            position: relative;
            /* margin-top: 20px; */
            margin-left: 50%;
            background-color: white;
            top: 0;
        }

        #header {
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            font-family: "Red Hat Display";
            height: 10em;
            background-color: #226acc;
            margin-bottom: 1em;
        }

        .pre-button,
        .next-button {
            margin-top: 2em;
            font-size: 2em;
            -webkit-transition: -webkit-transform 0.5s;
            transition: transform 0.5s;
            cursor: pointer;
            width: 1.5em;
            height: 1em;
            line-height: 1em;
            color: #e66b6b;
            border-radius: 50%;
        }

        .pre-button:hover,
        .next-button:hover {
            -webkit-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            transform: rotate(360deg);
        }

        .pre-button:active,
        .next-button:active {
            -webkit-transform: scale(0.7);
            -ms-transform: scale(0.7);
            transform: scale(0.7);
        }

        .pre-button {
            color: #fff;
            float: left;
            margin-left: 0.5em;
            /* background-color: #e66b6b; */
        }

        .next-button {
            color: #fff;
            float: right;
            margin-right: 0.5em;
            /* background-color: #e66b6b; */
        }

        .head-info {
            margin-top: -20px;
            /* background-color: #c9c9c9; */
            float: left;
            width: 22em;
        }

        .head-day {
            font-weight: bold;
            margin-top: 40px;
            font-size: 5em;
            line-height: 1;
            color: #fff;
        }

        .head-month {
            margin-top: 1px;
            font-size: 2em;
            line-height: 1;
            color: #fff;
        }

        #calendar {
            height: 65%;
            width: 65%;
            margin: 0 auto;
        }

        #calendar tr {
            height: 1.5em;
            line-height: 2em;
        }

        thead tr {
            color: #226acc;
            font-weight: 700;
            text-transform: uppercase;
        }

        tbody tr {

            color: #252a25;

        }

        tbody td {
            height: 14%;
            width: 14%;
            border-radius: 50%;
            cursor: pointer;
            -webkit-transition: all 0.2s ease-in;
            transition: all 0.2s ease-in;


        }

        tbody td:hover,
        .selected {
            border-radius: 50%;
            color: #fff;
            background-color: #226acc;
            border: none;

        }

        tbody td:active {

            -webkit-transform: scale(0.7);
            -ms-transform: scale(0.7);
            transform: scale(0.7);
        }

        #today {
            height: 10px;
            width: 10px;
            background-color: #226acc;
            color: #fff;
            font-family: "Red Hat Display";
            border-radius: 100%;
        }

        #disabled {
            cursor: default;
        }

        #disabled:hover {
            background: #fff;
        }

        #reset {
            display: block;
            position: absolute;
            right: 0.5em;
            z-index: 999;
            color: #fff;
            font-family: "Red Hat Display";
            font-size: 10px;
            cursor: pointer;
            padding: 0 0.5em;
            border: 0.1em solid #fff;
            border-radius: 4px;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        #reset:hover {
            color: #9ec1f7;
            border-color: #9ec1f7;
        }

        #reset:active {
            -webkit-transform: scale(0.8);
            -ms-transform: scale(0.8);
            transform: scale(0.8);
        }

        .admin-bg {
            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        th {
            font-family: "Red Hat Display";
        }

        td {

            font-family: "Red Hat Display";
        }
    </style>

</head>

<body>
    <div>
        <sideNav>
            @include('components.sidenavUser')
        </sideNav>

        <h1 class="map-header">HOTDESK MAP</h1>
        <div class="map-option">


            <img class="map" src="{{asset('images/Map.svg')}}">
        </div>

        <form class="map-booking-container" method="POST" action="{{ route('user_make_booking') }}">
            @csrf
            <h1 class="map-booking-header">NEW BOOKING</h1>

            <input type="hidden" id="userId" name="userId" value="{{ $user_info->id }}">

            <label class="form-title" for="fname">Date</label>
            <br>
            <input class="form-title-input" type="date" id="date" name="date" value="{{ old('date') }}">
            <p class="error-map text-md-center" style="color: red;">{{ Session::get('notAvailable') }}</p>
            <p class="error-map text-md-center" style="color: red;">@error('date'){{ $message }} @enderror</p>

            <br>

            <label class="form-title" for="desk">Desk</label>
            <br>
            <select class="desk-dropdown" id="desk" name="desk">
                <option selected="selected" disabled>Desk Number</option>
                @foreach($desks as $desk)
                <option value="{{ $desk->id }}">Desk {{ $desk->seat_number }}</option>
                @endforeach
                <p class="error text-md-center" style="color: red;">@error('date'){{ $message }} @enderror</p>
            </select>

            <br>

            <input id="map-btn" type="submit" value="Make Reservation">
        </form>


        <div class="elegant-calencar">

            <p id="reset">Silya Cares Calendar</p>
            <div id="header" class="clearfix">
                <div class="pre-button">
                    < </div>
                        <div class="head-info">
                            <div class="head-day"></div>
                            <div class="head-month"></div>
                        </div>
                        <div class="next-button"> > </div>
                </div>
                <table id="calendar">
                    <thead>
                        <tr>
                            <th>Sun</th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <footer>
                @include('components.footer')
            </footer>
        </div>
</body>

<script>
    // clock 
    window.onload = function() {
        clock();

        function clock() {
            var now = new Date();
            var TwentyFourHour = now.getHours();
            var hour = now.getHours();
            var min = now.getMinutes();
            var sec = now.getSeconds();
            var mid = 'pm';
            if (min < 10) {
                min = "0" + min;
            }
            if (hour > 12) {
                hour = hour - 12;
            }
            if (hour == 0) {
                hour = 12;
            }
            if (TwentyFourHour < 12) {
                mid = 'am';
            }
            document.getElementById('currentTime').innerHTML = hour + ':' + min + ':' + sec + ' ' + mid;
            setTimeout(clock, 1000);
        }
    }



    // calendar

    document.addEventListener('DOMContentLoaded', function() {
        var today = new Date(),
            year = today.getFullYear(),
            month = today.getMonth(),
            monthTag = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            day = today.getDate(),
            days = document.getElementsByTagName('td'),
            selectedDay,
            setDate,
            daysLen = days.length;
        // options should like '2014-01-01'
        function Calendar(selector, options) {
            this.options = options;
            this.draw();
        }

        Calendar.prototype.draw = function() {
            this.getCookie('selected_day');
            this.getOptions();
            this.drawDays();
            var that = this,
                reset = document.getElementById('reset'),
                pre = document.getElementsByClassName('pre-button'),
                next = document.getElementsByClassName('next-button');

            pre[0].addEventListener('click', function() {
                that.preMonth();
            });
            next[0].addEventListener('click', function() {
                that.nextMonth();
            });
            reset.addEventListener('click', function() {
                that.reset();
            });
            while (daysLen--) {
                days[daysLen].addEventListener('click', function() {
                    that.clickDay(this);
                });
            }
        };

        Calendar.prototype.drawHeader = function(e) {
            var headDay = document.getElementsByClassName('head-day'),
                headMonth = document.getElementsByClassName('head-month');

            e ? headDay[0].innerHTML = e : headDay[0].innerHTML = day;
            headMonth[0].innerHTML = monthTag[month] + " - " + year;
        };

        Calendar.prototype.drawDays = function() {
            var startDay = new Date(year, month, 1).getDay(),

                nDays = new Date(year, month + 1, 0).getDate(),

                n = startDay;

            for (var k = 0; k < 42; k++) {
                days[k].innerHTML = '';
                days[k].id = '';
                days[k].className = '';
            }

            for (var i = 1; i <= nDays; i++) {
                days[n].innerHTML = i;
                n++;
            }

            for (var j = 0; j < 42; j++) {
                if (days[j].innerHTML === "") {

                    days[j].id = "disabled";

                } else if (j === day + startDay - 1) {
                    if ((this.options && (month === setDate.getMonth()) && (year === setDate.getFullYear())) || (!this.options && (month === today.getMonth()) && (year === today.getFullYear()))) {
                        this.drawHeader(day);
                        days[j].id = "today";
                    }
                }
                if (selectedDay) {
                    if ((j === selectedDay.getDate() + startDay - 1) && (month === selectedDay.getMonth()) && (year === selectedDay.getFullYear())) {
                        days[j].className = "selected";
                        this.drawHeader(selectedDay.getDate());
                    }
                }
            }
        };

        Calendar.prototype.clickDay = function(o) {
            var selected = document.getElementsByClassName("selected"),
                len = selected.length;
            if (len !== 0) {
                selected[0].className = "";
            }
            o.className = "selected";
            selectedDay = new Date(year, month, o.innerHTML);
            this.drawHeader(o.innerHTML);
            this.setCookie('selected_day', 1);

        };

        Calendar.prototype.preMonth = function() {
            if (month < 1) {
                month = 11;
                year = year - 1;
            } else {
                month = month - 1;
            }
            this.drawHeader(1);
            this.drawDays();
        };

        Calendar.prototype.nextMonth = function() {
            if (month >= 11) {
                month = 0;
                year = year + 1;
            } else {
                month = month + 1;
            }
            this.drawHeader(1);
            this.drawDays();
        };

        Calendar.prototype.getOptions = function() {
            if (this.options) {
                var sets = this.options.split('-');
                setDate = new Date(sets[0], sets[1] - 1, sets[2]);
                day = setDate.getDate();
                year = setDate.getFullYear();
                month = setDate.getMonth();
            }
        };

        Calendar.prototype.reset = function() {
            month = today.getMonth();
            year = today.getFullYear();
            day = today.getDate();
            this.options = undefined;
            this.drawDays();
        };

        Calendar.prototype.setCookie = function(name, expiredays) {
            if (expiredays) {
                var date = new Date();
                date.setTime(date.getTime() + (expiredays * 24 * 60 * 60 * 1000));
                var expires = "; expires=" + date.toGMTString();
            } else {
                var expires = "";
            }
            document.cookie = name + "=" + selectedDay + expires + "; path=/";
        };

        Calendar.prototype.getCookie = function(name) {
            if (document.cookie.length) {
                var arrCookie = document.cookie.split(';'),
                    nameEQ = name + "=";
                for (var i = 0, cLen = arrCookie.length; i < cLen; i++) {
                    var c = arrCookie[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1, c.length);

                    }
                    if (c.indexOf(nameEQ) === 0) {
                        selectedDay = new Date(c.substring(nameEQ.length, c.length));
                    }
                }
            }
        };
        var calendar = new Calendar();
    }, false);
</script>

</html>