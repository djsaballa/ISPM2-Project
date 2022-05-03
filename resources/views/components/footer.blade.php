<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
    <title>Footer</title>
</head>

<body>
    <div class="footer">

        <div class="left about-company">
            <div class="about-pic">
                <img src="{{ asset('images/silyaLogo.svg') }}" class="silya-logo">
            </div>
            <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis quam tristique convallis </p>
        </div>
        <div class="links">
            <h4 class="center footer-header">Contact</h4>
            <ul class="links-list">
                <li> <a href="#">New York, NY 10012, US</a></li>
                <li> <a href="#">info@example.com</a></li>
                <li> <a href="#">+01 234 567 89</a></li>
            </ul>
        </div>

        <div class="right location">
            <h4 class="center footer-header">Connect With Us</h4>
            <!-- <ul class="">
                    <li> <a href="#">New York, NY 10012, US</a></li>
                    <li> <a href="#">info@example.com</a></li>
                    <li> <a href="#">+01 234 567 89</a></li>
                </ul> -->
        </div>
        <!-- <div class="right location">
                <h4 class="footer-header">Connect With Us</h4>
                <p>22, Lorem ipsum dolor, consectetur adipiscing</p>
                <p class=""><i class="fa fa-phone mr-3"></i> (541) 754-3010</p>
                <p><i class="fa fa-envelope-o mr-3"></i> info@hsdf.com</p>
            </div> -->

    </div>
</body>

</html>