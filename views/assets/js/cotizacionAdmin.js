
var tabla;

function listarCotizaciones() {
    
    if (!tabla) {
        tabla = $("#tbllistado").DataTable({
            processing: true, 
            serverSide: true, 
            dom: "Bfrtip", 
            buttons: ["copyHtml5", "excelHtml5", "csvHtml5", "pdf"],
            ajax: {
                url: "../../controllers/cotizacionAdmincontoller.php?op=listar_para_tabla",
                type: "GET",
                dataType: "json",
                success: function(response) {
                    console.log("Datos recibidos correctamente:", response);
                },
                error: function(xhr, status, error) {
                    console.log("Error en la solicitud AJAX:", error);
                },
            },
            columns: [
                { title: "ID" }, 
                { title: "Nombre" },
                { title: "Teléfono" },
                { title: "Correo" },
                { title: "Estilo" },
                { title: "Descripción" },
                {
                    title: "Imagen",
                    render: function(data, type, row) {
                        return '<img src="' + data + '" style="max-width: 100px; max-height: 100px;">';
                    }
                },
                {
                    title: "Acciones",
                    render: function(data, type, row) {
                        return '<button class="btn btn-danger btn-sm btnEliminar" data-id="' + row[0] + '">Eliminar</button>';
                    }
                }
            ],
            pageLength: 5,
        });

      
        $("#tbllistado").on("click", ".btnEliminar", function() {
            var id = $(this).data("id");
            if (confirm("¿Estás seguro de que quieres eliminar este registro?")) {
                eliminarCotizacion(id);
            }
        });
    } else {
        // Si la tabla ya está inicializada, solo recargar los datos
        tabla.ajax.reload(null, false); 
    }
}


function eliminarCotizacion(id) {
    $.ajax({
        url: "../../controllers/cotizacionAdmincontoller.php?op=eliminar",
        type: "POST",
        data: { id: id },
        dataType: "json",
        success: function(response) {
            if (response.success) {
               
                tabla.ajax.reload(null, false);
                alert("Cotización eliminada correctamente.");
            } else {
                alert("Error al eliminar la cotización.");
            }
        },
        error: function(xhr, status, error) {
            console.log("Error en la solicitud AJAX:", error);
        }
    });
}


listarCotizaciones();

