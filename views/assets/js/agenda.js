document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
       
        //events: '../../../models/agenda.php',
    });
    calendar.render();

    // Procesar formulario de agregar evento
    /*$('#eventForm').submit(function(e) {
        e.preventDefault();
        var eventName = $('#eventName').val();
        var eventDate = $('#eventDate').val();

        // Enviar datos del evento al servidor para guardar
        $.ajax({
            url: 'save_event.php',
            type: 'POST',
            data: {
                eventName: eventName,
                eventDate: eventDate
            },
            success: function(response) {
                $('#addEventModal').modal('hide');
                calendar.refetchEvents();
            }
        });
    });*/
});
