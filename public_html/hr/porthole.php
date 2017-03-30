<!DOCTYPE HTML>
<html>
<head>

    <title>Yachting Croatia Out the porthole - Mega Yacht Services Croatia</title>

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
		.viewport{width: 95%; height: 530px; overflow: hidden; position: relative;}
		#Background{
		    margin: 0;
		    padding: 0;
		    z-index: -1;
		    position: absolute;
		    width: 100%;
		    height: 100%;
		}​
    </style>

	<script src="/js/jquery-1.8.2.min.js"></script>
	<script src="/js/jquery.tinyscrollbar.min.js"></script>
	<script src="/js/funkcije.js"></script>
<?php
if ($_GET["PaliDiv"]=="Event")
  {
  $PaliDiv="EventTekst";
  }
else
  {
  $PaliDiv="GradoviTekst";
  }
?>
    <script type="text/javascript">
	$(document).ready(function () {// dodaje clear nakon svake treće novosti
		$('.EventOpis:nth-child(3n)').after('<div style="clear:both;height:20px;"></div>');
		$('#PorholeSideNavigation').delay(500).animate({"left": "+=380px"}, 1000);
		$('#GradoviTekst').tinyscrollbar({sizethumb:25});
		$('#OtociTekst').tinyscrollbar({sizethumb:25});
		$('#ParkoviTekst').tinyscrollbar({sizethumb:25});
		$('#EventTekst').tinyscrollbar({sizethumb:25});
		$('#<?=$PaliDiv?>').delay(1500).animate({opacity: 0}, 'slow', function() {
        	$(this)
            .show()
            .animate({opacity: 1})
			$('#<?=$PaliDiv?>').tinyscrollbar_update();
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
    			<li><a href="/captains-bridge">Captain’s Bridge</a></li>
    			<li><a href="/chefs-galley">Chef’s Galley</a></li>
    			<li class="AktivnoNav"><a href="/out-the-porthole">Out the Porthole</a></li>
    			<li><a href="/contact">Contact</a></li>
  		  </ul>
	    </div>
	</div>
</nav>
        <div class="clear"></div>

<div style="height:200px;"></div>
<section id="PorholeSideNavigation">
	<h1>Three to See</h1>
    <div>Check out our top 3 recommendations for towns, islands, and national parks to visit in this beautiful country. This is just a taste. For our clients we prepare detailed personalized itineraries and arrange private tours, among other services. We use our local knowledge and personal touch to make sure you enjoy the real Croatia.</div>
	<div id="MostNavigacija">
		<a href="#" <?php
if ($_GET["PaliDiv"]<>"Event")
  {
  echo "class=\"Aktivni\"";
  }
?> onclick="FunkcijaGradovi(); PromjeniAktivni(this); return false;">Towns</a>
		<a href="#" onclick="FunkcijaOtoci(); PromjeniAktivni(this); return false;">Islands</a>
		<a href="#" onclick="FunkcijaParkovi(); PromjeniAktivni(this); return false;">National parks</a>
    </div>
</section>

<div id="EventsPali"><a href="#" onclick="FunkcijaEvent(); PromjeniAktivni(this); return false;"><img src="/images/Events.png" onmouseover="this.src='/images/EventsH.png'" onmouseout="this.src='/images/Events.png'"></a></div>

<section id="GradoviTekst" class="SakrijBox">
    <div class="Skrolaj">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
        <div class="viewport"><div class="overview">
    <div class="MjestoOpis">
    	<img src="/images/Dubrovnik.jpg">
		<div class="MjestoOpisTekst">
		   <h1>Dubrovnik</h1>
           <h2>The Pearl of the Adriatic</h2>
		   <div class="Crta"></div>
           <p>Lord Byron was not overstating the matter when he proclaimed Dubrovnik ‘the pearl of the Adriatic.’ Dubrovnik is clearly special. A magnificent curtain of walls surrounds marble streets and baroque buildings that exude a pearly light in the Adriatic sun. The main pedestrian thoroughfare, Stradun, is a magnificent combination of cafés and shops with outstanding monuments at either end. Churches, monasteries, and museums ornamented with finely carved stone recall an eventful history and a vibrant artistic tradition. Beyond the city is a heavenly landscape of beaches and wooded peninsulas.  And in the city you will find a unique blend of old style living mixed with modern bars, restaurants, and clubs.  There is a little of something for everyone in Dubrovnik.</p>
		</div>
    </div>
    <div class="clear" style="height:30px;"></div>
    <div class="MjestoOpis">
    	<img src="/images/Split.jpg">
		<div class="MjestoOpisTekst">
		   <h1>Split</h1>
           <h2>Diocletian’s Palace</h2>
		   <div class="Crta"></div>
           <p>What land, what place so full of richness and tranquility could get a Roman Emperor to voluntarily retire at the height of his powers?  Try the city of Split, Croatia’s second largest.  Here in the town center you will find one of the best preserved cities of Ancient Rome, still in use and functioning today.  This is a city of narrow cobble streets and stone passageways, of clock towers and grand mausoleums, and of hidden sulfur springs whose presence can only be felt at the edge of the Riva by their faint smell.  It was the springs that drew Diocletian to the area, as they helped with his arthritis, and here he built one of the finest Roman trading port towns of its day.  Come explore the many sites.  Enjoy a meal on one of its squares or have a drink at one of the many clubs or pubs.  It is a great town to enjoy.</p>
		</div>
    </div>
    <div class="clear" style="height:30px;"></div>
    <div class="MjestoOpis">
    	<img src="/images/Rovinj.jpg">
		<div class="MjestoOpisTekst">
		   <h1>Rovinj</h1>
           <h2>Istria’s Gem</h2>
		   <div class="Crta"></div>
           <p>The skyline of Rovinj is dominated by the Church of St. Euphemia and its adjacent bell tower. They preside over a uniquely beautiful town of stone houses and cobble streets that have been richly influenced by the old Republic of Venice and the Austrian Empire. Here, the flavor of the old Mediterranean is alive and palpable.  Rovinj is the gem of Istria, which many have likened to a Croatian Tuscany.  This region is home to excellence wine, olive oil, truffles, and a host of other fine delights to appease the hedonist in all of us.</p>
		</div>
    </div>
		</div></div>
    </div>
</section>

<section id="OtociTekst" class="SakrijBox">
    <div class="Skrolaj">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
        <div class="viewport"><div class="overview">
    <div class="MjestoOpis">
    	<img src="/images/Hvar.jpg">
		<div class="MjestoOpisTekst">
		   <h1>Hvar</h1>
           <h2>Croatia’s St. Tropez</h2>
		   <div class="Crta"></div>
           <p>The island of Hvar declares itself as being the sunniest Dalmatian island and is often called Croatian Madeira. Nature provides it with 2715 sunny hours per year. The scents of rosemary and lavender, a pine wooded shore and an exceptional cultural richness divulge why Hvar (Hvar town) is Croatia’s top destination after Dubrovnik. Medieval Hvar is a small town. The main street is the wide promenade that runs along the harbor, where are all the most important sights reside. The chic “korzo” dominates the town’s rich night life with great restaurants, cocktail bars and clubs. It is a place to see and to be seen.</p>
		</div>
    </div>
    <div class="clear" style="height:30px;"></div>
    <div class="MjestoOpis">
    	<img src="/images/Vis.jpg">
		<div class="MjestoOpisTekst">
		   <h1>Vis</h1>
           <h2>Great Local Food, Fine Wine and Diving</h2>
		   <div class="Crta"></div>
           <p>Island Vis was a military base until 1989. It has become one of the most attractive islands since. In addition to its well-preserved natural beauty, its rocky coast rich with coves, caves and several sandy beaches, you can find excellent food and wine in both of its small towns, Vis and Komiza. One of the best restaurants is Villa Kaliopa, situated in a beautiful 16th century Garibaldi Palace with a palm tree garden. It is the most romantic place in Vis town, serving fresh fish meals daily.</p>
		</div>
    </div>
    <div class="clear" style="height:30px;"></div>
    <div class="MjestoOpis">
    	<img src="/images/Pag.jpg">
		<div class="MjestoOpisTekst">
		   <h1>Pag</h1>
           <h2>Zrče Beach – The Best Party Beach</h2>
		   <div class="Crta"></div>
           <p>Zrče beach, Novalja on the island of Pag, is a popular summer resort which hosts probably the only beach in Croatia with Ibiza standards. Zrče is a long, white pebble beach with crystal clear waters. The beach has numerous facilities and three popular open-air clubs offering entertainment until the early hours.</p>
		</div>
    </div>
		</div></div>
    </div>
</section>

<section id="ParkoviTekst" class="SakrijBox">
    <div class="Skrolaj">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
        <div class="viewport"><div class="overview">
    <div class="MjestoOpis">
    	<img src="/images/Krka.jpg">
		<div class="MjestoOpisTekst">
		   <h1>Krka</h1>
           <h2>Spectacular Waterfalls</h2>
		   <div class="Crta"></div>
           <p>This is a unique destination for a multitude of reasons. Traveling along the Krka estuary brings you close to the best side of historic Sibenik and its magnificent UNESCO-protected cathedral and fortresses. You can moor in Skradin, a charming village with a marina and town quay. From there you can visit the spectacular waterfalls of Krka NP. There are 7 waterfalls in all with a total drop of 242m. The 7th and longest, at Skradinski Buk , has a network of walkways, bridges and raised viewing points to help visitors appreciate one of Croatia’s most breathtaking views.</p>
		</div>
    </div>
    <div class="clear" style="height:30px;"></div>
    <div class="MjestoOpis">
    	<img src="/images/Kornati.jpg">
		<div class="MjestoOpisTekst">
		   <h1>Kornati & NP Telaščica</h1>
           <h2>Best Sailing & Cruising</h2>
		   <div class="Crta"></div>
           <p>As George Bernard Shaw wrote: “On the last day of the Creation, God desired to crown his work and thus created the Kornati Islands out of tears, stars, and breath”. The Kornati Islands make up Croatia’s largest and mostly unpopulated archipelago.  It consists of 147 islands, islets and reefs. The islands, running from north-west to south-east, form four chains. The first two are very close to the mainland, while the other two face the open sea and make up part of Kornati National Park. Because there is no fresh water on these islands they are mostly void of any vegetation, although some are covered with grass. Another fine place to visit in the area is the nature park Telascica, whose unique beauty should not be overlooked.</p>
		</div>
    </div>
    <div class="clear" style="height:30px;"></div>
    <div class="MjestoOpis">
    	<img src="/images/Mljet.jpg">
		<div class="MjestoOpisTekst">
		   <h1>Mljet</h1>
           <h2>Pristine Nature</h2>
		   <div class="Crta"></div>
           <p>Mljet island has remained rather unknown for centuries and is rarely visited by tourists. "Mljet" National Park covers its northwestern area, covering 5.375 ha of protected land and surrounding sea. This area was proclaimed a national park in 1960 and represents the first institutionalized attempt to protect an original ecosystem in the Adriatic. The world famous lakes of Mljet consist of the Great Lake and The Small Lake. Sapunara sandy beach is one of the most beautiful sandy beaches in Southern Dalmatia. Because of its rich vegetation, the island is also known as Green Island.</p>
		</div>
    </div>
		</div></div>
    </div>
</section>


<section id="EventTekst" class="SakrijBox">
    <div class="Skrolaj">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
        <div class="viewport"><div class="overview">
	<h1 style=" font-size:23px; font-weight:400;">Events in Croatia 2016.</h1>
    <h2 style=" font-size:23px; font-weight:700;">May</h2>
    <div id="May">
	    <div class="EventOpis">
	           <h1>07.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">FESTIVAL VISUALIA - lighting design & 3D mapping festival</span><br>PULA</p>
	           <p><span class="naslov">43rd HVAR THEATRE DAYS</span><br>HVAR</p>
	    </div>
	    <div class="EventOpis">
	           <h1>08.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">WINGS FOR LIFE WORLD RUN</span><br>ZADAR</p>
	           <p><span class="naslov">43rd HVAR THEATRE DAYS</span><br>HVAR</p>
	    </div>
	    <div class="EventOpis">
	           <h1>09.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">AVANTGARDE JAZZ FESTIVAL</span><br>ROVINJ</p>
	           <p><span class="naslov">43rd HVAR THEATRE DAYS</span><br>HVAR</p>
	    </div>
	    <div class="EventOpis">
	           <h1>10.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">AVANTGARDE JAZZ FESTIVAL</span><br>ROVINJ</p>
	           <p><span class="naslov">43rd HVAR THEATRE DAYS</span><br>HVAR</p>
	    </div>
	    <div class="EventOpis">
	           <h1>12.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">FESTIVAL VISUALIA - lighting design & 3D mapping festival</span><br>PULA</p>
	           <p><span class="naslov">BEACH POLO TOURNAMENT</span><br>ROVINJ</p>
	    </div>
	    <div class="EventOpis">
	           <h1>13.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">23rd VINISTRA - International wine exhibition</span><br>POREČ</p>
	           <p><span class="naslov">FESTIVAL VISUALIA - lighting design & 3D mapping festival</span><br>PULA</p>
	           <p><span class="naslov">BEACH POLO TOURNAMENT</span><br>ROVINJ</p>
	    </div>
	    <div class="EventOpis">
	           <h1>14.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">23rd VINISTRA - International wine exhibition</span><br>POREČ</p>
	           <p><span class="naslov">FESTIVAL VISUALIA - lighting design & 3D mapping festival</span><br>PULA</p>
	           <p><span class="naslov">BEACH POLO TOURNAMENT</span><br>ROVINJ</p>
	    </div>
	    <div class="EventOpis">
	           <h1>15.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">23rd VINISTRA - International wine exhibition</span><br>POREČ</p>
	           <p><span class="naslov">BEACH POLO TOURNAMENT</span><br>ROVINJ</p>
	    </div>
	    <div class="EventOpis">
	           <h1>23.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">AVANTGARDE JAZZ FESTIVAL</span><br>ROVINJ</p>
	    </div>
	    <div class="EventOpis">
	           <h1>24.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">AVANTGARDE JAZZ FESTIVAL</span><br>ROVINJ</p>
	    </div>
	    <div class="EventOpis">
	           <h1>26.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">BIG BEACH SPRING BREAK - Novalja</span><br>PAG</p>
	    </div>
	    <div class="EventOpis">
	           <h1>27.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">BIG BEACH SPRING BREAK - Novalja</span><br>PAG</p>
	    </div>
	    <div class="EventOpis">
	           <h1>28.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">BIG BEACH SPRING BREAK - Novalja</span><br>PAG</p>
	    </div>
	    <div class="EventOpis">
	           <h1>29.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">BIG BEACH SPRING BREAK - Novalja</span><br>PAG</p>
	    </div>
    </div>
    <div style="height:40px;" class="clear"></div>

    <h2 style=" font-size:23px; font-weight:700;">June</h2>
    <div id="June">
	    <div class="EventOpis">
	           <h1>01.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">DOLCE VITA FESTIVAL - opening</span><br>ROVINJ</p>
	    </div>
	    <div class="EventOpis">
	           <h1>09.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">FIUMANKA REGATTA</span><br>Rijeka</p>
	    </div>
	    <div class="EventOpis">
	           <h1>10.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">FIUMANKA REGATTA</span><br>Rijeka</p>
	    </div>
	    <div class="EventOpis">
	           <h1>11.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">FIUMANKA REGATTA</span><br>Rijeka</p>
	    </div>
	    <div class="EventOpis">
	           <h1>12.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">FIUMANKA REGATTA</span><br>Rijeka</p>
	    </div>
	    <div class="EventOpis">
	           <h1>16.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">ELECTRO DANCE MADNESS - Novalja</span><br>PAG</p>
	    </div>
	    <div class="EventOpis">
	           <h1>17.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">ELECTRO DANCE MADNESS - Novalja</span><br>PAG</p>
	    </div>
	    <div class="EventOpis">
	           <h1>18.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">ELECTRO DANCE MADNESS - Novalja</span><br>PAG</p>
	    </div>
	    <div class="EventOpis">
	           <h1>19.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">ELECTRO DANCE MADNESS - Novalja</span><br>PAG</p>
	    </div>
	    <div class="EventOpis">
	           <h1>21.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">AVANTGARDE JAZZ FESTIVAL</span><br>ROVINJ</p>
	           <p><span class="naslov">MIDSUMMER SCENE</span><br>DUBROVNIK</p>
	    </div>
	    <div class="EventOpis">
	           <h1>22.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">AVANTGARDE JAZZ FESTIVAL</span><br>ROVINJ</p>
	           <p><span class="naslov">MIDSUMMER SCENE</span><br>DUBROVNIK</p>
	    </div>
	    <div class="EventOpis">
	           <h1>23.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">MIDSUMMER SCENE</span><br>DUBROVNIK</p>
	    </div>
	    <div class="EventOpis">
	           <h1>24.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">MIDSUMMER SCENE</span><br>DUBROVNIK</p>
	    </div>
	    <div class="EventOpis">
	           <h1>25.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">MIDSUMMER SCENE</span><br>DUBROVNIK</p>
	    </div>
	    <div class="EventOpis">
	           <h1>26.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">MIDSUMMER SCENE</span><br>DUBROVNIK</p>
	    </div>
	    <div class="EventOpis">
	           <h1>27.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">MIDSUMMER SCENE</span><br>DUBROVNIK</p>
	    </div>
	    <div class="EventOpis">
	           <h1>28.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">SWATCH BEACH VOLLEYBALL</span><br>POREČ</p>
	           <p><span class="naslov">MIDSUMMER SCENE</span><br>DUBROVNIK</p>
	    </div>
	    <div class="EventOpis">
	           <h1>29.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">LOVE INTERNATIONAL FESTIVAL</span><br>TISNO</p>
	           <p><span class="naslov">SWATCH BEACH VOLLEYBALL</span><br>POREČ</p>
	           <p><span class="naslov">MIDSUMMER SCENE</span><br>DUBROVNIK</p>
	    </div>
	    <div class="EventOpis">
	           <h1>30.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">DOLCE VITA FESTIVAL - last day</span><br>ROVINJ</p>
	           <p><span class="naslov">LOVE INTERNATIONAL FESTIVAL</span><br>TISNO</p>
	           <p><span class="naslov">SWATCH BEACH VOLLEYBALL</span><br>POREČ</p>
	           <p><span class="naslov">MIDSUMMER SCENE</span><br>DUBROVNIK</p>
	    </div>
    </div>
    <div style="height:40px;" class="clear"></div>

    <h2 style="font-size:23px; font-weight:700;">July</h2>
    <div id="July">
	    <div class="EventOpis">
	           <h1>01.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">LIBURNIA JAZZ FESTIVAL</span><br>OPATIJA</p>
	           <p><span class="naslov">LOVE INTERNATIONAL FESTIVAL</span><br>TISNO</p>
	           <p><span class="naslov">SWATCH BEACH VOLLEYBALL</span><br>POREČ</p>
	           <p><span class="naslov">MIDSUMMER SCENE</span><br>DUBROVNIK</p>
	    </div>
	    <div class="EventOpis">
	           <h1>02.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">22nd PUF- international Alternative Theatre festival</span><br>PULA</p>
	           <p><span class="naslov">LIBURNIA JAZZ FESTIVAL</span><br>OPATIJA</p>
	           <p><span class="naslov">LOVE INTERNATIONAL FESTIVAL</span><br>TISNO</p>
	           <p><span class="naslov">SWATCH BEACH VOLLEYBALL</span><br>POREČ</p>
	           <p><span class="naslov">MIDSUMMER SCENE</span><br>DUBROVNIK</p>
	    </div>
	    <div class="EventOpis EventOpis450">
	           <h1>03.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">22nd PUF- international Alternative Theatre festival</span><br>PULA</p>
	           <p><span class="naslov">LIBURNIA JAZZ FESTIVAL</span><br>OPATIJA</p>
	           <p><span class="naslov">LOVE INTERNATIONAL FESTIVAL</span><br>TISNO</p>
	           <p><span class="naslov">SWATCH BEACH VOLLEYBALL</span><br>POREČ</p>
	           <p><span class="naslov">MIDSUMMER SCENE</span><br>DUBROVNIK</p>
	    </div>
	    <div class="EventOpis">
	           <h1>04.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">22nd PUF- international Alternative Theatre festival</span><br>PULA</p>
	           <p><span class="naslov">LOVE INTERNATIONAL FESTIVAL</span><br>TISNO</p>
	           <p><span class="naslov">MIDSUMMER SCENE</span><br>DUBROVNIK</p>
	    </div>
	    <div class="EventOpis">
	           <h1>05.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">SALSA BEACH SPLASH</span><br>ŠIBENIK</p>
	           <p><span class="naslov">22nd PUF- international Alternative Theatre festival</span><br>PULA</p>
	           <p><span class="naslov">LOVE INTERNATIONAL FESTIVAL</span><br>TISNO</p>
	           <p><span class="naslov">MIDSUMMER SCENE</span><br>DUBROVNIK</p>
	    </div>
	    <div class="EventOpis EventOpis450">
	           <h1>06.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">SALSA BEACH SPLASH</span><br>ŠIBENIK</p>
	           <p><span class="naslov">LOVE INTERNATIONAL FESTIVAL</span><br>TISNO</p>
	           <p><span class="naslov">MIDSUMMER SCENE</span><br>DUBROVNIK</p>
	    </div>
	    <div class="EventOpis">
	           <h1>07.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">ELECTRIC ELEPHANT FESTIVAL - The Garden</span><br>TISNO</p>
	           <p><span class="naslov">SALSA BEACH SPLASH</span><br>ŠIBENIK</p>
	           <p><span class="naslov">MIDSUMMER SCENE</span><br>DUBROVNIK</p>
	    </div>
	    <div class="EventOpis">
	           <h1>08.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">ELECTRIC ELEPHANT FESTIVAL - The Garden</span><br>TISNO</p>
	           <p><span class="naslov">SALSA BEACH SPLASH</span><br>ŠIBENIK</p>
	    </div>
	    <div class="EventOpis">
	           <h1>09.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">63rd FILM FESTIVAL</span><br>PULA</p>
	           <p><span class="naslov">ELECTRIC ELEPHANT FESTIVAL - The Garden</span><br>TISNO</p>
	           <p><span class="naslov">SALSA BEACH SPLASH</span><br>ŠIBENIK</p>
	    </div>
	    <div class="EventOpis">
	           <h1>10.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">AVANTGARDE JAZZ FESTIVAL</span><br>ROVINJ</p>
	           <p><span class="naslov">DUBROVNIK SUMMER FESTIVAL FROM 10.07-25.08. - opening day</span><br>Dubrovnik</p>
	           <p><span class="naslov">63rd FILM FESTIVAL</span><br>PULA</p>
	           <p><span class="naslov">ELECTRIC ELEPHANT FESTIVAL - The Garden</span><br>TISNO</p>
	           <p><span class="naslov">SALSA BEACH SPLASH</span><br>ŠIBENIK</p>
	    </div>
	    <div class="EventOpis">
	           <h1>11.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">AVANTGARDE JAZZ FESTIVAL</span><br>ROVINJ</p>
	           <p><span class="naslov">63rd FILM FESTIVAL</span><br>PULA</p>
	           <p><span class="naslov">ELECTRIC ELEPHANT FESTIVAL - The Garden</span><br>TISNO</p>
	    </div>
	    <div class="EventOpis">
	           <h1>12.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">FRESH ISLAND FESTIVAL - Novalja</span><br>PAG</p>
	           <p><span class="naslov">63rd FILM FESTIVAL</span><br>PULA</p>
	    </div>
	    <div class="EventOpis">
	           <h1>13.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">FRESH ISLAND FESTIVAL - Novalja</span><br>PAG</p>
	           <p><span class="naslov">63rd FILM FESTIVAL</span><br>PULA</p>
	    </div>
	    <div class="EventOpis">
	           <h1>14.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">FRESH ISLAND FESTIVAL - Novalja</span><br>PAG</p>
	           <p><span class="naslov">63rd FILM FESTIVAL</span><br>PULA</p>
	    </div>
	    <div class="EventOpis EventOpis450">
	           <h1>15.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">ULTRA EUROPE - Stadion Poljud</span><br>SPLIT</p>
	           <p><span class="naslov">63rd FILM FESTIVAL</span><br>PULA</p>
	    </div>
	    <div class="EventOpis">
	           <h1>16.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">ULTRA EUROPE - Stadion Poljud</span><br>SPLIT</p>
	           <p><span class="naslov">63rd FILM FESTIVAL</span><br>PULA</p>
	    </div>
	    <div class="EventOpis">
	           <h1>17.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">ULTRA EUROPE - Stadion Poljud</span><br>SPLIT</p>
	    </div>
	    <div class="EventOpis">
	           <h1>18.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">ULTRA EUROPE - Zlatni Rat Beach</span><br>BOL</p>
	    </div>
	    <div class="EventOpis">
	           <h1>19.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">CROATIA ROCKS - Novalja</span><br>PAG</p>
	           <p><span class="naslov">ULTRA EUROPE - Amfora Hvar Grand Beach Resort</span><br>HVAR</p>
	    </div>
	    <div class="EventOpis">
	           <h1>20.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">SUNCEBEAT - The Garden</span><br>TISNO</p>
	           <p><span class="naslov">ULTRA EUROPE - Closing Party, TBA</span><br>VIS</p>
	           <p><span class="naslov">CROATIA ROCKS - Novalja</span><br>PAG</p>
	    </div>
	    <div class="EventOpis EventOpis550">
	           <h1>21.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">SEASPLASH FESTIVAL</span><br>PULA</p>
	           <p><span class="naslov">SUNCEBEAT - The Garden</span><br>TISNO</p>
	           <p><span class="naslov">CROATIA ROCKS - Novalja</span><br>PAG</p>
	           <p><span class="naslov">JAZZ&BLUES FESTIVAL</span><br>VODICE</p>
	    </div>
	    <div class="EventOpis">
	           <h1>22.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">SEASPLASH FESTIVAL</span><br>PULA</p>
	           <p><span class="naslov">SUNCEBEAT - The Garden</span><br>TISNO</p>
	           <p><span class="naslov">CROATIA ROCKS - Novalja</span><br>PAG</p>
	           <p><span class="naslov">JAZZ&BLUES FESTIVAL</span><br>VODICE</p>
	    </div>
	    <div class="EventOpis">
	           <h1>23.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">SEASPLASH FESTIVAL</span><br>PULA</p>
	           <p><span class="naslov">SUNCEBEAT - The Garden</span><br>TISNO</p>
	           <p><span class="naslov">CROATIA ROCKS - Novalja</span><br>PAG</p>
	           <p><span class="naslov">JAZZ&BLUES FESTIVAL</span><br>VODICE</p>
	    </div>
	    <div class="EventOpis">
	           <h1>24.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">SUPERTOON</span><br>ŠIBENIK</p>
	           <p><span class="naslov">SEASPLASH FESTIVAL</span><br>PULA</p>
	           <p><span class="naslov">SUNCEBEAT - The Garden</span><br>TISNO</p>
	           <p><span class="naslov">JAZZ&BLUES FESTIVAL</span><br>VODICE</p>
	    </div>
	    <div class="EventOpis">
	           <h1>25.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">SUPERTOON</span><br>ŠIBENIK</p>
	           <p><span class="naslov">SUNCEBEAT - The Garden</span><br>TISNO</p>
	    </div>
	    <div class="EventOpis EventOpis550">
	           <h1>26.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">FILM FESTIVAL</span><br>MOTOVUN</p>
	           <p><span class="naslov">HIDEOUT FESTIVAL - Zrce Beach</span><br>PAG</p>
	           <p><span class="naslov">SUPERTOON</span><br>ŠIBENIK</p>
	           <p><span class="naslov">SUNCEBEAT - The Garden</span><br>TISNO</p>
	    </div>
	    <div class="EventOpis">
	           <h1>27.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">FILM FESTIVAL</span><br>MOTOVUN</p>
	           <p><span class="naslov">HIDEOUT FESTIVAL - Zrce Beach</span><br>PAG</p>
	           <p><span class="naslov">SUPERTOON</span><br>ŠIBENIK</p>
	           <p><span class="naslov">SUNCEBEAT - The Garden</span><br>TISNO</p>
	    </div>
	    <div class="EventOpis">
	           <h1>28.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">FILM FESTIVAL</span><br>MOTOVUN</p>
	           <p><span class="naslov">HIDEOUT FESTIVAL - Zrce Beach</span><br>PAG</p>
	           <p><span class="naslov">SUNCEBEAT - The Garden</span><br>TISNO</p>
	    </div>
	    <div class="EventOpis">
	           <h1>29.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">FILM FESTIVAL</span><br>MOTOVUN</p>
	           <p><span class="naslov">HIDEOUT FESTIVAL - Zrce Beach</span><br>PAG</p>
	           <p><span class="naslov">SUNCEBEAT - The Garden</span><br>TISNO</p>
	    </div>
	    <div class="EventOpis">
	           <h1>30.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">FILM FESTIVAL</span><br>MOTOVUN</p>
	           <p><span class="naslov">HIDEOUT FESTIVAL - Zrce Beach</span><br>PAG</p>
	    </div>
	    <div class="EventOpis">
	           <h1>31.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">HIDEOUT FESTIVAL - Zrce Beach</span><br>PAG</p>
	    </div>
    </div>
    <div style="height:40px;" class="clear"></div>

    <h2 style=" font-size:23px; font-weight:700;">August</h2>
    <div id="August">
	    <div class="EventOpis">
	           <h1>01.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">SOLO POSITIVO FILM FESTIVAL</span><br>OPATIJA</p>
	    </div>
	    <div class="EventOpis">
	           <h1>02.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">SOLO POSITIVO FILM FESTIVAL</span><br>OPATIJA</p>
	    </div>
	    <div class="EventOpis">
	           <h1>03.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">SOLO POSITIVO FILM FESTIVAL</span><br>OPATIJA</p>
	    </div>
	    <div class="EventOpis">
	           <h1>04.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">SOUNDWAVE MUSIC FESTIVAL - The Garden</span><br>TISNO</p>
	           <p><span class="naslov">SOLO POSITIVO FILM FESTIVAL</span><br>OPATIJA</p>
	    </div>
	    <div class="EventOpis">
	           <h1>05.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">SOUNDWAVE MUSIC FESTIVAL - The Garden</span><br>TISNO</p>
	           <p><span class="naslov">SOLO POSITIVO FILM FESTIVAL</span><br>OPATIJA</p>
	    </div>
	    <div class="EventOpis">
	           <h1>06.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">BARRAKUD - Zrce Beach</span><br>PAG</p>
	           <p><span class="naslov">SOUNDWAVE MUSIC FESTIVAL - The Garden</span><br>TISNO</p>
	           <p><span class="naslov">SOLO POSITIVO FILM FESTIVAL</span><br>OPATIJA</p>
	    </div>
	    <div class="EventOpis">
	           <h1>07.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">ALKA – knights’ tournament</span><br>SINJ</p>
	           <p><span class="naslov">BARRAKUD - Zrce Beach</span><br>PAG</p>
	           <p><span class="naslov">SOUNDWAVE MUSIC FESTIVAL - The Garden</span><br>TISNO</p>
	    </div>
	    <div class="EventOpis">
	           <h1>08.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">ALKA – knights’ tournament</span><br>SINJ</p>
	           <p><span class="naslov">BARRAKUD - Zrce Beach</span><br>PAG</p>
	           <p><span class="naslov">SOUNDWAVE MUSIC FESTIVAL - The Garden</span><br>TISNO</p>
	    </div>
	    <div class="EventOpis">
	           <h1>09.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">ALKA – knights’ tournament</span><br>SINJ</p>
	           <p><span class="naslov">BARRAKUD - Zrce Beach</span><br>PAG</p>
	    </div>
	    <div class="EventOpis">
	           <h1>10.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">BARRAKUD - Zrce Beach</span><br>PAG</p>
	    </div>
	    <div class="EventOpis">
	           <h1>11.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">BARRAKUD - Zrce Beach</span><br>PAG</p>
	    </div>
	    <div class="EventOpis">
	           <h1>12.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">BARRAKUD - Zrce Beach</span><br>PAG</p>
	    </div>
	    <div class="EventOpis">
	           <h1>13.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">BARRAKUD - Zrce Beach</span><br>PAG</p>
	    </div>
	    <div class="EventOpis">
	           <h1>19.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">DALMATIAN CHANSON EVENINGS</span><br>ŠIBENIK</p>
	    </div>
	    <div class="EventOpis">
	           <h1>20.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">FILMFORUM FESTIVAL</span><br>ZADAR</p>
	           <p><span class="naslov">DALMATIAN CHANSON EVENINGS</span><br>ŠIBENIK</p>
	    </div>
	    <div class="EventOpis">
	           <h1>21.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">SONUS MUSIC FESTIVAL - Zrce Beach</span><br>PAG</p>
	           <p><span class="naslov">FILMFORUM FESTIVAL</span><br>ZADAR</p>
	    </div>
	    <div class="EventOpis">
	           <h1>22.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">SONUS MUSIC FESTIVAL - Zrce Beach</span><br>PAG</p>
	           <p><span class="naslov">FILMFORUM FESTIVAL</span><br>ZADAR</p>
	    </div>
	    <div class="EventOpis">
	           <h1>23.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">SONUS MUSIC FESTIVAL - Zrce Beach</span><br>PAG</p>
	           <p><span class="naslov">FILMFORUM FESTIVAL</span><br>ZADAR</p>
	    </div>
	    <div class="EventOpis">
	           <h1>24.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">DIMENSIONS FESTIVAL</span><br>PULA</p>
	           <p><span class="naslov">SONUS MUSIC FESTIVAL - Zrce Beach</span><br>PAG</p>
	           <p><span class="naslov">FILMFORUM FESTIVAL</span><br>ZADAR</p>
	    </div>
	    <div class="EventOpis">
	           <h1>25.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">DUBROVNIK SUMMER FESTIVAL from 10.07-25.08. - last day</span><br>DUBROVNIK</p>
	           <p><span class="naslov">LIBURNIA FILM FESTIVAL</span><br>IĆIĆI</p>
	           <p><span class="naslov">DIMENSIONS FESTIVAL</span><br>PULA</p>
	           <p><span class="naslov">SONUS MUSIC FESTIVAL - Zrce Beach</span><br>PAG</p>
	           <p><span class="naslov">FILMFORUM FESTIVAL</span><br>ZADAR</p>
	    </div>
	    <div class="EventOpis">
	           <h1>26.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">LIBURNIA FILM FESTIVAL</span><br>IĆIĆI</p>
	           <p><span class="naslov">DIMENSIONS FESTIVAL</span><br>PULA</p>
	           <p><span class="naslov">FILMFORUM FESTIVAL</span><br>ZADAR</p>
	    </div>
	    <div class="EventOpis EventOpis350">
	           <h1>27.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">LIBURNIA FILM FESTIVAL</span><br>IĆIĆI</p>
	           <p><span class="naslov">DIMENSIONS FESTIVAL</span><br>PULA</p>
	    </div>
	    <div class="EventOpis">
	           <h1>28.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">CROATIA BIKE WEEK</span><br>PULA</p>
	           <p><span class="naslov">LIBURNIA FILM FESTIVAL</span><br>IĆIĆI</p>
	           <p><span class="naslov">DIMENSIONS FESTIVAL</span><br>PULA</p>
	    </div>
	    <div class="EventOpis">
	           <h1>29.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">CROATIA BIKE WEEK</span><br>PULA</p>
	           <p><span class="naslov">LIBURNIA FILM FESTIVAL</span><br>IĆIĆI</p>
	           <p><span class="naslov">DIMENSIONS FESTIVAL</span><br>PULA</p>
	    </div>
	    <div class="EventOpis">
	           <h1>30.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">CROATIA BIKE WEEK</span><br>PULA</p>
	    </div>
	    <div class="EventOpis">
	           <h1>31.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">OUTLOOK FESTIVAL</span><br>PULA</p>
	           <p><span class="naslov">CROATIA BIKE WEEK</span><br>PULA</p>
	    </div>
    </div>
    <div style="height:40px;" class="clear"></div>

    <h2 style=" font-size:23px; font-weight:700;">September</h2>
    <div id="September">
	    <div class="EventOpis">
	           <h1>01.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">OUTLOOK FESTIVAL</span><br>PULA</p>
	    </div>
	    <div class="EventOpis">
	           <h1>02.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">OUTLOOK FESTIVAL</span><br>PULA</p>
	    </div>
	    <div class="EventOpis">
	           <h1>03.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">OUTLOOK FESTIVAL</span><br>PULA</p>
	    </div>
	    <div class="EventOpis">
	           <h1>04.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">OUTLOOK FESTIVAL</span><br>PULA</p>
	    </div>
	    <div class="EventOpis">
	           <h1>05.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">OUTLOOK FESTIVAL</span><br>PULA</p>
	    </div>
	    <div class="EventOpis">
	           <h1>16.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">GIOSTRA – Historical festival</span><br>POREČ</p>
	    </div>
	    <div class="EventOpis">
	           <h1>17.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">GIOSTRA – Historical festival</span><br>POREČ</p>
	    </div>
	    <div class="EventOpis">
	           <h1>18.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">GIOSTRA – Historical festival</span><br>POREČ</p>
	    </div>
    </div>
    <div style="height:40px;" class="clear"></div>

    <h2 style=" font-size:23px; font-weight:700;">October</h2>
    <div id="October">
	    <div class="EventOpis">
	           <h1>16.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">POREČ TRIATLON</span><br>POREČ/p>
	    </div>
	    <div class="EventOpis">
	           <h1>20.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">BIOGRAD BOAT SHOW</span><br>BIOGRAD n/m</p>
	    </div>
	    <div class="EventOpis">
	           <h1>21.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">BIOGRAD BOAT SHOW</span><br>BIOGRAD n/m</p>
	    </div>
	    <div class="EventOpis">
	           <h1>22.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">BIOGRAD BOAT SHOW</span><br>BIOGRAD n/m</p>
	    </div>
	    <div class="EventOpis">
	           <h1>23.</h1>
			   <div class="Crta"></div>
	           <p><span class="naslov">BIOGRAD BOAT SHOW</span><br>BIOGRAD n/m</p>
	    </div>
    </div>
		</div></div>
    </div>
</section>
    <div class="clear"></div>

<?php include("include/footer.php"); ?>

</section>
</body>
</html>
