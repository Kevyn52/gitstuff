  <!-- Header -->
  <?php include('menu.php'); ?>
  <!-- End Header -->

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

<!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="about-top">
        <h1 class="section-title"><span>A</span>bout</h1>
        <h1 class="journey">Who we are & Our journey so far</h1>
      </div>

<head>
    <style>

/* --- Start progress bar --- */

.paragraph {
	color: white;
}

.journey {
	color: white;
}

.process-wrapper {
	margin:auto;
	max-width:1500px;
}

#progress-bar-container {
	position:relative;
	width:90%;
	margin:auto;
	height:100px;
	margin-top:65px;
	z-index: 0;
}

#progress-bar-container ul {
	padding:0;
	margin:0;
	padding-top:15px;
	z-index:9999;
	position:absolute;
	width:100%;
	margin-top:-40px
}

#progress-bar-container li:before {
	content:" ";
	display:block;
	margin:auto;
	width:30px;
	height:30px;
	border-radius:50%;
	border:solid 2px #aaa;
	transition:all ease 0.3s;
}

#progress-bar-container li.active:before, #progress-bar-container li:hover:before {
	border:solid 2px #fff;	 
	background: linear-gradient(to right, rgb(0, 213, 255) 0%,#fff 100%); 
}

#progress-bar-container li {
	list-style:none;
	float:left;
	left:10%;
	width:10%;
	text-align:center;
	color:#aaa;
	text-transform:uppercase;
	font-size:11px;
	cursor:pointer;
	font-weight:700;
	transition:all ease 0.2s;
	vertical-align:bottom;
	height:60px;
	position:relative;
}

#progress-bar-container li .step-inner {
	position:absolute;
	width:100%;
	bottom:0;
    font-size: 14px;
}

#progress-bar-container li.active, #progress-bar-container li:hover {
	color:#444;
}

#progress-bar-container li:after {
	content:" ";
	display:block;
	width:6px;
	height:6px;
	background:#777;
	margin:auto;
	border:solid 7px #fff;
	border-radius:50%;
	margin-top:40px;
	box-shadow:0 2px 13px -1px rgba(0,0,0,0.3);
	transition:all ease 0.2s;
}

#progress-bar-container li:hover:after {
	background:#555;
}

#progress-bar-container li.active:after {
	background:#207893;
}

#progress-bar-container #line {
	width:70%;
	margin:auto;
	background: #eee;
	height:6px;
	position:absolute;
	left:15%;
	top:48px;
	z-index:1;
	border-radius:50px;
	transition:all ease 0.9s;
}

#progress-bar-container #line-progress {
	content:" ";
	width:3%;
	height:100%;
	background: #207893;	 
	background: linear-gradient(to right, #207893 0%,#2ea3b7 100%); 
	position:absolute;
	z-index:2;
	border-radius:50px;
	transition:all ease 0.9s;
}

#progress-content-section {
	width:90%;
	margin: auto;
	background: #f3f3f3;
	border-radius: 4px;
}

#progress-content-section .section-content {
	padding:30px 40px;
	text-align:center;
}

#progress-content-section .section-content h2 {
	font-size:17px;
	text-transform:uppercase;
	color:#333;
	letter-spacing:1px;
}

#progress-content-section .section-content p {
	font-size:16px;
	line-height:1.8em;
	color:#777;
}

#progress-content-section .section-content {
	display:none;
	animation: FadeInUp 700ms ease 1;
	animation-fill-mode:forwards;
	transform:translateY(15px);
	opacity:0;
}

#progress-content-section .section-content.active {
	display:block;
}

@keyframes FadeInUp {
	0% {
		transform:translateY(15px);
		opacity:0;
	}
	
	100% {
		transform:translateY(0px);
		opacity:1;
	}
}

    </style>
</head>
<body>
 <!--
<br> 
<div class="process-wrapper">
<div id="progress-bar-container">
	<ul>
		<li class="step step01 active"><div class="step-inner">2000</div></li>
		<li class="step step02"><div class="step-inner">2015</div></li>
		<li class="step step03"><div class="step-inner">2016</div></li>
		<li class="step step04"><div class="step-inner">2017</div></li>
		<li class="step step05"><div class="step-inner">2018</div></li>
		<li class="step step06"><div class="step-inner">2019</div></li>
		<li class="step step07"><div class="step-inner">2020</div></li>
		<li class="step step08"><div class="step-inner">2021</div></li>
	</ul>
	
	<div id="line">
		<div id="line-progress"></div>
	</div>
</div>

