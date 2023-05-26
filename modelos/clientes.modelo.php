<?php

require_once 'conexion.php';

class ModeloCliente{
    
    /*===============================
        Mostrar todos los registros
    ===============================*/

    static public function index($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt ->execute();

        return $stmt->fetchAll();

        
    }
}
