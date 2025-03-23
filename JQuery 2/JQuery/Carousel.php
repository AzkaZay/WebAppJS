<!DOCTYPE html>
<html>
<head>

   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <style>

      body, html {
         height: 100%;
         margin: 0;
      }

      .bg {
         background-image: linear-gradient(rgba(20,4,30,0.5),rgba(20,4,30,0.5)),url("ajax/bg1.jpg");
         height: 100%; 
         background-position: center;
         background-repeat: no-repeat;
         background-size: cover;
      }
      .slider-container {
         width: 100%;
         height: 1200px;
         overflow: hidden;
         position: center;
      }

      .des{
         width: 900px; 
         height: 650px;
         margin: 500px;
         border: none;
         filter: drop-shadow(0px 0px 0.75rem #000000);
         border-radius: 5px;


      }

      .slide {
         width: 100%;
         height: 500px;
         position: absolute;
         bottom: 800px;
         left: 0;
         opacity: 0;
         transition: opacity 0.5s ease-in-out;
      }
      .active {
         opacity: 1;
      }
      .prev,
      .next {
         position: absolute;
         top: 0px;
         transform: translateY(-50%);
         font-size: 30px;
         font-weight: bold;
         color: white;
         background-color: rgba(0, 0, 0, 0.5);
         padding: 0px 10px;
         border: 0.5px solid #fff;
         cursor: pointer;
         border-radius: 5px;
      }
      .prev:hover,
      .next:hover {
         background-color: rgba(0, 0, 0, 0.8);
      }
      .prev {
         left: -50px;
         margin:500px;
         top: -35px;
      }
      .next {
         right: -45px;
         margin: 500px;
         top: -35px;
      }
      .dots {
         position: absolute;
         bottom: 20px;
         left: 50%;
         transform: translateX(-50%);
         display: flex;
      }
      .dot {
         width: 15px;
         height: 15px;
         border-radius: 50%;
         background-color: rgba(255, 255, 255, 0.5);
         margin: 100px 10px;
         cursor: pointer;
      }
      .active-dot {
         background-color: white;
      }



   </style>

</head>
<body>

   <div class ="bg"></div>
   <div class="slider-container">

      <div class="slide active">
         <img src="pictures/des5.jpg" alt="Slide 5" class = "des">
      </div>
      <div class="slide">
         <img src="pictures/des2.jpg" alt="Slide 2" class = "des">
      </div>
      <div class="slide">
         <img src="pictures/des3.jpg" alt="Slide 3" class = "des">
      </div>
      <div class="slide">
         <img src="pictures/des4.jpg" alt="Slide 4" class = "des">
      </div>
      <div class="slide">
      <img src="pictures/des1.jpg" alt="Slide 1" class = "des">
      </div>
      <div class="slide">
         <img src="pictures/des6.jpg" alt="Slide 6" class = "des">
      </div>
      <div class="slide">
         <img src="pictures/des7.jpg" alt="Slide 7" class = "des">
      </div>
      <div class="slide">
         <img src="pictures/des8.jpg" alt="Slide 8" class = "des">
      </div>
      <div class="slide">
         <img src="pictures/des9.jpg" alt="Slide 9" class = "des">
      </div>
      <div class="slide">
         <img src="pictures/des10.jpg" alt="Slide 10" class = "des">
      </div>
      
      <button class="prev">❮</button>
      <button class="next">❯</button>

      <div class="dots">
         <div class="dot active-dot"></div>
         <div class="dot"></div>
         <div class="dot"></div>
         <div class="dot"></div>
         <div class="dot"></div>
         <div class="dot"></div>
         <div class="dot"></div>
         <div class="dot"></div>
         <div class="dot"></div>
         <div class="dot"></div>
      </div>
   </div>

   <script>
      $(document).ready(function () {
         let slideCount = $('.slide').length;
         let currentIndex = 0;
         $('.slide').hide();
         $('.active').show();
         $('.prev').on('click', function () {
            currentIndex--;
            if (currentIndex < 0) {
               currentIndex = slideCount - 1;
            }
            showSlide(currentIndex);
         });
         $('.next').on('click', function () {
            currentIndex++;
            if (currentIndex >= slideCount) {
               currentIndex = 0;
            }
            showSlide(currentIndex);
         });
         $('.dot').on('click', function () {
            currentIndex = $(this).index();
            showSlide(currentIndex);
         });
         function showSlide(index) {
            $('.slide').hide().removeClass('active');
            $('.dot').removeClass('active-dot');
            $('.slide').eq(index).show().addClass('active');
            $('.dot').eq(index).addClass('active-dot');
         }
         showSlide(currentIndex);
      });
   </script>
</body>
</html>