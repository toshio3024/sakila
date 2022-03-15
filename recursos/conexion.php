<?php

$hostaname = "localhost";
$username = "root";
$password = "";
$database = "sakila";


// conexion para 00webhost
if ($_SERVER['HTTP_HOST'] == 'toshioestevez.000webhostapp.com/') {
    $username = "id18475138_root";
    $password = "h}Sd*tdWXWB^M*8o";
    $database = "id18475138_sakila";
}
$conexion = mysqli_connect($hostaname, $username, $password, $database)
    or die("no se pudo conectar a la base: " . mysqli_connect_error());
