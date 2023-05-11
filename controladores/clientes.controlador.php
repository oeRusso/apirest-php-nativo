<?php


class ControladorClientes{


    // Crear un registro


    public function create(){
        $json = array(
                
            'detalle'=>'Estoy en el registro'
            
        );
        
        echo json_encode($json, true);   
        
        return;
    }
}