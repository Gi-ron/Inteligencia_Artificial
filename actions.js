
var agenda = []; 
var gripa = 0; // Agenda de valores difusos de sintomas que llevan a gripa
var faringitis = 0; // Agenda de valores difusos de sintomas que llevan a faringitis

$(document).ready(function () {
    //BOTON PARA AÑADIR SINTOMAS
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
                if (response[0].enfermedad == "gripa") {
                    if (gripa == 0) {
                        gripa = parseFloat(response[0].valor);
                    } else {
                        gripa =
                            gripa + (1 - gripa) * parseFloat(response[0].valor);
                    }
                } else if (response[0].enfermedad == "faringitis") {
                    if (faringitis == 0) {
                        faringitis = parseFloat(response[0].valor);
                    } else {
                        faringitis =
                            faringitis +
                            (1 - faringitis) * parseFloat(response[0].valor);
                    }
                }
            },
        });
    });
    //BOTON PARA DAR EL DIAGNOSTICO
    $(".btn-asintomas").on("click", function () {
        if (gripa > faringitis) {
            Swal.fire({
                icon: "success",
                title: "Paciente diagnosticado",
                text: "Enfermedad: "+"gripa "+gripa+" %",
                showConfirmButton: true,
                confirmButtonText: "Cerrar",
                closeOnConfirm: false,
            });
            $("#enfermedad").val("Gripa -" + " Porcentaje: " + gripa + "%" + " || " + " Faringitis porcentaje: " + faringitis + "%");
            $("#tratamiento").val("Analgésico");
        } else if (faringitis > gripa) {
            Swal.fire({
                icon: "success",
                title: "Paciente diagnosticado",
                text: "Enfermedad: "+"faringitis "+faringitis+" %",
                showConfirmButton: true,
                confirmButtonText: "Cerrar",
                closeOnConfirm: false,
            });
            $("#enfermedad").val("Faringitis -" + " Porcentaje: " + faringitis + "%" + " ||"  + " Gripa porcentaje: " + gripa + "%");
            $("#tratamiento").val("Antiinflamatorio");
        } else {
            Swal.fire({
                icon: "warning",
                text: "Paciente no diagnosticado",
                showConfirmButton: true,
                confirmButtonText: "Cerrar",
                closeOnConfirm: false,
            });
            $("#enfermedad").val("Las probabilidades de que la enfermedad sea gripa o faringitis son las mismas");
            $("#tratamiento").val("Realice el diagnostico de nuevo");
        }
       
    });
    //REINICIAR VALORES
    $(".btn-reset").on("click", function () {
        gripa = 0;
        faringitis = 0;
        $("#enfermedad").val("");
        $("#tratamiento").val("");
    });
});
