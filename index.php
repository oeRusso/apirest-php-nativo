<?php

require 'controladores/rutas.controlador.php';
require 'controladores/clientes.controlador.php';
require 'controladores/cursos.controlador.php';

$rutas =  new ControladorRutas();

$rutas->index();
