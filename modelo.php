<?php 
//include_once '../SE1.0/conexion.php';
require_once 'conexion.php';


class ModeloEnfermedades
{
    static public function mdlMostrarEnfermedad($id)
    {

        $stmt = Conexion::conectar()->prepare("SELECT enfer.nombre AS enfermedad FROM reglas r
                                               LEFT JOIN consecuente enfer ON r.id_consecuente = enfer.id_consecuente
                                               LEFT JOIN hechos hecho ON r.id_antecedente = hecho.idhechos
                                               WHERE hecho.idhechos = :id");

         $stmt->bindParam(":id",  $id, PDO::PARAM_INT);
         $stmt->execute();
         $retorno = $stmt->fetchAll();
         $stmt->closeCursor();
         return $retorno;
    }
}