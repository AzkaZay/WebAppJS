<html>
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<style>

body{
  background-image: linear-gradient(rgba(20,4,10,0.4),rgba(20,4,10,0.4)),url("slider/shot2.jpg");
}
    
* {
  box-sizing: border-box;
}

body {
  font-family: Verdana, sans-serif;
}

.mySlides {
  display: none;
}

img {
  vertical-align: middle;
  height: 400px;
  width: 100px;
  filter: drop-shadow(0px 0px 0.75rem #fff);
}

.slideshow-container {
  max-width: 600px;
  position: relative;
  margin: auto;
}


.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 5px;
  width: 5px;
  margin: 0 2px;
  background-color: #fff;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration:2.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

.Hed{
  text-align: center;
  color: #fff;
  font-size: 40px;
  filter: drop-shadow(0px 0px 0.75rem #DB7093);
}
.p1{
  text-align: center;
  color: white;
  filter: drop-shadow(0px 0px 0.75rem #000000);
}
.btn.btn-primary.btn-lg{
  margin-left: 625px;
  margin-top: -20px; 
  transform: translateY(-20px);
}
</style>

    <body>

<script src="js/jquery.slides.min.js"></script>
<br></br>

<h2 class="Hed">Welcome To Bakin'Codes</h2>
<br>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="slider/shot2.jpg" style="width:100%">
  <div class="text">Bakin'Codes Store</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="slider/shot1.jpg" style="width:100%">
  <div class="text">Try Our Freshly Baked Buns</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="slider/shot3.jpg" style="width:100%">
  <div class="text">Viennoiseries</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="slider/shot4.jpg" style="width:100%">
  <div class="text">CoffeeCups Macarons</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="slider/shot6.jpg" style="width:100%">
  <div class="text">Petit Delices Gouteux</div>
</div>

</div>

<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
</div>

<br></br>

<p class="p1">Welcome to Our Website, if you would like to Add a new pickup time or add a new flavour, please navigate through the page using the button below</p>

<p class="p1">Please navigate through the page using the button below</p>
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

    </body>
    <br></br>
    <a href="orders.php" class="btn btn-primary btn-lg">Orders</a>
</html>