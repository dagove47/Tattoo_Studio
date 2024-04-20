/*Funcion para cargar el listado en el Datatable*/
function listarUsuariosTodos() {
  tabla = $("#tbllistado").dataTable({
    aProcessing: true, // Activamos el procesamiento de datatables
    aServerSide: true, // Paginación y filtrado del lado del servidor
    dom: "Bfrtip", // Definimos los elementos del control de tabla
    buttons: ["copyHtml5", "excelHtml5", "csvHtml5", "pdf"],
    ajax: {
      url: "../../controllers/agendaController.php?op=listar_para_tabla",
      type: "get",
      dataType: "json",
      success: function (response) {
        console.log("Datos recibidos correctamente:", response);
        // Inicializar DataTables con los datos recibidos
        $("#tbllistado").dataTable({
          data: response.aaData, // Pasar los datos recibidos como el origen de los datos
          destroy: true, // Destruir la tabla existente antes de crear una nueva
          columns: [
            { title: "Fecha" }, // Definir las columnas de la tabla
          ],
        });
      },
      error: function (xhr, status, error) {
        console.log("Error en la solicitud AJAX:", error);
      },
    },
    iDisplayLength: 5,
  });
}

listarUsuariosTodos();
