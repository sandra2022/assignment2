<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;}
        
        .bg-img {
          /* The image used */
          background-image: url("data:image/jpeg;base64,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");
        
          min-height: 380px;
        
          /* Center and scale the image nicely */
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          
          /* Needed to position the navbar */
          position: relative;
        }
        
        /* Position the navbar container inside the image */
        .container {
          position: absolute;
          margin: 20px;
          width: auto;
        }
        
        /* The navbar */
        .topnav {
          overflow: hidden;
          background-color: grey;
        }
        
        /* Navbar links */
        .topnav a {
          float: left;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
        }
        
        .topnav a:hover {
          background-color: #ddd;
          color: plum;
        }
        </style>
        </head>
        <body>
        
        <h2>STYLE refresh..</h2>
        <div class="bg-img">
          <div class="container">
            <div class="topnav">
              <a href="home.php">Home</a>
              <a href="getinto.php">Get into</a>
              <a href="contactus.php">Contact us</a>
              <a href="aboutus.php">About us</a>
            </div>
          </div>
        </div>
        <style>
            h1 {text-align: center;}
            p {text-align: center;}
            div {text-align: center;}
            </style>
            </head>
            <body>
            
            <h1><b>so how does wardrobe refresh works?</b></h1>
            <p><i>In your personal Wardrobe Refresh, I will help you organise and style your clothes to give you a whole new perspective so that you have more clarity around your style and know exactly what to add to your wardrobe.</i></p>
           
     <div>Imagine waking up every morning and opening your wardrobe to see it immaculately presented so you can quickly and easily get ready saving you time and stress… because you already know they look amazing and make you feel confident</div>
     <style>
        body {
          font-family: Arial;
          margin: 0;
        }
        
        * {
          box-sizing: border-box;
        }
        
        img {
          vertical-align: middle;
        }
        
        /* Position the image container (needed to position the left and right arrows) */
        .container {
          position: relative;
        }
        
        /* Hide the images by default */
        .mySlides {
          display: none;
        }
        
        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
          cursor: pointer;
        }
        
        /* Next & previous buttons */
        .prev,
        .next {
          cursor: pointer;
          position: absolute;
          top: 40%;
          width: auto;
          padding: 16px;
          margin-top: -50px;
          color: white;
          font-weight: bold;
          font-size: 20px;
          border-radius: 0 3px 3px 0;
          user-select: none;
          -webkit-user-select: none;
        }
        
        /* Position the "next button" to the right */
        .next {
          right: 0;
          border-radius: 3px 0 0 3px;
        }
        
        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
          background-color: rgba(0, 0, 0, 0.8);
        }
        
        /* Number text (1/3 etc) */
        .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
        }
        
        /* Container for image text */
        .caption-container {
          text-align: center;
          background-color: #222;
          padding: 2px 16px;
          color: white;
        }
        
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        
        /* Six columns side by side */
        .column {
          float: left;
          width: 16.66%;
        }
        
        /* Add a transparency effect for thumnbail images */
        .demo {
          opacity: 0.6;
        }
        
        .active,
        .demo:hover {
          opacity: 1;
        }
        </style>
        <body>
        
        <h2 style="text-align:center">Book Your Session</h2>
        
        <div class="container">
          <div class="mySlides">
            <div class="numbertext">1 / 6</div>
            <img src="log.jfif" style="width:100%">
          </div>
        
          <div class="mySlides">
            <div class="numbertext">2 / 6</div>
            <img src="fash1.jfif" style="width:100%">
          </div>
        
          <div class="mySlides">
            <div class="numbertext">3 / 6</div>
            <img src="fash2.jfif" style="width:100%">
          </div>
            
          <div class="mySlides">
            <div class="numbertext">4 / 6</div>
            <img src="fash3.jfif" style="width:100%">
          </div>
        
          <div class="mySlides">
            <div class="numbertext">5 / 6</div>
            <img src="fash4.jfif" style="width:100%">
          </div>
            
          <div class="mySlides">
            <div class="numbertext">6 / 6</div>
            <img src="fash5.jfif" style="width:100%">
          </div>
            
          <a class="prev" onclick="plusSlides(-1)">❮</a>
          <a class="next" onclick="plusSlides(1)">❯</a>
        
          <div class="caption-container">
            <p id="caption"></p>
          </div>
        
          <div class="row">
            <div class="column">
              <img class="demo cursor" src="log.jfif" style="width:100%" onclick="currentSlide(1)>
            </div>
            <div class="column">
              <img class="demo cursor" src="fash1.jfif" style="width:100%" onclick="currentSlide(2)">
            </div>
            <div class="column">
              <img class="demo cursor" src="fash2.jfif" style="width:100%" onclick="currentSlide(3)">
            </div>
            <div class="column">
              <img class="demo cursor" src="fash3.jfif" style="width:100%" onclick="currentSlide(4)">
            </div>
            <div class="column">
              <img class="demo cursor" src="fash4.jfif" style="width:100%" onclick="currentSlide(5)">
            </div>    
            <div class="column">
              <img class="demo cursor" src="fash5.jfif" style="width:100%" onclick="currentSlide(6)">
            </div>
          </div>
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
          var dots = document.getElementsByClassName("demo");
          var captionText = document.getElementById("caption");
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
          captionText.innerHTML = dots[slideIndex-1].alt;
        }
        </script>
            

    </body>
</html>