<?php
class Conexion
{
    /* ===================================================
           CONEXION A LA DB
        ===================================================*/
    static public function conectar()
    {

        # CONEXION PRUEBAS (local)
        $dsn = "mysql:host=localhost;dbname=sistema_medico";
        $username = "root";
        $password = "";

        $link = new PDO(
            $dsn,
            $username,
            $password
        );

        $link->exec("set names utf8");

        

        return $link;
    }
}
?>