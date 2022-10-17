<?php
//conexion a la base de datos
Class conexionBaseDeDatos{
    static public function conectar(){
        $user = "#usuario";
        $pass = "#contra"; 
        $dbh = new PDO("sqlsrv:Server=#iP_servidor,1433;Database=#nombre", $user , $pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        return $dbh; 
    }
}