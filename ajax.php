<?php 

//require_once '/controlador.php';
require_once 'modelo.php';


class ajaxEnfermedad
{
    static public function mostrarEnfermedad($id)
    {
        $respuesta = ModeloEnfermedades::mdlMostrarValorDifuso($id);
        echo json_encode($respuesta);
    } 
}

if (isset($_REQUEST['verEnfermedad']) && $_REQUEST['verEnfermedad'] == "ok") {
	ajaxEnfermedad::mostrarEnfermedad($_REQUEST['id']);
}