//SMOOTH SCROLLING
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
// IMAGE HOVER FADE EFFECT
jQuery( document ).ready( function($) {
    $( " .col-sm-6 a, .col-md-4 a, .col-xs-12 a" ).mouseover( function() {
        $( this ).children( "img" ).stop( true, true ).animate({
            opacity: 0.6
        }, 200, "swing", function() {
            $( this ).animate({
                opacity: 1
            }, 400 );
        });
    });
});