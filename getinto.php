<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        
        body {
                     background-color: papayawhip;
                   }
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
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
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="1.jfif" style="width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="2.jfif" style="width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="fash5.jfif" style="width:100%">

</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

                
 <p><h1><b><i>get into the new world of fashion</i></b></h1></p>
 <p><b>Breaking into the fashion industry can seem daunting, especially since it's still a world where nepotism largely rules (unfortunately). But it's still possible to succeed even if your parents don't own a major fashion house or small country</b></p>
<p><b>The trick is to make your own connections. Make a list of the people and companies you admire within the industry. Do diligent research, make sure your resume is up to date, and start reaching out to a few key people for informational interviews (not to ask for jobs, just to learn more about their career!). Reach out via email or LinkedIn (or a social media platform if appropriate), tell them you admire their work, and politely ask for 15 minutes of their time over a quick coffee to discuss their own career path and how they got to where they are. Most people are happy to help (any excuse to talk about themselves is always good). You never know what you'll learn or what opportunities these quick coffees can lead to, the fashion industry is a very small place!</b></p>
<p><b><i>It takes a lot of time, patience, and applying to many, many jobs, but don't be afraid to put yourself out there. In the meantime, read the below books by fashion veterans who've done it themselves.</i></b></p>
</body>
<style>
    h1 {text-align: center;}
    p {text-align: center;}
    div {text-align: center;}
    </style>
    </head>
    <body> 
    <h1><i>We guess your..</i></h1>
    <ul>
        <li>Wardrobe, shopping and lifestyle-focused goals</li>
        <li>How to flatter your body shape</li>
        <li>Colours that best suit your palette and which ones to stay away from</li>
        <li>Styling exercises to create your signature style</li>
        <li>Where you are currently shopping for clothes + new stores/labels</li>
         </ul>
         <style>
            img {
              display: block;
              margin-left: auto;
              margin-right: auto;
            }
            </style>
            </head>
            <body>     
            <img src="fash4.jfif"  style="width:50%;">
            <h1><i>Wardrobe edit..</i></h1>
            <ul>
                <li>Explore new ways to create various looks to suit you personally</li>
                <li>Cull clothes, shoes and accessories that don’t work for your shape, style and lifestyle</li>
                <li>Learn how to accessorise your outfits in a stylish and practical way</li>
                <li>Discover missing pieces that will enhance your look</li>
                <li>Have your wardrobe organised</li>
                <li>Learn which pieces may need slight altering to better flatter your shape</li>
            </ul>
            <style>
                body, html {
                  height: 100%;
                  margin: 0;
                  font-family: Arial, Helvetica, sans-serif;
                }
                
                * {
                  box-sizing: border-box;
                }
                
                .bg-image {
                  /* The image used */
                  background-image: url("fash1.jfif");
                  
                  /* Add the blur effect */
                  filter: blur(8px);
                  -webkit-filter: blur(8px);
                  
                  /* Full height */
                  height: 100%; 
                  
                  /* Center and scale the image nicely */
                  background-position: center;
                  background-repeat: no-repeat;
                  background-size: cover;
                }
                
                /* Position text in the middle of the page/image */
                .bg-text {
                  background-color: rgb(0,0,0); /* Fallback color */
                  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
                  color: white;
                  font-weight: bold;
                  border: 3px solid #f1f1f1;
                  position: absolute;
                  top: 50%;
                  left: 50%;
                  transform: translate(-50%, -50%);
                  z-index: 2;
                  width: 80%;
                  padding: 20px;
                  text-align: center;
                }
                </style>
                </head>
                <body>
                
                <div class="bg-image"></div>
                
                <div class="bg-text">
                  
                  <h1 style="font-size:50px">my STYLE</h1>
                  <p>my FASHION</p>
                </div>
                
</html>










