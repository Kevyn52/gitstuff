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
            <div class="swiper-slide"><img src="photos/HD386.webp"></div>
            <div class="swiper-slide"><img src="photos/bg mirror.webp"></div>
            <div class="swiper-slide"><img src="photos/Mirror Edits bg.webp"></div>
            <div class="swiper-slide"><img src="photos/DSC-0924 socket with background.webp"></div>
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        </div>
        
      </div>
      <div class="col-right">
        <h1 class="section-prodcut-title"> <span>M</span>IRRORS</h1>
        <p>The Automotive Mirros manufactured by TKS are not only of the highest quality, 
          <br/>but are also available in a variety of options to ensure you find exactly what
          you’re looking for. <br/>With top-of-the-line materials, cutting-edge production technologies 
          and a highly qualified team, <br/>we guarantee complete satisfaction. 
          Contact us to get a quote.</p> 
        <a href="mirrorsdetail.php" class="cta"> MORE DETAILS </a>
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