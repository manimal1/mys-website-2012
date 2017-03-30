<?php
//include_once("/home/mysyacht/public_html/weather/weather.php");
//include_once("/var/www/mysyachting.com/weather/weather.php");
//include_once("/var/www/mysyachting.com/hr/get-weather-data.php");
include_once("/home/mysyacht/public_html/hr/get-weather-data.php");
?>
<!DOCTYPE HTML>
<html>
<head>

    <title>Yachting Croatia Captains bridge - Mega Yacht Services Croatia</title>

    <meta charset="utf-8">
	<meta name="keywords" content="yacht agent, fical representation, charter, yacht provisioning, yacht services, yacht support, yacht supply, luxury transport, spare parts, technical assistance, luxury services">
	<meta name="description" content="">
	<meta name="author" content="Fer Projekt, Put Murvice 14, Zadar, Hrvatska, +385 98 212 96 00, www.fer-projekt.com">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="7 days">
    <meta name="googlebot" content="noodp">

  	<link rel="stylesheet" href="/css/mys.css" />
	<link rel="shortcut icon" href="/images/favicon.ico">
    <style>
		.viewport{width: 310px; height: 415px; overflow: hidden; position: relative;}
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
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/CaptainsBridge.jpg', sizingMethod='scale');
			-ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/CaptainsBridge.jpg', sizingMethod='scale');
		}​
    </style>

	<script src="/js/jquery-1.8.2.min.js"></script>
	<script src="/js/jquery.tinyscrollbar.min.js"></script>
	<script src="/js/jquery.cycle.all.min.js"></script>
	<script src="/js/funkcije.js"></script>
	<script src="/js/g.maps.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<?php
if ($_GET["PaliDiv"]=="Services")
  { ?>
    <script type="text/javascript">
	$(document).ready(function () {
		$('#MostSideNavigation').delay(1500).animate({"left": "+=380px"}, 1000);
		$('.Skrolaj').tinyscrollbar({sizethumb:25});
			createGoogleMap();
		if ($('#VrtiPrognozu')) {
 			$('#VrtiPrognozu').cycle({
				timeout:  5000,
				fx:'scrollVert',
				speed:800
			});
		}
        $('#Background').delay(1500).animate({opacity: 0}, 'slow', function() {
        	$(this)
            .css({'background-image':'url(/images/Service.jpg)'})
            .animate({opacity: 1});
    	});
		$('#ServicesTekst').show();
		$('#ServicesTekst').delay(1500).animate({"right": "+=400px"}, 1000);
    	return false;
	});
	</script>
<?php } else if ($_GET["PaliDiv"]=="Bunkering")
	{ ?>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#MostSideNavigation').delay(1500).animate({"left": "+=380px"}, 1000);
				$('.Skrolaj').tinyscrollbar({sizethumb:25});
					createGoogleMap();
				if ($('#VrtiPrognozu')) {
		 			$('#VrtiPrognozu').cycle({
						timeout:  5000,
						fx:'scrollVert',
						speed:800
					});
				}
		        $('#Background').delay(1500).animate({opacity: 0}, 'slow', function() {
		        	$(this)
		            .css({'background-image':'url(/images/CaptainsBridge.jpg)'})
		            .animate({opacity: 1});
		    	});
				$('#BunkeringTekst').show();
				$('#BunkeringTekst').delay(1500).animate({"right": "+=400px"}, 1000);
		    	return false;
			});
		</script>
<?php } else { ?>
    <script type="text/javascript">
	$(document).ready(function () {
        $('#Background').fadeOut(function () {
           	$(this).css({'background-image':'url(/images/CaptainsBridge.jpg)'}).fadeIn(1000);
        });
		$('#MostSideNavigation').delay(1500).animate({"left": "+=380px"}, 1000);
		$('.Skrolaj').tinyscrollbar({sizethumb:25});
			createGoogleMap();
		if ($('#VrtiPrognozu')) {
 			$('#VrtiPrognozu').cycle({
				timeout:  5000,
				fx:'scrollVert',
				speed:800
			});
		}
	});
	</script>
<?php } ?>
	<!--[if lt IE 9]>
		<script src="/js/html5shiv.js"></script>
		<script src="/js/css3-mediaqueries.js"></script>
	<![endif]-->
	<?php include("include/analytics.php"); ?>

</head>

<body>
<?php include("include/GoogleTagManager.php"); ?>
<section id="Wrapper">

<div id="MapCanvas" style="width: 100%; height: 100%; position:absolute; visibility:hidden;"></div>

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
			<li><a href="/about-us">About Us</a></li>
      <li><a href="/captains-bridge?PaliDiv=Bunkering">VAT</a></li>
      <li><a href="/charter">Charter</a></li>
			<li class="AktivnoNav"><a href="/captains-bridge">Captain’s Bridge</a></li><!--
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

