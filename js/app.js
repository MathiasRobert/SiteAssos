startApp();

$.get("includes/requeteEvenCalendrier.php", function( data ) {
  console.log(data);
}, "json");

