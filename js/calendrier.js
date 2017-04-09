$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
        aspectRatio: 2,
        header: {
          left:   'title',
          center: 'agendaWeek,month,listMonth',
          right:  'today prev,next'
        },

        events: {
        url: 'requetes/requeteEvenCalendrier.php',
        type: 'GET',
        error: function(xhr, status, error) {
          alert(xhr.responseText);
        }
    }
    })

});
