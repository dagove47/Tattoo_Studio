

/*function listarFechas() {
    tabla = $('#tbllistado').DataTable({
      aProcessing: true, //activamos el procesamiento de datatables
      aServerSide: true, //paginacion y filtrado del lado del serevr
      dom: 'Bfrtip', //definimos los elementos del control de tabla     
      ajax: {
        url: '../../controllers/agendaController.php?op=listar_para_tabla',
        type: 'get',
        dataType: 'json',
        error: function (e) {
          console.log(e.responseText);
        },
        bDestroy: true,
        iDisplayLength: 5,
      },
    })

  }*/

  function listarFechas() {
    $.ajax({
        url: '../../controllers/agendaController.php?op=listar_para_tabla',
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            // Iteramos sobre los datos recibidos y los agregamos a la tabla
            $.each(response.aaData, function (index, value) {
                $('#tbllistado tbody').append('<tr><td>' + value + '</td></tr>');
            });
        }
    

    });

    $('#tbllistado').DataTable({
        aProcessing: true, //activamos el procesamiento de datatables
        aServerSide: true, //paginacion y filtrado del lado del serevr
        dom: 'Bfrtip', //definimos los elementos del control de tabla 
    });
}

listarFechas();


/*function listarFechas() {
 
  var data = ["2024-04-01", "2024-04-02", "2024-04-03"];

  // Obtener la referencia al cuerpo de la tabla

  var tableBody = $("#tbllistado tbody");

  // Llenar el cuerpo de la tabla con los datos

  $.each(data, function (index, value) {
    tableBody.append("<tr><td>" + value + "</td></tr>");
  });

  // Inicializar la tabla con DataTables

  tabla = $('#tbllistado').DataTable({
    "processing": true, 
    "dom": 'Bfrtip', 
    "destroy": true,
    "iDisplayLength": 5,     
      "sEcho": 1,
    "iTotalRecords": 3,
    "iTotalDisplayRecords":3 
    
  });
}*/

