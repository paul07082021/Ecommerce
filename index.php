<!doctype html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <head>
<body>
<section>
   
<header>
            <a href="index.php"><img src ="lo.png"  class="logo"></a>
            <div class="toggle" onclick ="toggleMenu();"></div>
            <div class="menu-bar">
            <ul class="navigation">
            <li class="search-icon"><input type="search" placeholder="Search"><a class ="icon" href=""><i class="fas fa-search"></i></a></li>
            <li class="menu-icon"><a class="icon-menu" href="Menu.php"><i class="fas fa-bars" aria-hidden="true"></i></a></li>
            <li class="user-icon"><a class="icon-user" href="index.php"><i class="fas fa-user" aria-hidden="true"></i></a></li> 
            </ul>
</div>
</div>
    </header>


    <div class="content">
        <div class="textbox">
            <h2>The taste you ever wanted<br>  <span>The Park Pizza</span></h2>
                
            <a href="">Order Now</a>
    </div>

    <div class="imgBox">
                <img src="image16.png"  id="slideimage">
    </div>
</section>

<script>
function one()
{
    document.getElementById("slideimage").src="image4.png";
}
function two()
{
    document.getElementById("slideimage").src="image5.png";
}

function three()
{
    document.getElementById("slideimage").src="image6.png";
}
function four()
{
    document.getElementById("slideimage").src="image7.png";
}
function five()
{
    document.getElementById("slideimage").src="image8.png";
}
function six()
{
    document.getElementById("slideimage").src="image9.png";
}
function seven()
{
    document.getElementById("slideimage").src="image11.png";
}
function eight()
{
    document.getElementById("slideimage").src="image12.png";
}
function nine()
{
    document.getElementById("slideimage").src="image13.png";
}
function ten()
{
    document.getElementById("slideimage").src="image14.png";
}
function eleven()
{
    document.getElementById("slideimage").src="image15.png";
}function twelve()
{
    document.getElementById("slideimage").src="image16.png";
}
setInterval(one,2000);
setInterval(two,4000);
setInterval(three,6000);
setInterval(four,8000);
setInterval(five,12000);
setInterval(six,14000);
setInterval(seven,16000);
setInterval(eight,18000);
setInterval(nine,22000);
setInterval(ten,24000);
setInterval(eleven,26000);
setInterval(twelve,28000);
</script>
<script type="text/javascript">
    function toggleMenu(){
    var menuToggle = document.querySelector('.toggle');
    var navigation = document.querySelector('.navigation');
    menuToggle.classList.toggle('active')
    navigation.classList.toggle('active')
}
</script>
