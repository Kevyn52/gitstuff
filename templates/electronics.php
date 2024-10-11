  <!-- Header -->
  <?php include('menu.php'); ?>
  <!-- End Header -->

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

  <body>

  <!-- Products Section -->
  <section id="products">
      <div class="col-left">

      <div class="product-img-container">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="photos/front.webp"></div>
            <div class="swiper-slide"><img src="photos/back.webp"></div>
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        </div>

      </div>
      <div class="col-right">
        <h1 class="section-prodcut-title"> <span>E</span>LECTRONICS</h1>
        <p>We're in the business of shaping the future of automotive technology. 
          <br/>Our dedication to innovation and quality shines brightly through our electronic components, 
          <br/>and our prowess in this field is exemplified by our exceptional electronic solutions for vehicles. 
          <br/>Contact us to get a quote.</p> 
          <a href="electronicsdetail.php" class="cta"> MORE DETAILS </a>
        <!--<a href="#" class="cta">Download PDF</a>-->
      </div>
    </div>
  </section>
  <!-- End Products Section -->

  </body>

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
      const swiper = new Swiper('.swiper', {
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  </script>

   <!-- Footer -->
   <?php include('footer.php'); ?>
   <!-- End Footer -->