<?php


class ControladorClientes{


    // Crear un registro


    public function create($datos){

        /*===============================
            Validar nombre
         ===============================*/

        if (isset($datos['nombre']) && !preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ]+$/',$datos['nombre'])){
            
            $json = array(
             'status'=>404,
             'detalle'=>'Error en el campo nombre, solo se permiten letras'
                
            );
            
            echo json_encode($json, true);   
            
            return;
        } 

         /*===============================
            Validar apellido
         ===============================*/

         if (isset($datos['apellido']) && !preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ]+$/',$datos['apellido'])){
            
            $json = array(
             'status'=>404,
             'detalle'=>'Error en el campo apellido, solo se permiten letras'
                
            );
            
            echo json_encode($json, true);   
            
            return;
        } 

        /*===============================
            Validar email
         ===============================*/

         if (isset($datos['apellido']) && !preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$datos['email'])){
            
            $json = array(
             'status'=>404,
             'detalle'=>'Error en el campo email, coloca un email valido'
                
            );
            
            echo json_encode($json, true);   
            
            return;
        } 


        $json = array(
                
            'detalle'=>'Registro guardado'
            
        );
        
        echo json_encode($json, true);   
        
        return;
    }
}