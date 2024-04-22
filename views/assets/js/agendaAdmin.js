/*Funcion para cargar el listado en el Datatable*/
function listarUsuariosTodos() {
  // Realizar la solicitud AJAX para obtener los datos de las fechas
  $.ajax({
      url: "../../controllers/agendaAdminController.php?op=listar_para_tabla",
      type: "get",
      dataType: "json",
      success: function (response) {
          console.log("Datos recibidos correctamente:", response);

          // Destruir la instancia existente de DataTable
          if ($.fn.DataTable.isDataTable('#tbllistado')) {
              $('#tbllistado').DataTable().destroy();
          }

          // Inicializar DataTables con los datos recibidos
          $("#tbllistado").DataTable({
              data: response.aaData,
              columns: [
                  { title: "Fecha" },
                  { title: "Disponiblidad" },
                  { title: "Descripcion" },
                  { title: "Email" },
                  { title: "Telefono" },
                  {
                      title: "Acciones",
                      render: function (data, type, row) {
                          return '<button class="btn btn-danger btn-sm" onclick="eliminarFecha(\'' + row[0] + '\')">Eliminar</button>';
                      }
                  }
              ],
          });
      },
      error: function (xhr, status, error) {
          console.log("Error en la solicitud AJAX:", error);
      },
      iDisplayLength: 5,
  });
}

listarUsuariosTodos();

// Función para eliminar una fecha
function eliminarFecha(fecha) {
    // Mostrar Sweet Alert para confirmar la eliminación de la fecha
    Swal.fire({
        title: '¿Estás seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, elimínalo!'
    }).then((result) => {
        if (result.isConfirmed) {
            // Realizar la solicitud AJAX al controlador para eliminar la fecha
            $.ajax({
                url: "../../controllers/agendaAdminController.php?op=eliminar_fecha",
                type: "POST",
                data: { fecha: fecha },
                success: function (response) {
                    if (response.trim() === 'success') {
                        // Recargar la tabla después de eliminar la fecha
                        listarUsuariosTodos();
                        // Mostrar Sweet Alert de éxito
                        Swal.fire(
                            'Eliminado!',
                            'La fecha ha sido eliminada.',
                            'success'
                        );
                    } else {
                        // Mostrar Sweet Alert de error si hubo un problema al eliminar la fecha
                        Swal.fire(
                            'Error',
                            'Hubo un problema al eliminar la fecha.',
                            'error'
                        );
                    }
                },
                error: function (xhr, status, error) {
                    console.log("Error en la solicitud AJAX:", error);
                    // Mostrar Sweet Alert de error si hubo un error en la solicitud AJAX
                    Swal.fire(
                        'Error',
                        'Hubo un problema al eliminar la fecha.',
                        'error'
                    );
                }
            });
        }
    });
  }
