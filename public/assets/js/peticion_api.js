// public/js/script.js

$(document).ready(function() {
    // Realizar la solicitud a la API al cargar la página
    $.ajax({
        url: 'https://api.openf1.org/v1/drivers?session_key=9158',
        dataType: 'json',
        success: function(data) {
            var select = $('#driversSelect');
            
            // Iterar sobre los datos recibidos y agregar opciones al select
            $.each(data, function(index, driver) {
                select.append($('<option></option>').val(driver.broadcast_name).text(driver.full_name));
            });
        }
    });

    // Manejar el evento de envío del formulario
    $('#selectForm').submit(function(event) {
        event.preventDefault();
        
        var selectedDriver = $('#driversSelect').val();
        
        // Mostrar información del piloto seleccionado
        $.ajax({
            url: 'https://api.openf1.org/v1/drivers?session_key=9158',
            dataType: 'json',
            success: function(data) {
                var driverInfo = $('#driverInfo');
                var selectedDriverData = data.find(driver => driver.broadcast_name === selectedDriver);

                if (selectedDriverData) {
                    driverInfo.html(`
                        <h2>${selectedDriverData.full_name}</h2>
                        <h3>${selectedDriverData.team_name}</h3>
                        <p>País: ${selectedDriverData.country_code}</p>
                        <img src="${selectedDriverData.headshot_url}" alt="Headshot">
                    `);
                    
                    $("body").css("background-color", `#${selectedDriverData.team_colour}`);
                } else {
                    driverInfo.html('<p>No se encontró información para el piloto seleccionado.</p>');
                }
            }
        });
    });
});
