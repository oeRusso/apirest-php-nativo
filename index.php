<?php

require 'controladores/rutas.controlador.php';
require 'controladores/clientes.controlador.php';
require 'controladores/cursos.controlador.php';

require 'modelos/clientes.modelo.php';
require 'modelos/cursos.modelo.php';


$rutas =  new ControladorRutas();

$rutas->index();
