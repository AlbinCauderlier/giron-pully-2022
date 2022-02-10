/**
 * 
 * Animation of the scrolls in the same page
 */
$(function () {
  $('a[href*=\\#]:not([href=\\#])').click(function () {
    // DurÃ©e en milli-seconde du scroll
    var scroll_duration = 700;

    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {      
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        // Nouvelle position ciblÃ©e = [Position de la cible] - [Hauteur du header] - [Une marge d'esthÃ©tique (optionnal because scrollspy bugs)] 
        var vertical_delta = target.offset().top - $('header').height() -30;
        $('html,body').animate({scrollTop: vertical_delta}, scroll_duration);
        return false;
      }
    }
  });
});


$(document).ready(function () {
	// Not display "Back to top" button before the scroll
	$(".bottom-link").css({"display":"none"});

	//Display the tooltips
	$('[data-toggle="tooltip"]').tooltip();

	//Display the icones
	feather.replace();

  $('.carousel').carousel({
    interval: 5000
  })

});



var bottom_link_offset = 200;
var fixed_menu_header_offset = 20;
var card_content_offset = 120;

$(window).scroll(function(){
	if(bottom_link_offset > $(this).scrollTop()){
		$(".bottom-link").css({"display":"none"});
	}
	else{
		$(".bottom-link").removeAttr('style');
	}

	// Fixed and scrollspy menus WITHOUT a streamer
	if( $(this).scrollTop() > card_content_offset+fixed_menu_header_offset ){
		$("aside #toc").css({"position":"fixed", "top": $("header").height()+fixed_menu_header_offset, "width":"inherit", "max-width":"inherit"});
	}
	else{
		$("aside #toc").removeAttr('style');
	}

	// Fixed and scrollspy menus WITH a streamer
	if( $(this).scrollTop() > $("section#streamer").height()+card_content_offset+fixed_menu_header_offset ){
		$("aside nav#streamer-toc").css({"position":"fixed","top": $("header").height()+fixed_menu_header_offset});
	}
	else{
		$("aside nav#streamer-toc").removeAttr('style');
	}
});





$(function(){
  
  setInterval( function() {
    var hours = new Date().getHours();
    var mins = new Date().getMinutes();
    var hdegree = hours * 30 + (mins / 2);
    var hrotate = "rotate(" + hdegree + "deg)";
    
    $(".hand").css("opacity","1");
    
    $("#hour").css({
      "-webkit-transform" : hrotate,
      "-moz-transform" : hrotate,
      "-ms-transform" : hrotate,
      "-o-transform" : hrotate,
      "transform" : hrotate
    });
    
  }, 1000 );
      
  setInterval( function() {
    var mins = new Date().getMinutes();
    var mdegree = mins * 6;
    var mrotate = "rotate(" + mdegree + "deg)";
    
    $("#minute").css({
      "-webkit-transform" : mrotate,
      "-moz-transform" : mrotate,
      "-ms-transform" : mrotate,
      "-o-transform" : mrotate,
      "transform" : mrotate
    });
    
  }, 1000 );
  
});
