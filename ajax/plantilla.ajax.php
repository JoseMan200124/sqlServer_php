<?php

require_once"../controladores/portafolio.controlador.php";
require_once"../modelos/portafolio"; 

class ajaxMapa{
    public function ajaxEstiloMapa(){
        $respuesta = controladorMapa::plantilla();
        echo json_decode($respuesta);
    }
}

$objeto = new ajaxMapa();
$objeto -> ajaxEstiloMapa();