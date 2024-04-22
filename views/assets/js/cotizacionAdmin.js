// Función para cargar el listado en la tabla
function cargarListado(data) {
    var tbody = $("#tbllistado tbody");
    tbody.empty(); // Limpiar contenido previo

    data.forEach(function(item) {
        var row = $("<tr></tr>");
        row.append("<td>" + item.id + "</td>"); // Agregar la columna de ID
        row.append("<td>" + item.nombre + "</td>");
        row.append("<td>" + item.telefono + "</td>");
        row.append("<td>" + item.correo + "</td>");
        row.append("<td>" + item.estilo + "</td>");
        row.append("<td>" + item.descripcion + "</td>");

        // Crear elemento de imagen y establecer la ruta de la imagen como src
        var img = $("<img>").attr("src", item.rutaImagen).css({ "max-width": "100px", "max-height": "100px" });
        var imgCell = $("<td></td>").append(img);
        row.append(imgCell);

        tbody.append(row);
    });
}

// Función para cargar los datos usando AJAX
function cargarDatos() {
    $.ajax({
        url: "../../controllers/cotizacionAdmincontoller.php?op=listar_para_tabla",
        type: "GET",
        dataType: "json",
        success: function(response) {
            console.log("Datos recibidos correctamente:", response);
            cargarListado(response);
        },
        error: function(xhr, status, error) {
            console.log("Error en la solicitud AJAX:", error);
        },
    });
}

// Llamar a la función para cargar los datos al cargar la página
$(document).ready(function() {
    cargarDatos();
});
