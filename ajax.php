<?php 

//require_once '/controlador.php';
require_once 'modelo.php';


class ajaxNodo
{
    static public function mostrarNodo($nodo)
    {
        $respuesta = ModeloArbol::mdlNodo($nodo);
        echo json_encode($respuesta);
    } 
}

if (isset($_REQUEST['verNodo']) && $_REQUEST['verNodo'] == "ok") {
	ajaxNodo::mostrarNodo($_REQUEST['nodo']);
}