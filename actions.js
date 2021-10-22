
var agenda = []; 
var gripa = 0; // Agenda de valores difusos de sintomas que llevan a gripa
var faringitis = 0; // Agenda de valores difusos de sintomas que llevan a faringitis

$(document).ready(function () {
   
  //BOTON ENVIAR MENSAJE
  $(".btn-enviar").on('click', function () {

    
    let entrada = $("#input_entrada").val();
    let nodo = $("#nodos").val();
    
    if(entrada === "Si"){

      let nodo2 = nodo * 2;
      $("#nodos").val(nodo2);

    }else if(entrada === "No"){

      let nodo3 = nodo * 2 + 1;
      $("#nodos").val(nodo3);
    }

    alert(nodo);
    
    
  });



});