<div style="height:350px;"></div>
<section id="MostSideNavigation">
	<h1>Need a little help planning your trip?</h1>
  <h2 style="font-size:17px;">Check out this useful information. Be sure to contact one of our agents for more detailed assistance.</h2>
	<div id="MostNavigacija">
		<a href="#" <?php
      if ($_GET["PaliDiv"]=="Services")
        {
        echo "class=\"Aktivni\"";
        }
      ?> onClick="FunkcijaServices(); PromjeniAktivni(this); return false;">Services
    </a>
		<a href="#" onClick="FunkcijaLaws(); PromjeniAktivni(this); return false;">Laws and Regulations</a>
		<a href="#" onClick="FunkcijaBunkering(); PromjeniAktivni(this); return false;">VAT &amp; Fiscal Representation</a>
		<a href="#" onClick="FunkcijaPorts(); PromjeniAktivni(this); return false;">Ports</a>
		<a href="#" onClick="FunkcijaWeather(); PromjeniAktivni(this); return false;">Weather</a>
    <!-- <a href="#" onClick="displayCO2Info(); PromjeniAktivni(this); return false;">Carbon Neutrality</a> -->
  </div>
</section>

<section id="ServicesTekst" class="SakrijBox">
	<h1>Services</h1>
    <div class="Crta"></div>
    <div class="Skrolaj">
		  <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
      <div class="viewport">
        <div class="overview">
          <p>At MYS Yachting we know how to meet the needs and expectations of mega yachts and we pride ourselves on the quality and promptness of our services.</p>
          <p>By choosing MYS Yachting you’ll receive full legal and logistical support while cruising in Croatia Montenegro. Our services include:</p>
          <p>• Clearing in &amp; out paperwork<br />
            • berth bookings<br />
            • Duty free fueling<br />
            • Food and beverage provisioning (<a href="chefs-galley" style="color:#b5a26d;">Chef’s Galley</a>)<br />
            • Tailor-made tours<br />
            • Concierge services<br />
            • Technical support<br />
            • Yacht maintenance and refit<br />
            • <a href="/captains-bridge?PaliDiv=Bunkering" style="color:#b5a26d;">VAT and fiscal representation</a><br />
            • <em>And anything else that our clients may need</em>
          </p>
          <p>We cover the entire eastern Adriatic coastline. With MYS you get the same excellent service 24h a day, 7 days a week in all ports of call. So, enjoy your stay and let us worry about the details.</p>
          <p>For any additional information or assistance please contact us at <a href="mailto:info@myscroatia.com" style="color:#b5a26d;">info@myscroatia.com</a> or give us a call at <strong>+385 99 502 3127</strong>.</p>
        </div>
		</div>
  </div>
</section>

<section id="LawsTekst" class="SakrijBox">
	<img style="position:absolute; top:-10px; right:20px;" src="/images/Maritime.png" width="78" height="75">
	<h1>Laws and Regulations</h1>
  <div class="Crta"></div>
  <div class="Skrolaj">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
    <div class="viewport">
			<div class="overview">
				<p><strong>Current Formalities upon arriving / leaving Croatia</strong></p>
				<p>Yachts coming to Croatia are not obliged by Croatian law to use a yacht/maritime agent when entering and/or leaving the country (“clearing in/out”).</p>

				<p><strong>Arriving</strong></p>
				<p>Considering Croatia is not part of the Schengen Area zone yet, when sailing in to Croatian territorial waters a yacht captain must take the shortest route and report to the nearest international traffic port for border control (police and customs) on the Q (customs) dock for the purposes of:</p>
				<p>
						•	Passport control<br />
						•	Purchase Vignette - the price of a vignette is calculated based on the vessel’s LOA and engine size (kWh)<br />
						•	Pay Sojourn Tax – 8 days (€80), 15 days (€107), 30 days (€134), 90 days (€174), 1 year (€230) – for yachts over 20m LOA<br />
				</p>
				<p>The vignette and sojourn tax receipts must be kept on the vessel and proffered when requested by an authorized official.</p>

				<p><strong>Arrival Documents</strong></p>
				<p>Upon arrival, the harbormaster’s office or its branch office will issue a “vignette” based on the following documentation:</p>
				<p>
						•	Certificate of Registry<br />
						•	Insurance Policy (for the yacht and all watercraft)<br />
						•	Captain’s Letter of Authority (must be notarized)<br />
						•	Captain’s License / Certificate of Navigation Competency<br />
						•	T2L document – or any other document that demonstrates that VAT on the yacht’s hull was paid in the EU (for EU flagged yachts only)<br />
						•	Crew List and Guest List<br />
						•	All Passports or Seaman’s Books of the Crew &amp; Guests<br />
						•	Contract of Employment for each crew member –- mainly requested for Croatian crew members<br />
				</p>
				<p>The Vignette is valid until the end of the current calendar year and is required for any vessels and water crafts if their engine power is 5kW or more.  It is not obligatory for rowing vessels regardless of their length. The Vignette is a proof of payment of the navigational safety fee, the environmental protection fee, and the lighthouse due fee.</p>

				<p><strong>Departing</strong></p>
				<p>Before sailing out of Croatian territorial waters a yacht captain must pass through border control (police and customs) on the Q dock of an international traffic port. Afterwards, a yacht captain must immediately take the shortest route and leave Croatian territorial waters.</p>
				<p>If in case of Force Majeure and the captain is unable to do the above, he must report to the nearest harbormaster’s office or appointed yacht/maritime agent.</p>

				<p><strong>Permanent ports of entry:</strong></p>
				<p>Umag, Poreč, Rovinj, Pula, Rasa-Brsica, Rijeka, Mali Lošinj, Zadar, Šibenik, Split, Korčula, Ubli (island of Lastovo), Ploče, and Dubrovnik.</p>

				<p><strong>Seasonal ports of entry (1 April – 31 October):</strong></p>
				<p>ACI Marina Umag, Novigrad (Istra), Sali and Božava (Dugi otok island), Primošten (Marina Kremik), Stari Grad and Hvar (Hvar island), Komiža and Vis (Vis island), Vela Luka (Korčula island), and Cavtat.</p>

				<p>All vessels arriving in Croatia should give 24h notice of ETA to arriving port or appointed yacht/maritime agent.</p>

				<p>For more information on foreign yachts coming to and staying in Croatia, please contact us at <a href="mailto:info@myscroatia.com" style="color:#b5a26d;">info@myscroatia.com</a> or give us a call at <strong>+385 99 502 3127</strong>.</p>
    	</div>
		</div>
	</div>
