<?php 
include ("header.php");
?>
    <h1 class="AMBARINDUMENTARIA">ÁMBAR INDUMENTARIA FEMENINA</h1>
    
    
     <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

 
<div class="swiper"> 
  <div class="swiper-wrapper">
    <div class="swiper-slide"><img src="./img/slide1.jpg" alt=""></div>
    <div class="swiper-slide"><img src="./img/slide 2.jpg" alt=""></div>
    <div class="swiper-slide"><img src="./img/slide3.jpg" alt=""></div>
    <div class="swiper-slide"><img src="./img/slide4.jpg" alt=""></div>
  </div>
  
  <div class="swiper-pagination"></div>

  <!-- navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- scrollbar -->
  <div class="swiper-scrollbar"></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <script>const swiper = new Swiper('.swiper', {
  
  direction: 'horizontal',
  loop: true,


  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
</script>


    
    <?php 
include ("footer.php")
?>