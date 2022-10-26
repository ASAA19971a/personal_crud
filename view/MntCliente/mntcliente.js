var tabla;
function init() {
  $("#cliente_form").on("submit", function (e) {
    guardaryeditar(e);
  });
}

//TODO document Ready para presentar DataTable
$(document).ready(function () {
  tabla = $("#cliente_data")
    .dataTable({
      aProcessing: true, //Activamos el procesamiento del datatables
      aServerSide: true, //Paginación y filtrado realizados por el servidor
      dom: "Bfrtip", //Definimos los elementos del control de tabla
      buttons: ["copyHtml5", "excelHtml5", "csvHtml5", "pdf"],
      ajax: {
        url: "../../controller/cliente.php?op=listar", //NOTE - Se llama al controlador
        type: "get",
        dataType: "json",
        error: function (e) {
          console.log(e.responseText);
        },
      },
      bDestroy: true,
      responsive: true,
      bInfo: true,
      iDisplayLength: 10, //Por cada 10 registros hace una paginación
      order: [[0, "asc"]], //Ordenar (columna,orden)
      language: {
        sProcessing: "Procesando...",
        sLengthMenu: "Mostrar _MENU_ registros",
        sZeroRecords: "No se encontraron resultados",
        sEmptyTable: "Ningún dato disponible en esta tabla",
        sInfo: "Mostrando un total de _TOTAL_ registros",
        sInfoEmpty: "Mostrando un total de 0 registros",
        sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
        sInfoPostFix: "",
        sSearch: "Buscar:",
        sUrl: "",
        sInfoThousands: ",",
        sLoadingRecords: "Cargando...",
        oPaginate: {
          sFirst: "Primero",
          sLast: "Último",
          sNext: "Siguiente",
          sPrevious: "Anterior",
        },
        oAria: {
          sSortAscending:
            ": Activar para ordenar la columna de manera ascendente",
          sSortDescending:
            ": Activar para ordenar la columna de manera descendente",
        },
      },
    })
    .DataTable();
});

//NOTE - Funcion Guardar

function guardaryeditar(e) {
  e.preventDefault();
  var formData = new FormData($("#cliente_form")[0]);

  $.ajax({
    url: "../../controller/cliente.php?op=guardaryeditar",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function (datos) {
      $("#cliente_form")[0].reset();
      $("#modalmantenimiento").modal("hide");
      $("#cliente_data").DataTable().ajax.reload();

      swal.fire("Registro", "El cliente se registro correctamente.", "success");
      $("#cliente_data").DataTable().ajax.reload();
    },
  });
}

//NOTE - Funcion Editar
function editar(cliente_id) {
  $("#mdltitulo").html("Editar Registro");
  $.post(
    "../../controller/cliente.php?op=mostrar",
    { cliente_id: cliente_id },
    function (data) {
      data = JSON.parse(data);
      $("#cliente_id").val(data.cliente_id);
      $("#cliente_nombre").val(data.cliente_nombre);
      $("#cliente_mail").val(data.cliente_mail);
      $("#cliente_celular").val(data.cliente_celular);
    }
  );
  $("#modalmantenimiento").modal("show");
}

//NOTE - Funcion Eliminar
function eliminar(cliente_id) {
  Swal.fire({
    title: "CRUD",
    text: "Desea eliminar el Registro",
    icon: "error",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si",
    cancelButtonText: "No",
    reverseButtons: true,
  }).then((result) => {
    if (result.isConfirmed) {
      $.post(
        "../../controller/cliente.php?op=eliminar",
        { cliente_id: cliente_id },
        function (data) {}
      );
      $("#cliente_data").DataTable().ajax.reload();

      Swal.fire(
        "Eliminado!",
        "El registro se ha eliminado correctamente.",
        "success"
      );
    }
  });
}

$(document).on("click", "#btnnuevo", function () {
  $("#cliente_id").val("");
  $("#mdltitulo").html("Nuevo Registro");
  $("#cliente_form")[0].reset();
  $("#modalmantenimiento").modal("show");
});
init();