</section>

<section id="BunkeringTekst" class="SakrijBox">
	<h1>VAT &amp; Fiscal Representation</h1>
  <div class="Crta"></div>
  <div class="Skrolaj">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
    <div class="viewport">
			<div class="overview">
  			<p>Charter in Croatia can legally be performed by commercial or pleasure yachts which are:</p>
  			<p>
  					•	EU flagged yachts, of any size<br />
  					•	Non EU flagged yachts with a LOA of 40m and up, if they obtain a charter license<br />
  			</p>
  			<p>In order to perform legal charter business in Croatia yacht owners must either:</p>
  			<p>
  				1) Open a charter company in Croatia, or<br />
  				2) Appoint a charter representative.
        </p>
        <p>They must also obtain a Value Added Tax (VAT) number (VAT ID) along with a Croatian Personal Identification Number (PIN).</p>
  			<p>We provide our clients with all services related to charter and VAT and fiscal representation in Croatia, as well as 24/7 support.</p>
  			<p>As members of the <a href="http://www.easytax.fr/yacht-vat.php?lg=uk&id=8" target="_blank" style="color:#b5a26d;">Easytax</a> network we can also assist our clients with VAT and fiscal representation in Italy, France and Spain.</p>
        <p>For any additional information or assistance please contact us at <a href="mailto:info@myscroatia.com" style="color:#b5a26d;">info@myscroatia.com</a> or give us a call at <strong>+385 99 502 3127</strong>.
  			</p>
      </div>
    </div>
  </div>
</section>

<section id="PortsTekst" class="SakrijBox">
	<h1>Ports</h1>
    <div class="Crta"></div>
      <p>MYS Yachting covers every major port and marina in Croatia. With offices in Dubrovnik, Split, and Rovinj, our agents and local partners can assist you along the entire coast. Scroll over each destination for more information.</p>
      <div class="Botun3"><a href="/out-the-porthole">Out the porthole</a></div>
</section>

<section id="WeatherTekst" class="SakrijBox">
  <div class="Botun3">
    <a href="http://meteo.hr/index_en.php" target="_blank">Get more detailed forecast</a>
  </div>
	<h1>Weather</h1>
  <div class="Crta"></div>
  <div class="Skrolaj">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
    <div class="viewport">
      <div class="overview">
        <?=$WeatherT?>
      </div>
		</div>
  </div>
</section>

<section id="Co2Text" class="SakrijBox">
  <h1>Carbon Credits</h1>
  <div class="Crta"></div>
  <div class="Skrolaj">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
    <div class="viewport">
			<div class="overview">
        <p>CO2cut offers certified carbon reduction projects for the international mega yacht industry. Each and every ton of carbon dioxide a traveling vessel emits will be fully compensated by investment into renewable energy projects on any of five continents; all of these investments are transparent and easily tracked and followed by our clients.  As CO2cut offsets businesses, they will offset a mega yachts' CO2 emissions affordably and issue comprehensive carbon neutral certificates.  MYS Yachting is proud to work with CO2cut to play a part in battling climate change and protecting the environment.
        </p>
        <img class="inline-img" src="/images/mys_co2_hr.jpg" style="cursor:pointer" onclick="showImage('/images/mys_co2_hr.jpg');" />
        <div id="largeImgPanel" onclick="hideMe(this);">
            <img id="largeImg" style="height: 80%; margin: 0; padding: 0; margin-top: 7%; width: auto;" />
        </div>
      </div>
    </div>
  </div>
</section>

<?php include("include/banner.php"); ?>

<?php include("include/footer.php"); ?>

</section>
</body>
</html>
