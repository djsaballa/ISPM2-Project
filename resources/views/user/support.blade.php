<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
</head>

<body>
    <sideNav>
        @include('components.sidenavAdmin')
    </sideNav>
    <h2 class="huy">Support</h2>
    <h3 class="support-second">How can we help you?</h3>
  
    <div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
      <i class="fa fa-search" aria-hidden="true"></i>
     </button>
   </div>
</div>
 <!-- </div> -->
 <footer>
            @include('components.footer')
        </footer>
</body>
</html>