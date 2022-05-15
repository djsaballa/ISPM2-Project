<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="description" content="Random Quote Generator">
        <meta name="keywords" content="HTML,CSS,JavaScript, Quotes, API">
        <meta name="author" content="Neha Soni">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practice</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

<style>
@import url(https://fonts.googleapis.com/css?family=Oswald:300,400);

#currentTime {
  font-size: 5em;
  text-align: center;
  font-family: 'Oswald';
  font-weight: 200;
  color: #226acc;
  background-color:white;
  width: 400px;
  margin-top: 350px;
  margin-left: 600px;
}
</style>
</head>

<body>
<h1 id="currentTime"></h1>
</body>
<script>
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
    if(hour==0){ 
      hour=12;
    }
    if(TwentyFourHour < 12) {
       mid = 'am';
    }     
  document.getElementById('currentTime').innerHTML =     hour+':'+min+':'+sec +' '+mid ;
    setTimeout(clock, 1000);
    }
}

</script>

</html>
