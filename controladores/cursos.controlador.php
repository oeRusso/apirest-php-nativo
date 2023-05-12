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

    /*===============================
        Crear un curso  
    ===============================*/

    public function create(){
        $json = array(
                
            'detalle'=>'Curso creado'
            
        );
        
        echo json_encode($json, true);   
        
        return;
    }

    /*===============================
        mostrar un solo curso  
    ===============================*/

    public function show($id){
        $json = array(
                
            'detalle'=>'Mostrando el curso con id '.$id
            
        );
        
        echo json_encode($json, true);   
        
        return;
    }

    /*===============================
        editar un curso  
    ===============================*/

    public function update($id){
        $json = array(
                
            'detalle'=>'Curso editado con id '.$id
            
        );
        
        echo json_encode($json, true);   
        
        return;
    }

}