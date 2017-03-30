/* Responsive Nav -----------------------------------------------*/
   $(function () {

     // Create the dropdown base
     $("<select />").appendTo("nav");

     // Populate dropdown with menu items
     $("nav a").each(function () {
         var el = $(this);
         $("<option />", {
             "value": el.attr("href"),
             "text": el.text()
         }).appendTo("nav select");
     });

     // To make dropdown actually work
     // To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
     $("nav select").change(function () {
         window.location = $(this).find("option:selected").val();
     });

 });

/* Smooth scroll One page Nav-----------------------------------------------*/
$(document).ready(function(){
    $('nav').onePageNav({
        currentClass: 'current',
        changeHash: false,
        scrollSpeed: 750,
        scrollOffset: 0,
        scrollThreshold: 0.5,
        filter: '',
        easing: 'swing',
        begin: function() {
            //I get fired when the animation is starting
        },
        end: function() {
            //I get fired when the animation is ending
        },
        scrollChange: function($currentListItem) {
            //I get fired when you enter a section and I pass the list item of the section
        }
    });
});

$(document).ready(function(){

    // prettyPhoto
    $("a[rel^='prettyPhoto']").prettyPhoto({
			default_width: 500,
			default_height: 344
	});
    
});

// Validate Form And Handle Sending Confirmation

$(function() {
    $('.submit').click(function() {
        $("#contact").validate({
            submitHandler: function(form){
                jQuery("#contact").ajaxSubmit({
					url: 'order.php', 
					type: 'post',
        			success: function(msg) {
						window.location.replace("thank-you.html");
        			}
				});
                return false;
            }
        });
    });
});