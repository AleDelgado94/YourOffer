<?php

// Parametros a configurar para la conexion de la base de datos

$hotsdb = "localhost";    // sera el valor de nuestra BD
$basededatos = "labasededatos";    // sera el valor de nuestra BD

$usuariodb = "elusuario";    // sera el valor de nuestra BD
$clavedb = "laclave";    // sera el valor de nuestra BD

$tabla_db1 = "unatabla";    // sera el valor de una tabla
$tabla_db2 = "otratabla";    // sera el valor de otra tabla

// Fin de los parametros a configurar para la conexion de la base de datos

$conexion_db = mysql_connect("$hotsdb","$usuariodb","$clavedb")
    or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE");
    $db = mysql_select_db("$basededatos", $conexion_db)
    or die ("La Base de Datos <b>$basededatos</b> NO EXISTE");
?>
