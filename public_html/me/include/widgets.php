<script type="text/javascript">
$(window).scroll(function(e) {
    var scroller_anchor = $(".scroller_anchor").offset().top;
    if ($(this).scrollTop() >= scroller_anchor && $('#Widgets').css('position') != 'fixed')
    {  
        $('#Widgets').css({
            'position': 'fixed',
            'top': '50px'
        });
        $('.scroller_anchor').css('height', '0px');
    }
    else if ($(this).scrollTop() < scroller_anchor && $('#Widgets').css('position') != 'relative')
    { 
        $('.scroller_anchor').css('height', '0px');

        $('#Widgets').css({
            'position': 'absolute',
            'top': '300px'
        });
    }
});
</script>

<div class="scroller_anchor"></div>
<section id="Widgets">
	<ul>
		<li><a href="/servis"><img src="/images/Servis.jpg"></a></li>
		<li><a href="/rezervni-djelovi"><img src="/images/Rezervni.jpg"></a></li>
		<li><a href="/limarija-lakirnica"><img src="/images/Limarija.jpg"></a></li>
		<li><a href="/rabljena-vozila/"><img src="/images/Rabljena.jpg"></a></li>
		<li><a href="/probna-voznja"><img src="/images/Probna.jpg"></a></li>
	</ul>
</section>