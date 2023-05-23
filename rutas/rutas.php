<?php


$arrayRutas = explode("/",$_SERVER['REQUEST_URI']);



if (count(array_filter($arrayRutas)) == 0) {
    

    // Cuando no se hace ninguna peticion a la api
    $json = array(
    
        'detalle'=>'no encontrado'
        
    );
    
    echo json_encode($json, true);

    return;
}else{

    if (count(array_filter($arrayRutas)) == 1) {
        // Cuando se hacen peticiones desde registro

        if (array_filter($arrayRutas)[1] == 'registro') {
            
                 /*===============================
                     Peticiones de tipo POST 
                  ===============================*/

            if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

                /*===============================
                 Capturando los datos
                ===============================*/
                $datos = array('nombre' => $_POST['nombre'],
                               'apellido' => $_POST['apellido'],
                               'email' => $_POST['email']);

                $registro = new ControladorClientes();

                $registro->create($datos);
            }
            
        }

            // Cuando se hacen peticiones desde cursos

        if (array_filter($arrayRutas)[1] == 'cursos') {
           
            /*===============================
                Peticiones de tipo GET 
            ===============================*/
            if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'GET') {
 
                $cursos = new ControladorCursos();

                $cursos->index();
            }
            

            /*===============================
                Peticiones de tipo POST 
            ===============================*/
            if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
 
                $crearcursos = new ControladorCursos();

                $crearcursos->create();
            }
            
        }

     }else{
         // cuando se hacen peticiones de un solo curso
         if (array_filter($arrayRutas)[1] == 'cursos' && is_numeric(array_filter($arrayRutas)[2])) { 

            /*===============================
            Peticiones de tipo GET 
            ===============================*/
            if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'GET') {
                $mostrarCurso = new ControladorCursos();

                $mostrarCurso->show(array_filter($arrayRutas)[2]);

               }

            /*===============================
            Peticiones de tipo PUT 
            ===============================*/
            if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'PUT') {
                $editarCurso = new ControladorCursos();

                $editarCurso->update(array_filter($arrayRutas)[2]);

               }

            /*===============================
            Peticiones de tipo DELETE 
            ===============================*/
            if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'DELETE') {
                $eliminarCurso = new ControladorCursos();

                $eliminarCurso->delete(array_filter($arrayRutas)[2]);

               }
         }
     }



}