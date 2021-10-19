//Array que guarda las enfermedades segun el sintoma
var agenda = []; //Array que guarda el elemento mas repetido 
var contador1 = 0;
var contador2 = 0;

$(document).ready(function () {

  $(".btn-sintoma").click(function (e) {
    e.preventDefault();

    let consecuente; //Variable que guarda el sintoma seleccionado
    consecuente = $(this).val();

    let datos = new FormData();
    datos.append("verEnfermedad", "ok");
    datos.append("id", consecuente);
    $.ajax({
      type: "POST",
      url: "ajax.php",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      success: function (response) {
        agenda.push(response[0].enfermedad);
      },
    });
  });

  $(".btn-asintomas").on("click", function () {
    contador1 = 0;
    contador2 = 0;

    for (let index = 0; index < agenda.length; index++) {
        if(agenda[index] == "gripa"){

          contador1 = contador1 + 1;

        } else{

          contador2 = contador2 + 1;
        }
    }

    if (contador1>contador2) {

      Swal.fire({
        icon: "success",
        text: "Paciente diagnosticado",
        showConfirmButton: true,
        confirmButtonText: "Cerrar",
        closeOnConfirm: false,
      });
      $("#enfermedad").val("Gripa");
      $("#tratamiento").val("Analgésico");     
    }else{

      Swal.fire({
        icon: "success",
        text: "Paciente diagnosticado",
        showConfirmButton: true,
        confirmButtonText: "Cerrar",
        closeOnConfirm: false,
      });
      $("#enfermedad").val("Faringitis");
      $("#tratamiento").val("Antiinflamatorio");
    }
  });

  $(".btn-reset").on('click', function () {

    contador1 = 0;
    contador2 = 0;
    agenda.length = 0;
    $("#enfermedad").val("");
    $("#tratamiento").val("");
  });
});
