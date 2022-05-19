<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <title>List of Employees</title>
</head>

<body>
    <sideNav>
        @include('components.sidenavAdmin')
    </sideNav>

    <h1 class="employee-header">EMPLOYEES</h1>

    @if (Session::has('succesful-change'))
            <div role="alert">
                <p class="error" style="color: #226acc; text-align:center; background-color: #eaeefb">{!! Session::get('succesful-change') !!}</p>
            </div>
    @endif
    @if (Session::has('unsuccesful-change'))
            <div role="alert">
                <p class="error" style="color: #226acc; text-align:center; background-color: #eaeefb">{!! Session::get('unsuccesful-change') !!}</p>
            </div>
    @endif

    <table class="employee-table" id="employees">
        <thead class="employee-table-header">
            <tr>
                <th class="profile-image-header"></th>
                <th>Name</th>
                <th>Department</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone Number</th>
                <th></th>
            <tr>
        </thead>
        <tbody class="employee-table-row">
            @foreach($employees as $employee)
            <tr>
                <td class="profile-image"></td>
                <td>{{ $employee->getFullName($employee->id) }}</td>
                <td>{{ $employee->department }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->password }}</td>
                <td>{{ $employee->phone_number }}</td>
                <td>
                    <a href="{{ route('admin_change_passwords', $employee->id) }}">
                        <button class="btn-chngpass">Change Password</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- </div> -->
    <footer>
        @include('components.footer')
    </footer>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
<script>
    jQuery(document).ready(function() {
        jQuery('#employees').DataTable();
    });
</script>
< /html>