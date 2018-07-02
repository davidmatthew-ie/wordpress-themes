/*
  Load jQuery in compatibility mode, and handle the 
  smooth scrolling and main logo animation
*/

jQuery(document).ready(function($) {
	
	// Change the navbar colour once you hit the trigger element
  var triggerElement = $('#heronswood-logo');
  var startPos = 0;
  if (triggerElement.length) {
    $(document).scroll(function() { 
      startPos = $(this).scrollTop();
      if(startPos > triggerElement.offset().top - 100)
        $('.navbar-default').css('background-color', 'rgba(0, 0, 0, 0.7)');
      else $('.navbar-default').css('background-color', 'transparent');
    });
  }
  
  // Add smooth scrolling to all links
  $('a').on('click', function(event) {
    if (this.hash !== '') {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({scrollTop: $(hash).offset().top}, 800, function() {
        window.location.hash = hash;
      });
    }
  });
  
  // add the opening animation only once the banner image has loaded
  $(window).load(function() {
    $('#heronswood-logo').css('visibility', 'visible').addClass('logoIntro');
  });
	
});