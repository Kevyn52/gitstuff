  <!-- Header -->
  <?php include('menu.php'); ?>
  <!-- End Header -->

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

  <!-- Products Section -->
  <section id="products">
      <div class="col-left">

      <div class="product-img-container">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="photos/lamp parts.webp"></div>
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        </div>

      </div>
      <div class="col-right">
        <h1 class="section-prodcut-title"> <span>L</span>AMPS</h1>
        <p>We take pride in crafting car components that redefine excellence, 
          <br/>and our car lamps stand as a shining example of our commitment to innovation and quality. 
          <br/>With a relentless pursuit of perfection, we've designed our car lamps to not only illuminate 
          <br/>the road ahead but also elevate the driving experience to new heights. Contact us to get a quote.</p>
        <a href="lampsdetail.php" class="cta"> MORE DETAILS </a>
        <!--<a href="#" class="cta">Download PDF</a>-->
      </div>
    </div>
  </section>
  <!-- End Products Section -->
 
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