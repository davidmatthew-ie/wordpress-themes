jQuery(document).ready(function($) {
  
  // add current year to footer
  var d = new Date();
  var thisYear = d.getFullYear();
  $('#this-year').html(thisYear);
	
});
