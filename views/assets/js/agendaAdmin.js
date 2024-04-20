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
  if (confirm("¿Estás seguro de que quieres eliminar esta fecha?")) {
      // Realizar la solicitud AJAX al controlador para eliminar la fecha
      $.ajax({
          url: "../../controllers/agendaAdminController.php?op=eliminar_fecha",
          type: "POST",
          data: { fecha: fecha },
          success: function (response) {
              // Recargar la tabla después de eliminar la fecha
              listarUsuariosTodos();
          },
          error: function (xhr, status, error) {
              console.log("Error en la solicitud AJAX:", error);
          }
      });
  }
}
