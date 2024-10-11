<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="{{ url_for('static', filename='style.css') }}">
  <title>My Website</title>
</head>

<body style="margin: 0">
  <!-- Header -->
  <?php include('menu.php'); ?>
  <!-- End Header -->

  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Quality You Can Rely On<span></span></h1>
        <p>We pride ourselves on exceptional quality<span></span></p>
        <button class="cta" onclick="scrollDown()">Learn More</button>
        <button class="cta" onclick="scrollallDown()">Contact Us</button>
      </div>
    </div>
  </section>
  <script>
    function scrollDown() {
      window.scrollBy(0, window.innerHeight); // Scrolls down by the height of the window
    }

    function scrollallDown() {
      window.scrollBy(0, 4500); // Scrolls all the way down
    }
  </script>
 <!-- End Hero Section  -->

 <!-- Second Section  -->
  <section id="second">
  <div class="second container">
        <h1>About TKS <span></span></h1>
      </div>
      <h1 class="about-tks">What sets TKS corporation apart from other car mirror companies is our dedication to innovation and safety. 
          We are constantly researching and developing new technologies to make driving safer and more enjoyable.</h1>
 </section>
 <!-- End Second Section  -->

 <!-- Featured Section -->
 <section id="featured">
  <div class="featured container">
        <h1>Featured Products <span></span></h1>
      </div>
      <div class="card">
        <img src="photos/dg631.png" class="card-img" alt="">
        <div class="card-body">
          <p class="card-title">Mirrors</p>
          <p class="card-sub-title">___</p>
          <p class="card-info">We pride ourselves on<br/> exceptional quality</p>
          <a href="mirrors.php"><button class="learnmore">Learn More</button></a>
        </div>
      </div>
      <div class="card2">
        <img src="photos/autolamp transparent.png" class="card2-img" alt="">
        <div class="card2-body">
          <p class="card2-title">Lamps</p>
          <p class="card2-sub-title">___</p>
          <p class="card2-info">We pride ourselves on<br/> exceptional quality</p>
          <a href="lamps.php"><button class="learnmore">Learn More</button></a>
        </div>
      </div>
      <div class="card3">
        <img src="photos/52.png" class="card3-img" alt="">
        <div class="card3-body">
          <p class="card3-title">E-Mirrors</p>
          <p class="card3-sub-title">___</p>
          <p class="card3-info">We pride ourselves on<br/> exceptional quality</p>
          <a href="electronics.php"><button class="learnmore">Learn More</button></a>
        </div>
      </div>
 </section>
 <!-- End Featured Section -->

  <!-- Third Section  -->
  <section id="third">
  <div class="third container">

    </div>
 </section>
 <!-- End Third Section  -->

 <!-- Fourth Section -->
 <section id="fourth">
  <div class="fourth container">
  <img src="photos/events.png" class="events-img" alt="">

    </div>
 </section>
 <!-- End Fourth Section -->

 <!-- Fifth Section -->

 <section id="fifth">
  <div class="fifth container">
  <h1>Contact Us!</h1>

    </div>
    <!--<p>With our wide range of products, we have products<br />
     that fit your vehicle and offer customization </p>-->

     <form name="submit-to-google-sheet" id="contactForm">

     <div class="fullname">
        <input type="text" id="fname" name="firstname" placeholder="FULL NAME" autocomplete="off" required>
    </div>

    <div class="companyname">
        <input type="text" id="lname" name="lastname" placeholder="COMPANY NAME" autocomplete="off" required>
    </div>

    <div class="email">
        <input type="email" id="email" name="email" placeholder="EMAIL" autocomplete="off" required>
    </div>

    <div class="subject">
        <textarea id="subject" name="subject" placeholder="SEND US A MESSAGE!" style="height:200px" required></textarea>
    </div>

    <input type="submit" value="Submit">

     <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.732070842396!2d120.25365927518632!3d22.960092479217572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e73f99013585b%3A0x5989d16f94fd0a!2sNo.%2089%2C%20Renyi%206th%20St%2C%20Rende%20District%2C%20Tainan%20City%2C%20717!5e0!3m2!1sen!2stw!4v1689229191783!5m2!1sen!2stw" 
          width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="contact-info">
            <h1>Address</h1>
            <h2>No. 89, Renyi 6th St., Rende District., Tainan City 717018, Taiwan (R.O.C)</h2>
            <h1>Phone</h1>
            <h2>Tel: 886-6-2702-809</h2>
            <h2>FAX: 886-6-2702-833</h2>
      </div>
          
</form>
 </section>

 <!-- End Fifth Section -->

   <!-- Sheet Script -->
   <script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbzJ16rnmxPeYQw6SQ0KqkLKvOc9--cUAEdIVhSVLohMnaxW3nRTxJPzQIFRZd2wtQq_gw/exec'
  const form = document.forms['submit-to-google-sheet']

  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => console.log('Success!', response))
      .catch(error => console.error('Error!', error.message))
  })
  </script>
  <!-- End Sheet Script -->

    <!--redirect-->
  <script>
    fdocument.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent the default form submission

    const firstname = document.getElementById('fname').value;
    const lastname = document.getElementById('lname').value;
    const email = document.getElementById('email').value;
    const subject = document.getElementById('subject').value;

    const data = {
        firstname: firstname,
        lastname: lastname,
        email: email,
        subject: subject
    };

    fetch('/submit-form', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })
    .then(response => {
        if (response.ok) {
            // Redirect to thank you page after successful submission
            window.location.href = "/thankyou"; // Ensure it matches your Flask route
        } else {
            console.error('Error:', response.statusText);
        }
    })
    .catch(error => {
        console.error('Fetch error:', error);
    });
});
  </script>

  <script>
    document.addEventListener('touchmove', function (event) {
    if (event.scale !== 1) { event.preventDefault(); }
  }, { passive: false });
  </script>
  <!--End redirect-->

</body>

 <!-- Footer -->
 <?php include('footer.php'); ?>
    <!-- End Footer -->

</html>