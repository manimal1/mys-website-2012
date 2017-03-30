<!DOCTYPE HTML>
<html>
<head>

    <title>Yacht agent Montenegro Out the porthole - Mega Yacht Services Montenegro</title>

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
	$(document).ready(function () {
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
					<li><a href="http://hr.mysyachting.com/captains-bridge?PaliDiv=Bunkering">VAT</a></li>
					<li><a href="http://hr.mysyachting.com/charter">Charter</a></li>
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
    <div>Check out our top 3 recommendations for towns to visit in this beautiful country. This is just a taste. For our clients we prepare detailed personalized itineraries and arrange private tours, among other services. We use our local knowledge and personal touch to make sure you enjoy the real Montenegro.</div>
	<div id="MostNavigacija">
		<a href="#" <?php
if ($_GET["PaliDiv"]<>"Event")
  {
  echo "class=\"Aktivni\"";
  }
?> onclick="FunkcijaGradovi(); PromjeniAktivni(this); return false;">Towns</a>
		<!--<a href="#" onclick="FunkcijaOtoci(); PromjeniAktivni(this); return false;">Islands</a>
		<a href="#" onclick="FunkcijaParkovi(); PromjeniAktivni(this); return false;">National parks</a> -->
    </div>
</section>

<!--<div id="EventsPali"><a href="#" onclick="FunkcijaEvent(); PromjeniAktivni(this); return false;"><img src="/images/Events.png" width="187" height="80"></a></div> -->

<section id="GradoviTekst" class="SakrijBox">
    <div class="Skrolaj">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
        <div class="viewport"><div class="overview">
    <div class="MjestoOpis">
		   <h1>Budva </h1>
		   <div class="Crta"></div>
    	<img src="/images/Budva.jpg">
		<div class="MjestoOpisTekst">
           <p>With two historic urban cores, seven Monasteries, and 35 sandy beaches the ancient town of Budva and its Riviera is a beautiful stretch of coast to visit.<br>
           The old town is recognized as one of the oldest settlements in the region, and it is rich in historical monuments.  It resides on a small peninsula and represents a treasure chest of culture heritage. There is the Church of Saint Trojica, where you’ll find the tomb of writer Stjepan Mitrov Ljubisa, as well as the Churches of Saint Ivan and Saint Bogorodica and Saint Sava.  Besides these spiritual centers you can also visit many shops, cafés, restaurants and galleries.<br>
           In Budva you’ll find a plethora of events to participate in, from all types of water sports along its many beaches to wonderful walking tours of its ancient sites, as well as wining and dining late into the night where you’ll find endless entertainment at its many clubs and casinos.  In Budva, you have it all.</p>
		</div>
    </div>
    <div class="clear" style="height:30px;"></div>
    <div class="MjestoOpis">
		   <h1>Kotor</h1>
		   <div class="Crta"></div>
    	<img src="/images/Kotor.jpg">
		<div class="MjestoOpisTekst">
           <p>Located along one of Montenegro's most beautiful bays is Kotor, a city of traders and famous sailors, with many stories to tell. The Old City of Kotor is a well preserved urbanization typical of the middle Ages, built between the 12th and 14th century. Medieval architecture and numerous monuments of cultural heritage have made Kotor a UNESCO listed “World Natural and Historical Heritage Site". <br>
           Throughout the entire city the buildings are criss-crossed with narrow streets and squares. One of these squares contains the Cathedral of Saint Tryphon (Sveti Tripun), a monument of Roman culture and one of the most recognizable symbols of the city. The Church of Saint Luke (Sveti Luka) from the 13th century, Church of Saint Ana (Sveta Ana) from the 12th century, Church of Saint Mary (Sveta Marija) from the 13th century, Church of the Healing Mother of God (Gospe od Zdravlja) from the 15th century, the Prince’s Palace from the 17th century and the Napoleon’s Theatre from the 19th century are all treasures that are part of the rich heritage of Kotor.<br>
           Carnivals and festivals are organized each year to give additional charm to this most beautiful city of the Montenegrin littoral.  Besides these, there are numerous bars and clubs that keep the night lively and hopping all summer long.</p>
		</div>
    </div>
    <div class="clear" style="height:30px;"></div>
    <div class="MjestoOpis">
		   <h1>Boka Bay & Perast</h1>
		   <div class="Crta"></div>
    	<img src="/images/Boka.jpg">
		<div class="MjestoOpisTekst">
           <p>The church Gospa od Skrpjela is located on the same named island, found in the bay of Boka Kotorska across from the beautiful small town Perast.  Perast is a wonderful, peaceful small town that makes a wonderful day visit.  Stroll around the many shops, enjoy a quaint meal, and take in the tranquil views of Boka Bay spread out before you.<br>
           Our Lady of the Rocks (Gospa od Škrpjela) is one of the two islets near Perast in Boka Kotorska Bay (the other being Sveti Đorđe Island). It is an artiﬁcial island created by a bulwark of rocks.  The Roman Catholic Church of Our Lady of the Rocks (Italian: Chiesa della Madonna dello Scarpello) is the only building on the islet.</p>
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
	<h1>Events in Croatia 2013.</h1>
    <h2>May</h2>
    <div class="EventOpis">
           <h1>01.</h1>
		   <div class="Crta"></div>
           <p>Eco – Ethno Fair 2013<br>Skradin</p>
    </div>
    <div class="EventOpis">
           <h1>24.</h1>
		   <div class="Crta"></div>
           <p>Avantgarde Jazz Festival<br>Rovinj</p>
    </div>
    <div class="clear"></div>
    <h2>June</h2>
    <div class="EventOpis">
           <h1>01.-02.</h1>
		   <div class="Crta"></div>
           <p>65th Istria regatta<br>Umag, Rovinj, Pula<br>Sailing regatta</p>
    </div>
    <div class="EventOpis">
           <h1>21.-25.</h1>
		   <div class="Crta"></div>
           <p>Croatia Gourmet Festival<br>Poreč, Peškera Bay</p>
    </div>
    <div class="clear"></div>
    <h2>July</h2>
    <div class="EventOpis">
           <h1>03.-10.</h1>
		   <div class="Crta"></div>
           <p>Garden Festival 2013<br>Petrčane, Zadar</p>
    </div>
    <div class="EventOpis">
           <h1>10.</h1>
		   <div class="Crta"></div>
           <p>Dubrovnik Summer Festival<br>Opening day</p>
    </div>
    <div class="EventOpis">
           <h1>10.</h1>
		   <div class="Crta"></div>
           <p>Fresh Island Festival<br>Novalja, Island Pag, Zrće beach</p>
    </div>
    <div class="EventOpis">
           <h1>12.</h1>
		   <div class="Crta"></div>
           <p>Concert - Verdi vs. Wagner<br>Dubrovnik, old town – main square</p>
    </div>
    <div class="EventOpis">
           <h1>12.-14.</h1>
		   <div class="Crta"></div>
           <p>Ultra Europe 2013<br>Split & Island Hvar</p>
    </div>
    <div class="EventOpis">
           <h1>13.-27.</h1>
		   <div class="Crta"></div>
           <p>Pula Movie Festival<br>Pula, Arena</p>
    </div>
    <div class="EventOpis">
           <h1>18.-28.</h1>
		   <div class="Crta"></div>
           <p>ATP Croatia Open Umag – Tennis<br>Umag, ATP Stadion</p>
    </div>
    <div class="EventOpis">
           <h1>22.</h1>
		   <div class="Crta"></div>
           <p>The Wall 2013 – Roger Waters (Pink Floyd)<br>Split, Poljud stadium</p>
    </div>
    <div class="EventOpis">
           <h1>27.-31.</h1>
		   <div class="Crta"></div>
           <p>Motovun Movie Festival<br>Motovun</p>
    </div>
    <div class="EventOpis">
           <h1>29.</h1>
		   <div class="Crta"></div>
           <p>Jazine Open Air – Santana<br>Zadar</p>
    </div>
    <div class="clear"></div>
    <h2>August</h2>
    <div class="EventOpis">
           <h1>02.</h1>
		   <div class="Crta"></div>
           <p>Leonard Cohen<br>Pula, Arena</p>
    </div>
    <div class="EventOpis">
           <h1>07.-09.</h1>
		   <div class="Crta"></div>
           <p>Terraneo Festival<br>Šibenik</p>
    </div>
    <div class="EventOpis">
           <h1>22.</h1>
		   <div class="Crta"></div>
           <p>Joe Cocker<br>Pula, Arena</p>
    </div>
    <div class="EventOpis">
           <h1>24.-28.</h1>
		   <div class="Crta"></div>
           <p>Avvantura Festival Film Forum Zadar 2013<br>Zadar</p>
    </div>
    <div class="clear"></div>
    <h2>September</h2>
    <div class="EventOpis">
           <h1>05.-08.</h1>
		   <div class="Crta"></div>
           <p>Big Game Fishing 2013<br>Vodice</p>
    </div>
    <div class="EventOpis">
           <h1>18.-25.</h1>
		   <div class="Crta"></div>
           <p>Big Game Fishing 2013<br>Jezera, Island Murter, Kornati</p>
    </div>
    <div class="clear"></div>
		</div></div>
    </div>
</section>
    <div class="clear"></div>

<?php include("include/footer.php"); ?>

</section>
</body>
</html>
