<?php

class ControladorCursos{

    /*===============================
        Mostrar todos los registros  
    ===============================*/

    public function index(){

        $cursos = ModeloCursos::index('cursos');
        
        $json = array(

            'status'=>200,
            'total_registros'=>count($cursos),
            'detalle'=>$cursos
            
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

    /*===============================
        Eliminar un curso  
    ===============================*/

    public function delete($id){
        $json = array(
                
            'detalle'=>'Se ha borrado un curso con id '.$id
            
        );
        
        echo json_encode($json, true);   
        
        return;
    }

}