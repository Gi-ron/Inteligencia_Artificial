<?php 

class ControladorPlantilla
{
    public function ctrPlantilla(){

        include "plantilla.php";
    }
}

class ControladorArbol
{
    public function ctrNodos(){

        $nodos = 1;

        if(isset($_POST['nodos'])){

            $nodos = $_POST['nodos'];
        
        }

        $nodoSi = $nodos * 2;
        $nodoNo = $nodos * 2 + 1;

        
    }
}

?>