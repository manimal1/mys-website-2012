<!DOCTYPE HTML>
<html>
<head>

    <title>Yachting Croatia About us - Mega Yacht Services Croatia</title>

    <meta charset="utf-8">
	<meta name="keywords" content="yacht agent, yacht provisioning, yacht services, yacht support, yacht supply, luxury transport, spare parts, technical assistance, luxury services">
	<meta name="description" content="">
	<meta name="author" content="Fer Projekt, Put Murvice 14, Zadar, Hrvatska, +385 98 212 96 00, www.fer-projekt.com">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="7 days">
    <meta name="googlebot" content="noodp">

  	<link rel="stylesheet" href="/css/mys.css" />
	<link rel="shortcut icon" href="/images/favicon.ico">
    <style>
		.viewport{width: 310px; height: 395px; overflow: hidden; position: relative;}
		#Background{
		    margin: 0;
		    padding: 0;
		    z-index: -1;
		    position: absolute;
		    width: 100%;
		    height: 100%;
			-moz-background-size:100% 100%;
			-webkit-background-size:100% 100%;
			background-size:100% 100%;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/ONama.jpg', sizingMethod='scale');
			-ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/ONama.jpg', sizingMethod='scale');
		}​
    </style>

	<script src="/js/jquery-1.8.2.min.js"></script>
	<script src="/js/jquery.tinyscrollbar.min.js"></script>
	<script src="/js/jquery.cycle.all.min.js"></script>
	<script src="/js/funkcije.js"></script>
    <script type="text/javascript">
	$(document).ready(function () {
        $('#Background').fadeOut(function () {
           	$(this).css({'background-image':'url(/images/ONama.jpg)'}).fadeIn(1000);
        });
		$('#ONamaTekst').delay(1500).animate({"left": "+=380px"}, 1000);
		$('.Skrolaj').tinyscrollbar({sizethumb:25});
		if ($('#VrtiPrognozu')) {
 			$('#VrtiPrognozu').cycle({
				timeout:  5000,
				fx:'scrollVert',
				speed:800
			});
		}
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

<div id="Background"></div>

<nav>
	<div id="NavBox">
    	<div id="NavLogo">
      		<a href="/"><img class="left" src="/images/Logo_01.png"></a>
      		<a href="/"><img class="left" src="/images/Logo_02.png"></a>
	    </div>
    	<div id="NavMenu">
		  <ul>
			<!-- <li><a href="/">Home</a></li> -->
			<li class="AktivnoNav"><a href="/about-us">About Us</a></li>
      <li><a href="/captains-bridge?PaliDiv=Bunkering">VAT</a></li>
      <li><a href="/charter">Charter</a></li>
			<li><a href="/captains-bridge">Captain’s Bridge</a></li>
			<li><a href="/chefs-galley">Chef’s Galley</a></li>
			<li><a href="/out-the-porthole">Out the Porthole</a></li>
			<li><a href="/contact">Contact</a></li>
		  </ul>
	    </div>
	</div>
</nav>
        <div class="clear"></div>

<div style="height:350px;"></div>
<section id="ONamaTekst">
	<h1>About Us</h1>
    <h2>Values you can depend on</h2>
    <div class="Crta"></div>
    <div class="Skrolaj">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
        <div class="viewport"><div class="overview">
<p>Here at MYS Yachting we don’t consider what we do a job – it’s a lifestyle.  As a group of professional yachting enthusiasts we enjoy assisting crew and guests with anything you need.  No task is too hard for us. No matter how big or how small the job, we always tackle it with a smile.</p>
<p>All of us at MYS are also passionate about the countries where we live and work.  We love to explore them, to discover their natural wonders, to taste their many fine culinary delights.  So in order to do our job right we made it simple on ourselves – we just decided to take our clients on this journey with us.  Everything we do is tailored so that you discover the real, local flavors of Croatia & Montenegro.</p>
<p>We have a simple <strong>three-fold mission</strong>:</p>
<p>•	To make our clients feel welcome<br>
•	To make them think that what we do is effortless<br>
•	To have them wish to come back</p>
<p>We accomplish this with our simple approach to doing business – we are passionate about service, and we place honesty and integrity above all else.</p>
<p style="font-size:12px; font-style:italic;">** <strong>Mega Yacht Services</strong> was formerly known as <strong>Maya Yacht Services</strong> (formerly found at www.myscroatia.com) when it covered only Croatia, but due to its continued growth in the region and its expansion into Montenegro the decision was made to slightly alter the name and logo to reflect its growing international reach.</p>
    </div>
		</div></div>
</section>

<?php include("include/banner.php"); ?>

<?php include("include/footer.php"); ?>

</section>
</body>
</html>
