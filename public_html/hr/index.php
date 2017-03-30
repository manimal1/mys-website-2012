<?php
include_once("include/social2.php");
?>
<!DOCTYPE HTML>
<html>
<head>

  <title>Mega Yacht Services Croatia - Yacht service agency in Croatia and Montenegro, Fiscal Representation, Charter and Tehnical services</title>

  <meta charset="utf-8">
	<meta name="keywords" content="yacht agent, fiscal representation, charter, licensing, yacht provisioning, yacht services, yacht support, yacht supply, luxury transport, spare parts, technical assistance, luxury services">
	<meta name="description" content="Mega Yacht Services from Croatia  is the most professional and dependable mega yacht services company in Croatia. Whatever your yacht needs, your MYS agent will provide....">
	<meta name="author" content="Fer Projekt, Put Murvice 14, Zadar, Hrvatska, +385 98 212 96 00, www.fer-projekt.com">
  <meta name="robots" content="index, follow">
  <meta name="revisit-after" content="7 days">
  <meta name="googlebot" content="noodp">

	<link rel="stylesheet" href="/css/mys.css" />
	<link rel="stylesheet" href="/css/jquery.bxslider.css" />
	<link rel="shortcut icon" href="/images/favicon.ico">

	<script src="/js/jquery-1.8.2.min.js"></script>
	<script src="/js/jquery.bxslider.js"></script>
	<script src="/js/jquery.transit.min.js"></script>
	<script src="/js/funkcije.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('.bxslider').bxSlider({
		  auto: true,
		  autoHover: true,
		  mode: 'fade',
		  pager: false,
		  controls: true
		});
	});
	</script>
	<!--[if lt IE 9]>
		<script src="/js/html5shiv.js"></script>
		<script src="/js/css3-mediaqueries.js"></script>
	<![endif]-->
	<?php include("include/analytics.php"); ?>
</head>

<body>
  <?php include("include/GoogleTagManager.php"); ?>
  <section id="Wrapper">

    <nav>
    	<div id="NavBox">
      	<div id="NavLogo">
      		<a href="/"><img class="left" src="/images/Logo_01.png"></a>
      		<a href="/"><img class="left" src="/images/Logo_02.png"></a>
  	    </div>
        <div id="NavMenu">
    		  <ul>
      			<!-- <li class="AktivnoNav"><a href="/">Home</a></li> -->
      			<li><a href="/about-us">About Us</a></li>
            <li><a href="/captains-bridge?PaliDiv=Bunkering">VAT</a></li>
            <li><a href="/charter">Charter</a></li>
      			<li><a href="/captains-bridge">Captain’s Bridge</a></li><!--
              		<ul class="MeniMali">
      					<li><a href="/hr/ugljan">Services</a></li>
      					<li><a href="/hr/otok-ugljan">Laws and Regulations</a></li>
      					<li><a href="/hr/zadar">Bunkering</a></li>
      					<li><a href="/hr/ugljan">Ports</a></li>
      					<li><a href="/hr/otok-ugljan">Weather</a></li>
       				</ul>
      			 -->
      			<li><a href="/chefs-galley">Chef’s Galley</a><!--
              		<ul class="MeniMali">
      					<li><a href="/hr/ugljan">Finest recipes</a></li>
      					<li><a href="/hr/otok-ugljan">Vine card</a></li>
      					<li><a href="/hr/zadar">Useful Brochure</a></li>
      					<li><a href="/hr/ugljan">Order online</a></li>
       				</ul>
                   --></li>
      			<li><a href="/out-the-porthole">Out the Porthole</a><!--
              		<ul class="MeniMali">
      					<li><a href="/hr/ugljan">Calendar</a></li>
       				</ul>
                   --></li>
      			<li><a href="/contact">Contact</a></li>
    		  </ul>
    	  </div>
    	</div>
    </nav>
    <div class="clear"></div>

    <section id="IndexSlider">
    	<ul class="bxslider">
    	  <li>
          <img src="/images/Slider3.jpg">
          <a id="Pali-3" href="#"><span class="Pali"><img src="/images/PocetnaPali.png" /></span></a>
          <div class="Opis" id="Opis-3">
            <strong>Town: Rovinj - Istria’s Gem</strong><br>
            Location:  Istra<br><br>
            The skyline of Rovinj is dominated by the Church of St. Euphemia and its adjacent bell tower. They preside over a uniquely beautiful town of stone houses and cobble streets that have been richly influenced by the old Republic of Venice and the Austrian Empire. Here, the flavor of the old Mediterranean is alive and palpable.
    		  </div>
    	  </li>
    	  <li>
          <img src="/images/Slider2.jpg" />
          <a id="Pali-2" href="#"><span class="Pali"><img src="/images/PocetnaPali.png"></span></a>
          <div class="Opis" id="Opis-2">
            <strong>Krka National Park</strong><br>
              Spectacular Waterfalls<br>
              Location:  Šibenik<br><br>
              This is a unique destination for a multitude of reasons. Traveling along the Krka estuary brings you close to the best side of historic Sibenik and its magnificent UNESCO-protected cathedral and fortresses.
    		  </div>
    	  </li>
    	  <li>
        	<img src="/images/Slider1.jpg">
          <a id="Pali-1" href="#"><span class="Pali"><img src="/images/PocetnaPali.png"></span></a>
          <div class="Opis" id="Opis-1">
            <strong>The Cathedral of St. James</strong><br>
            Croatian: Katedrala sv. Jakova<br>
            Location:  Šibenik<br><br>
    		    It is the church of the Catholic Church in Croatia, and the see of the Šibenik diocese. It is also the most important architectural monument of the Renaissance in the entire country. Since 2000, the Cathedral has been on the UNESCO World Heritage List.
          </div>
    	  </li>
      </ul>

      <div id="IndexSliderSlogan">
      	<h1>Welcome to Croatia</h1>
        <h2>Land of a thousand islands</h2>
        <!-- <p class="Botun2"><a href="/captains-bridge?PaliDiv=Bunkering">VAT &amp; fiscal representation</a></p> -->
        <p class="Botun2"><a href="/captains-bridge?PaliDiv=Services">We are at your service</a></p>
      </div>
    </section>

    <?php include("include/footer.php"); ?>
  </section>
</body>
</html>
