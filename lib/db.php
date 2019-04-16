<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class DBConnect{
    function conexion(){
        try{
        $dblink = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME,DBUSR, DBPWD,PDO::ERRMODE_SILENT);
        return $dblink;
    }
     catch (Exception $e){
         echo 'Error en la conexión: ',  $e->getMessage(), "\n";
         return null;
     }
    }
}