<div id="progress-content-section">
<div class="section-content one active">
		<h2>TKS IS FOUNDED</h2>
		<p>Welcome to our online home, where automotive excellence meets unparalleled service. TKS, founded in the year 2000, stands as a testament to a commitment forged in quality, precision, and innovation within the automotive industry.</p>
	</div>
	
	<div class="section-content two">
		<h2>ISO & IATF CERTIFICATES</h2>
		<p>TKS achieved a significant milestone by earning both ISO and IATF certifications, a testament to our unwavering commitment to the highest standards of quality and excellence within the industry.</p>
	</div>
	
	<div class="section-content three">
		<h2>SAN FRANCISCO HQ OPENS</h2>
		<p>In 2016, we marked a pivotal moment in our journey with the opening of our San Francisco headquarters, solidifying our presence on the West Coast and fortifying our commitment to innovation and customer satisfaction.</p>
	</div>
	
	<div class="section-content four">
		<h2>FIRST PROTOTYPE IS TEST-DRIVEN</h2>
		<p>In a groundbreaking moment in 2017, we celebrated a major milestone as our first prototype emerged from the confines of our research and development facility and hit the open road for rigorous test-driving.</p>
	</div>
	
	<div class="section-content five">
		<h2>PARTNERSHIP WITH TRI-NEX & GENERAL TRANSPORT INITIATED</h2>
		<p>In 2018, we proudly initiated a strategic collaboration with industry leaders Tri-Nex and General Transport, marking a significant milestone in our commitment to delivering excellence in the automotive sector.</p>
	</div>

  <div class="section-content six">
		<h2>TESTING EXPANDS TO ARIZONA & NEW MEXICO</h2>
		<p>In 2019, we took a bold step forward by expanding our rigorous testing initiatives to the diverse landscapes of Arizona and New Mexico.</p>
	</div>

  <div class="section-content seven">
		<h2>PRODUCTION BEGINS!</h2>
		<p>In the pivotal year of 2020, we proudly embarked on the next phase of our journey as we initiated full-scale production of our cutting-edge car parts.</p>
	</div>

  <div class="section-content eight">
		<h2>FIRST 1,000 CARS SOLD</h2>
		<p>In the remarkable year of 2021, we proudly celebrate the sale of our first 1,000 cars, marking a significant achievement in our journey as a leading car part company.</p>
	</div>
</div>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 <script>
    
    $(".step").click( function() {
	$(this).addClass("active").prevAll().addClass("active");
	$(this).nextAll().removeClass("active");
});

$(".step01").click( function() {
	$("#line-progress").css("width", "0%");
	$(".one").addClass("active").siblings().removeClass("active");
});

$(".step02").click( function() {
	$("#line-progress").css("width", "14.3%");
	$(".two").addClass("active").siblings().removeClass("active");
});

$(".step03").click( function() {
	$("#line-progress").css("width", "28.6%");
	$(".three").addClass("active").siblings().removeClass("active");
});

$(".step04").click( function() {
	$("#line-progress").css("width", "42.9%");
	$(".four").addClass("active").siblings().removeClass("active");
});

$(".step05").click( function() {
	$("#line-progress").css("width", "57.1%");
	$(".five").addClass("active").siblings().removeClass("active");
});

$(".step06").click( function() {
	$("#line-progress").css("width", "71.4%");
	$(".six").addClass("active").siblings().removeClass("active");
});

$(".step07").click( function() {
	$("#line-progress").css("width", "85.7%");
	$(".seven").addClass("active").siblings().removeClass("active");
});

$(".step08").click( function() {
	$("#line-progress").css("width", "100%");
	$(".eight").addClass("active").siblings().removeClass("active");
});
 
    </script>
	<h1 class="ISO">ISO & IATF Certificates</h1>
	<h2 class="IATF"><span>Our ISO9001 and IATF16949 certifications serve as testaments to our unwavering dedication to quality, precision, and customer satisfaction. With our superior products and stringent quality management systems, we provide automotive mirrors and lamps that guarantee both safety and performance, meeting the demands of the modern automotive industry.
ISO 9001, an internationally recognized quality management standard, validates our dedication to providing products and services that consistently meet or exceed customer expectations. This certification emphasizes our robust quality management system, ensuring streamlined processes, continuous improvement, and customer satisfaction at the core of our operations.
In addition, our adherence to the rigorous requirements of IATF 16949 showcases our commitment to the automotive industry's highest standards. This certification specifically focuses on quality management for the automotive sector, emphasizing product safety, reliability, and regulatory compliance. With IATF 16949, we ensure that every mirror and lamp we manufacture undergoes meticulous testing and meets the strict specifications set forth by the industry.
</span></h2>
	<img src="photos/iso9001.webp" class="ISO-img" alt="">
	<img src="photos/IATF.webp" class="IATF-img" alt="">
<h1 class="ISO">Productions</h1>
<h2 class="IATF"><span>Our Factory is fully equipped with two assembly lines dedicated to the two main products we manufacture in-house. But what's even more impressive is the speed at which they can ramp up production to meet demand. When a new product launch is imminent, the factory can quickly adapt and increase its production capacity to meet the needs of customers around the world.
With the most skilled and diligent factory workers operating the professional hardware, we can ensure the productivity of high-quality products, meet or exceed production targets, and maintain a safe and clean working environment. Our factory is able to achieve these objectives as a point of pride for its owners, employees, and customers. 
</span></h2>
<img src="photos/Injector.jpg" class="injector-img" alt="">
<p class="description">(Shown in Image Above : Liquid Crystal Injector for Mirror Glasses)</p>
<img src="photos/3Dprinter.jpg" class="printer-img" alt="">
<p class="description">(Shown in Image Above : 3D printer for Rapid Prototyping)</p>
<img src="photos/LightFluxSphere.jpg" class="sphere-img" alt="">
<p class="description">(Shown in Image Above : Light Flux Color Sphere' Primarily used to test our LED lamp products)</p>
  </section>
  <!-- End About Section -->

    <!-- Footer -->
    <?php include('footer.php'); ?>
    <!-- End Footer -->