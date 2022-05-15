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
.container
{
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.6);
    border-radius: 15px;
    width: 300px;
    height: 200px;
    background-color: rgba(255, 255, 255, 0.3);
    top: 100px;
    left: 1000px;
    z-index: 10;
  

}
.fa-quote-left, .fa-quote-right {
    font-size: 15px;
    color: rgb(179, 0, 0);
}
.quote
{
    text-align: center;
    font-size: 20px;
    font-weight: bold;
}
.author 
{

    margin-top:10px;
    text-align: right;
    font-size: 15px;
    font-style: italic;
    font-family: cursive;
}
hr {
    margin: 10px 0;
    width: 10%;
    border: 1px solid black;
    background-color: black;
}

.container:hover
{
    box-shadow: 0 10px 10px rgb(230, 0, 0);
}
</style>
</head>

<body>
    <div class="container">
             <!-- Quote to be Displayed Here -->
            <h1>
            <i class="fas fa-quote-left"></i>
            <span class="quote" id="quote"></span>
            <i class="fas fa-quote-right"></i>
            </h1>
            <!-- Author to be Displayed Here -->
            <p class="author" id="author"></p>

            <hr/>
    </div>   

</body>
<script>
const text=document.getElementById("quote");
const author=document.getElementById("author");

const getNewQuote = async () =>
{
   
    var url="https://type.fit/api/quotes";    

    // fetch the data from api
    const response=await fetch(url);
    console.log(typeof response);
    //convert response to json and store it in quotes array
    const allQuotes = await response.json();

    // Generates a random number between 0 and the length of the quotes array
    const indx = Math.floor(Math.random()*allQuotes.length);

    //Store the quote present at the randomly generated index
    const quote=allQuotes[indx].text;

    //Store the author of the respective quote
    const auth=allQuotes[indx].author;

    if(auth==null)
    {
        author = "Anonymous";
    }

    //function to dynamically display the quote and the author
    text.innerHTML=quote;
    author.innerHTML="~ "+auth;

  
}
getNewQuote();
</script>

</html>