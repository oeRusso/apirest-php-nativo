<?php

class ControladorCursos{

    /*===============================
        Mostrar todos los registros  
    ===============================*/

    public function index(){
        $json = array(
                
            'detalle'=>'Mostrando todos los cursos'
            
        );
        
        echo json_encode($json, true);   
        
        return;
    }
}