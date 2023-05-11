<?php


$arrayRutas = explode("/",$_SERVER['REQUEST_URI']);



if (count(array_filter($arrayRutas)) == 0) {
    

    // Cuando no se hace ninguna peicion a la api
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
 
                $registro = new ControladorClientes();

                $registro->create();
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
            


        }

     }else{
         // cuando se hacen peticiones de un solo curso
         if (array_filter($arrayRutas)[1] == 'cursos' && is_numeric(array_filter($arrayRutas)[2])) { 
    
             $json = array(
         
                 'detalle'=>'Estoy en UN solo curso'
                 
             );
             
             echo json_encode($json, true);  
    
             return;
         }
     }



}