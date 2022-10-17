<?php
class controladorMapa
{
    //llamada a la plantilla.php
    public function plantilla(){
        include "vistas/plantilla.php"; 
    }
        //Llamada a las tablas de la base de datos
    static public function obtenerHorariosCursos($item, $valor){
        $tabla = "dbo.Seccion_Detalle"; 
        $respuesta = modeloMapa::modeloMapaDatos($tabla,$item,$valor); 
        return $respuesta; 
    }
    static public function obtenerLaboratorio($item,$valor){
        $tabla = "dbo.Laboratorios"; 
        $respuesta = modeloMapa::modeloMapaDatos($tabla,$item,$valor); 
        return $respuesta; 
    }
    static public function obtenerCursos($item,$valor){
        $tabla = "dbo.Curso"; 
        $respuesta = modeloMapa::modeloMapaDatos($tabla,$item,$valor); 
        return $respuesta; 
    }
    
}