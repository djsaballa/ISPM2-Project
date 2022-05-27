<!DOCTYPE html>
<html lang="en">

<head>
    <title>EMachine | Bookings</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('images/favicon-32x32.png') }}">

    <style>
        /* Set a style for all buttons */
        .modal button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .modal button:hover {
            opacity:1;
        }

        /* Float cancel and delete buttons and add an equal width */
        .modal .cancelbtn, .modal .deletebtn {
            float: left;
            width: 50%;
        }

        /* Add a color to the cancel button */
        .modal .cancelbtn {
            background-color: #ccc;
            color: black;
        }

        /* Add a color to the delete button */
        .modal .deletebtn {
            background-color: #f44336;
        }

        /* Add padding and center-align text to the container */
        .modal .container {
            padding: 16px;
            text-align: center;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: #474e5d;
            padding-top: 50px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* Style the horizontal ruler */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }
        
        /* The Modal Close Button (x) */
        .close {
            position: absolute;
            right: 35px;
            top: 15px;
            font-size: 40px;
            font-weight: bold;
            color: #f1f1f1;
        }

        .close:hover,
        .close:focus {
            color: #f44336;
            cursor: pointer;
        }

        /* Clear floats */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Change styles for cancel button and delete button on extra small screens */
        @media screen and (max-width: 300px) {
            .cancelbtn, .deletebtn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div>
        <sideNav>
            @include('components.sidenavAdmin')
        </sideNav>

        <h1 class="bookings-header">BOOKINGS</h1>

        @if (Session::has('succesful-edit'))
            <div role="alert">
                <p class="error" style="color: #226acc; text-align:center; background-color: #eaeefb">{!! Session::get('succesful-edit') !!}</p>
            </div>
        @endif
        @if (Session::has('unsuccesful-edit'))
            <div role="alert">
                <p class="error" style="color: #226acc; text-align:center; background-color: #eaeefb">{!! Session::get('unsuccesful-edit') !!}</p>
            </div>        
        @endif
        @if (Session::has('succesful-deletion'))
            <div role="alert">
                <p class="error" style="color: #226acc; text-align:center; background-color: #eaeefb">{!! Session::get('succesful-deletion') !!}</p>
            </div>        
        @endif
        @if (Session::has('unsuccesful-deletion'))
            <div role="alert">
                <p class="error" style="color: #226acc; text-align:center; background-color: #eaeefb">{!! Session::get('unsuccesful-deletion') !!}</p>
            </div>
        @endif

        <div class="bookings-table-container">
            <table class="bookings-table" id="bookings">
                <thead class="bookings-table-header">
                    <tr>
                        <th class="profile-image-header"></th>
                        <th>Employee</th>
                        <th>Desk</th>
                        <th>Date</th>
                        <th></th>
                    <tr>
                </thead>
                <tbody class="bookings-table-row">
                    @foreach($bookings as $booking)
                    <tr>
                        <td class="profile-image"></td>
                        <td>{{ $booking->getUserFullName($booking->user_id) }}</td>
                        <td>Desk {{ $booking->getSeatNumber($booking->desk_id) }}</td>
                        <td>{{ $booking->date }}</td>
                        <td>
                            <a href="{{ route('admin_edit_bookings', $booking->id) }}">
                                <button type="button" class="bookings-btn">Edit</button>
                            </a>
                            <a onClick="document.getElementById('deleteModal').style.display='block'">
                                <button type="button" class="bookings-cncl-btn">Delete</button>
                            </a>
                            <div id="deleteModal" class="modal">
                                <span onClick="document.getElementById('deleteModal').style.display='none'" class="close" title="Close Modal">×</span>
                                <form class="modal-content" method="POST" action="{{ route('admin_delete_bookings', $booking->id) }}">
                                    @csrf
                                    <div class="container">
                                    <h1>Delete Booking</h1>
                                    <p>Are you sure you want to delete this booking?</p>
                                    <div class="clearfix">
                                        <button type="button" onClick="document.getElementById('deleteModal').style.display='none'" class="cancelbtn">Cancel</button>
                                        <button type="submit" class="deletebtn">Delete</button>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
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
<script>
// Get the modal
var modal = document.getElementById('deleteModal');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</html>