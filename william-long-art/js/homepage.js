jQuery(document).ready(function($) {
	
  // Change the navbar colour once you hit the trigger element
  var triggerElement = $('#heading-container');
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
      $('html, body').animate(
        { scrollTop: $(hash).offset().top }, 
        800, 
        function() { window.location.hash = hash; }
      );
    }
  });
  
  // add current year to footer
	var d = new Date();
  var thisYear = d.getFullYear();
  $('#this-year').html(thisYear);
	
});
