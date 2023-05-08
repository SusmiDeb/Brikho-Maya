<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 8</div>
  <img src="images/slider/1.jpg" style="width:100%">
  <div class="text">Beautiful Blooms</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 8</div>
  <img src="images/slider/2.jpg" style="width:100%">
  <div class="text">Decorative Pots Available</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 8</div>
  <img src="images/slider/3.jpg" style="width:100%">
  <div class="text">Blooming Balcony</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 8</div>
  <img src="images/slider/4.jpg" style="width:100%">
  <div class="text">Varieties of Rose</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 8</div>
  <img src="images/slider/5.jpg" style="width:100%">
  <div class="text">Available Lighting Gears</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 8</div>
  <img src="images/slider/6.jpg" style="width:100%">
  <div class="text">Gift from Nature</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 8</div>
  <img src="images/slider/7.jpg" style="width:100%">
  <div class="text">Seasonal Plants</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">8 / 8</div>
  <img src="images/slider/8.jpg" style="width:100%">
  <div class="text">Exotic Orchids</div>
</div>


</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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