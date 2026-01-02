<?php
$equipo= "";
$namebd= "";
$puerto= "";
$usuario= "";
$clave= "";

$conexion= pg_connect("host=$equipo dbname=$namebd port=$puerto user=$usuario password=$clave");

if($conexion) 
{ 
    pg_set_client_encoding($conexion, "UTF8");
    echo "conexion exitosa";
}
else 
{ 
    echo "Ha ocurrido un error"; 
}
?>