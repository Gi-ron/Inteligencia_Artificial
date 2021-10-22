<?php
//include_once '../SE1.0/conexion.php';
require_once 'conexion.php';


class ModeloArbol
{
    static public function mdlNodo($nodo)
    {

        $stmt = Conexion::conectar()->prepare("SELECT texto,pregunta FROM arbol
                                               WHERE nodo = :nodo");

        $stmt->bindParam(":nodo",  $nodo, PDO::PARAM_INT);
        $stmt->execute();
        $retorno = $stmt->fetchAll();
        $stmt->closeCursor();
        return $retorno;
    }
}
