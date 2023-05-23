<?php


class ControladorClientes{


    // Crear un registro


    public function create($datos){


        echo '<pre>'; print_r($datos); echo '</pre>';
        
        return;


        $json = array(
                
            'detalle'=>'Registro guardado'
            
        );
        
        echo json_encode($json, true);   
        
        return;
    }
}