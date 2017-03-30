// pali gasi zemlju u footeru
$(document).ready(function() {
	$('.PokaziZemlju').hover(function() {
		$('.SakriZemlju').fadeIn();
	});
});
$(document).ready(function() {
  	$('.Zemlje').mouseleave(function() {
    	$('.SakriZemlju').fadeOut();
  	});
});
// boxevi na početnoj
$(document).ready(function() {
	$('.Pali').hover(function() {
    	return false;
	});
	$('#Pali-1').toggle(function() {
		$('.Pali img').transition({ rotate: '45deg' });
		$('#Opis-1').fadeIn();
		$('.bx-wrapper .bx-next').css('z-index', 1);
    	return false;
		},
		function() {
		$('.Pali img').transition({ rotate: '0deg' });
		$('#Opis-1').fadeOut();
		$('.bx-wrapper .bx-next').css('z-index', 2000);
    	return false;
  });
	$('#Pali-2').toggle(function() {
		$('.Pali img').transition({ rotate: '45deg' });
		$('#Opis-2').fadeIn();
		$('.bx-wrapper .bx-prev').css('z-index', 1);
    	return false;
		},
		function() {
		$('.Pali img').transition({ rotate: '0deg' });
		$('#Opis-2').fadeOut();
		$('.bx-wrapper .bx-prev').css('z-index', 2000);
    	return false;
  });
	$('#Pali-3').toggle(function() {
		$('.Pali img').transition({ rotate: '45deg' });
		$('#Opis-3').fadeIn();
		$('.bx-wrapper .bx-next').css('z-index', 1);
    	return false;
		},
		function() {
		$('.Pali img').transition({ rotate: '0deg' });
		$('#Opis-3').fadeOut();
		$('.bx-wrapper .bx-next').css('z-index', 2000);
    	return false;
  });
});
// Funkcija minja aktinvi li u meniju mosta
function PromjeniAktivni(obj){
	var lilist = document.getElementById("MostNavigacija");
	var alist = lilist.getElementsByTagName("a");
	for (i=0; i<alist.length; i++ )
		{
		alist[i].className="";
		}
		obj.className="Aktivni";
}
// most pali gasi boxeve
function FunkcijaServices(){
		$('.SakrijBox').hide();
		$('#MapCanvas').css('visibility','hidden');
        $('#Background').animate({opacity: 0}, 'slow', function() {
        	$(this)
            .css({'background-image':'url(/images/Service.jpg)'})
            .animate({opacity: 1});
    	});
		$('#ServicesTekst').show();
		$('#ServicesTekst').removeAttr( 'style' );
		$('#ServicesTekst').animate({"right": "+=400px"}, 1000);
    	return false;
}
function FunkcijaLaws(){
		$('.SakrijBox').hide();
		$('#MapCanvas').css('visibility','hidden');
        $('#Background').animate({opacity: 0}, 'slow', function() {
        	$(this)
            .css({'background-image':'url(/images/CaptainsBridge.jpg)'})
            .animate({opacity: 1});
    	});
		$('#LawsTekst').show();
		$('#LawsTekst').removeAttr( 'style' );
		$('#LawsTekst').animate({"right": "+=400px"}, 1000);
    	return false;
}
function FunkcijaBunkering(){
		$('.SakrijBox').hide();
		$('#MapCanvas').css('visibility','hidden');
        $('#Background').animate({opacity: 0}, 'slow', function() {
        	$(this)
            .css({'background-image':'url(/images/CaptainsBridge.jpg)'})
            .animate({opacity: 1});
    	});
		$('#BunkeringTekst').show();
		$('#BunkeringTekst').removeAttr( 'style' );
		$('#BunkeringTekst').animate({"right": "+=400px"}, 1000);
    	return false;
}
function FunkcijaPorts(){
		$('.SakrijBox').hide();
		$('#Background').css({'background-image':'none'});
        $('#MapCanvas').animate({opacity: 0}, 'slow', function() {
        	$(this)
            .css({'visibility':'visible'})
            .animate({opacity: 1});
    	});
		$('#PortsTekst').show();
		$('#PortsTekst').removeAttr( 'style' );
		$('#PortsTekst').animate({"right": "+=400px"}, 1000);
    	return false;
}
function FunkcijaWeather(){
		$('.SakrijBox').hide();
		$('#MapCanvas').css('visibility','hidden');
        $('#Background').animate({opacity: 0}, 'slow', function() {
        	$(this)
            .css({'background-image':'url(/images/Weather.jpg)'})
            .animate({opacity: 1});
    	});
		$('#WeatherTekst').show();
		$('#WeatherTekst').removeAttr( 'style' );
		$('#WeatherTekst').animate({"right": "+=400px"}, 1000);
    	return false;
}
// boxevi na početnoj
$(document).ready(function() {
	$('.Pali').hover(function() {
    	return false;
	});
	$('#Pali-01').toggle(function() {
		$('.Opis').fadeOut();
		$('.Pali img').transition({ rotate: '0deg' });
		$('#Pali-01 .Pali img').transition({ rotate: '45deg' });
		$('#Opis-01').fadeIn();
    	return false;
		},
		function() {
		$('#Pali-01 .Pali img').transition({ rotate: '0deg' });
		$('#Opis-01').fadeOut();
    	return false;
  });
	$('#Pali-02').toggle(function() {
		$('.Opis').fadeOut();
		$('.Pali img').transition({ rotate: '0deg' });
		$('#Pali-02 .Pali img').transition({ rotate: '45deg' });
		$('#Opis-02').fadeIn();
    	return false;
		},
		function() {
		$('#Pali-02 .Pali img').transition({ rotate: '0deg' });
		$('#Opis-02').fadeOut();
    	return false;
  });
	$('#Pali-03').toggle(function() {
		$('.Opis').fadeOut();
		$('.Pali img').transition({ rotate: '0deg' });
		$('#Pali-03 .Pali img').transition({ rotate: '45deg' });
		$('#Opis-03').fadeIn();
    	return false;
		},
		function() {
		$('#Pali-03 .Pali img').transition({ rotate: '0deg' });
		$('#Opis-03').fadeOut();
    	return false;
  });
	$('#Pali-04').toggle(function() {
		$('.Opis').fadeOut();
		$('.Pali img').transition({ rotate: '0deg' });
		$('#Pali-04 .Pali img').transition({ rotate: '45deg' });
		$('#Opis-04').fadeIn();
    	return false;
		},
		function() {
		$('#Pali-04 .Pali img').transition({ rotate: '0deg' });
		$('#Opis-04').fadeOut();
    	return false;
  });
	$('#Pali-05').toggle(function() {
		$('.Opis').fadeOut();
		$('.Pali img').transition({ rotate: '0deg' });
		$('#Pali-05 .Pali img').transition({ rotate: '45deg' });
		$('#Opis-05').fadeIn();
    	return false;
		},
		function() {
		$('#Pali-05 .Pali img').transition({ rotate: '0deg' });
		$('#Opis-05').fadeOut();
    	return false;
  });
	$('#Pali-06').toggle(function() {
		$('.Opis').fadeOut();
		$('.Pali img').transition({ rotate: '0deg' });
		$('#Pali-06 .Pali img').transition({ rotate: '45deg' });
		$('#Opis-06').fadeIn();
    	return false;
		},
		function() {
		$('#Pali-06 .Pali img').transition({ rotate: '0deg' });
		$('#Opis-06').fadeOut();
    	return false;
  });
});
//šef pali gasi boxeve
function FunkcijaRecepti(){
		$('.SakrijBox').hide();
		$('#Background').css({'background-image':'none'});
		$('#BackgroundPali').hide();
		$('#ReceptiTekst').animate({opacity: 0}, 'slow', function() {
        	$(this)
            .show()
            .animate({opacity: 1})				   
 			$('#ReceptiTekst').cycle({
				timeout:  0, 
				fx:'scrollHorz', 
				speed:800, 
				next:'#leadNext', 
				prev:'#leadPrev',
				after: onAfter1
			});
			$('#Carpaccio').tinyscrollbar_update();
			$('#leadNext').show();
			$('#leadPrev').show();
    	});
    	return false;
}
function FunkcijaVino(){
		$('.SakrijBox').hide();
		$('#Background').css({'background-image':'none'});
		$('#BackgroundPali').hide();
		$('#VinoTekst').animate({opacity: 0}, 'slow', function() {
        	$(this)
            .show()
            .animate({opacity: 1})			   
 			$('#VinoTekst').cycle({
				timeout:  0, 
				fx:'scrollHorz', 
				speed:800, 
				next:'#leadNext', 
				prev:'#leadPrev',
				after: onAfter2
			});
			$('#Vino1').tinyscrollbar_update();
			$('#leadNext').show();
			$('#leadPrev').show();
    	});
    	return false;
}
function FunkcijaLokalno(){
		$('.SakrijBox').hide();
		$('#Background').css({'background-image':'none'});
		$('#BackgroundPali').hide();
		$('#LokalnoTekst').animate({opacity: 0}, 'slow', function() {
        	$(this)
            .show()
            .animate({opacity: 1})			   
 			$('#LokalnoTekst').cycle({
				timeout:  0, 
				fx:'scrollHorz', 
				speed:800, 
				next:'#leadNext', 
				prev:'#leadPrev',
				after: onAfter3
			});
			$('#Prosciutto').tinyscrollbar_update();
			$('#leadNext').show();
			$('#leadPrev').show();
    	});
    	return false;
}
	function onAfter1() { 
			$('#Carpaccio').tinyscrollbar_update();
			$('#LakeCarp').tinyscrollbar_update();
			$('#Brulee').tinyscrollbar_update();
	}
	function onAfter2() { 
			$('#Vino1').tinyscrollbar_update();
			$('#Vino2').tinyscrollbar_update();
	}
	function onAfter3() { 
			$('#Prosciutto').tinyscrollbar_update();
			$('#Olive').tinyscrollbar_update();
			$('#Honey').tinyscrollbar_update();
	}
//porthole pali gasi boxeve
function FunkcijaGradovi(){
		$('.SakrijBox').hide();
		$('#GradoviTekst').animate({opacity: 0}, 'slow', function() {
        	$(this)
            .show()
            .animate({opacity: 1})
			$('#GradoviTekst').tinyscrollbar_update();
    	});
    	return false;
}
function FunkcijaOtoci(){
		$('.SakrijBox').hide();
		$('#OtociTekst').animate({opacity: 0}, 'slow', function() {
        	$(this)
            .show()
            .animate({opacity: 1})
			$('#OtociTekst').tinyscrollbar_update();
    	});
    	return false;
}
function FunkcijaParkovi(){
		$('.SakrijBox').hide();
		$('#ParkoviTekst').animate({opacity: 0}, 'slow', function() {
        	$(this)
            .show()
            .animate({opacity: 1})
			$('#ParkoviTekst').tinyscrollbar_update();
    	});
    	return false;
}
function FunkcijaEvent(){
		$('.SakrijBox').hide();
		$('#EventTekst').animate({opacity: 0}, 'slow', function() {
        	$(this)
            .show()
            .animate({opacity: 1})
			$('#EventTekst').tinyscrollbar_update();
    	});
    	return false;
}