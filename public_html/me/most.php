<?php
//include_once("/home/mysyacht/public_html/weather/weather_me.php");
include_once("/home/mysyacht/public_html/me/get-weather-data.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
	  <title>Yacht agent Montenegro Captains bridge - Mega Yacht Services Montenegro</title>

	  <meta charset="utf-8">
		<meta name="keywords" content="yacht agent, yacht provisioning, fiscal representative, charter, yacht services, yacht support, yacht supply, luxury transport, spare parts, technical assistance, luxury services">
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
		if ($_GET["PaliDiv"]=="Services") { ?>
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
	        	$(this).css({'background-image':'url(/images/Service.jpg)'})
	            .animate({opacity: 1});
	    		});
					$('#ServicesTekst').show();
					$('#ServicesTekst').delay(1500).animate({"right": "+=400px"}, 1000);
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
		<?php }
		?>
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
							<li><a href="http://hr.mysyachting.com/captains-bridge?PaliDiv=Bunkering">VAT</a></li>
							<li><a href="http://hr.mysyachting.com/charter">Charter</a></li>
							<li class="AktivnoNav"><a href="/captains-bridge">Captain’s Bridge</a></li>
							<li><a href="/chefs-galley">Chef’s Galley</a></li>
							<li><a href="/out-the-porthole">Out the Porthole</a></li>
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
					<a href="#"
						<?php
							if ($_GET["PaliDiv"]=="Services") {
							  echo "class=\"Aktivni\"";
							}
						?>
						onClick="FunkcijaServices(); PromjeniAktivni(this); return false;">Services</a>
					<a href="#" onClick="FunkcijaLaws(); PromjeniAktivni(this); return false;">Laws and Regulations</a>
					<a href="#" onClick="FunkcijaBunkering(); PromjeniAktivni(this); return false;">Bunkering</a>
					<a href="#" onClick="FunkcijaPorts(); PromjeniAktivni(this); return false;">Ports</a>
					<a href="#" onClick="FunkcijaWeather(); PromjeniAktivni(this); return false;">Weather</a>
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
							<p><strong>Current Formalities upon arriving / leaving Montenegro</strong></p>

							<p>Yachts coming to Montenegro are not obliged by Montenegrin law to use a yacht/maritime agent when entering and leaving the country (“clearing in/out”).</p>

							<p><strong>Arriving</strong></p>

							<p>When sailing in to Montenegrin territorial waters a yacht captain must take the shortest route and report to the nearest international traffic port for border control (police and customs) on the Q (customs) dock for the purposes of:</p>
							<p>
								• Passport control<br />
								• Purchase Vignette - a proof of payment of the navigational safety fee and government administrative fees
							</p>
							<p>
								The vignette has to be placed at all times on a visible section of the hull. During the period of vignette validity, the total number of passengers and crew members shall not exceed the four-fold amount of total number of persons that the yacht is certified to carry, as stated in the Yacht Registry. Any changes to the Crew or Passenger list has to be reported at the nearest Harbour Master's Office.
							</p>

							<p><strong>Arriving Documents</strong></p>

							<p>Upon arrival, the harbormaster’s office or its branch office will issue a “vignette” based on the following documentation:</p>
							<p>
								• Certificate of Registry<br />
								• Insurance Policy (for the yacht and all watercraft)<br />
								• Captain’s Letter of Authority<br />
								• Captain’s License / Certificate of Navigation Competency<br />
								• Crew List and Guest List<br />
								• All Passports or Seaman’s Books of the Crew &amp; Guests<br />
							</p>

							<p><strong>Departing</strong></p>

							<p>
								Before sailing out of Montenegrin territorial waters a yacht captain must pass through border control (police and customs) on the Q dock of an international traffic port. Afterwards, a yacht captain must immediately take the shortest route and leave Montenegrin territorial waters.
							</p>
							<p>
								If in case of Force Majeure and the captain is unable to do the above, he must report to the nearest harbormaster’s office or appointed yacht/maritime agent.
							</p>

							<p><strong>Ports of Entry</strong></p>

							<p>Bar, Budva, Marina Porto Montenegro (Tivat), Kotor, Zelenika</p>
							<p>
								Harbour Master offices at Port of Bar and Kotor are open 24h, while the others are open only during regular working hours. All vessels arriving in Montenegro should give 24h notice of ETA to arriving port or appointed yacht/maritime agent.
							</p>

							<p><strong>Vignette duration and fees</strong></p>

							<p>
								Private yacht over 24m: 1 day (150€ + LOA x 1€), 1 week (360€ + LOA x 1.5€), 1 month (460€ + LOA x 2€), 3 months (560€ + LOA x 3€), 6 months (660€ + LOA x 4€), 1 year (760€ + LOA x 5€)
							</p>
							<p>
								Commercial yacht over 24m: 1 day (15€ x LOA), 1 week (70€ x LOA), 1 month (100€ x LOA), 3 months (150€ x LOA), 6 months (200€ x LOA), 1 year (250€ x LOA)
							</p>
							<p>For more information on foreign yachts coming to and staying in Montenegro, please contact us at <a href="mailto:info@myscroatia.com" style="color:#b5a26d;">info@myscroatia.com</a> or give us a call at <strong>+385 99 502 3127</strong>.</p>
		    	 </div>
				 </div>
			 </div>
		 </section>

			<section id="BunkeringTekst" class="SakrijBox">
				<h1>Bunkering</h1>
				<div class="Crta"></div>
				<p>All foreign vessels, private and commercial, are allowed to purchase tax-free fuel. The fuel supplied to vessels is a high quality fuel produced in compliance with international standards – high sulfur (0.2%) and low sulfur (0.005%) diesel/gasoil.</p>
				<p>Tax-free fuel supply is available only from a shore side terminals in port of Bar (0-24h) and Marina Porto Montenegro (8-20h).</p>
				<p>After completion of fueling the vessel must immediately leave Montenegrin waters.</p>
				<p>MYS Yachting provides duty free fuel as well as all related yachting services. For more information please contact us at <a href="mailto:info@myscroatia.com" style="color:#b5a26d;">info@myscroatia.com</a> or give us a call at <strong>+385 99 502 3127</strong>.</p>
			<!--<div class="Botun3"><a href="/contact">Contact us for more details</a></div> -->
			</section>

			<section id="PortsTekst" class="SakrijBox">
				<h1>Ports</h1>
				<div class="Crta"></div>
				<p>MYS Yachting covers every major port and marina in Montenegro. With offices in Bar and Tivat, our agents and local partners can assist you along the entire coast.  Scroll over each destination for more information.</p>
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

			<?php include("include/banner.php"); ?>
			<?php include("include/footer.php"); ?>

		</section>
	</body>
</html>
