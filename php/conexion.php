<?php
$equipo= "localhost";
$namebd= "vampcat";
$puerto= "5432";
$usuario= "postgres";
$clave= "21579550";

$conexion= pg_connect("host=$equipo dbname=$namebd port=$puerto user=$usuario password=$clave");

if($conexion) 
{ 
    pg_set_client_encoding($conexion, "UTF8");
    echo "conexione xitosa";
}
else 
{ echo "Ha ocurrido un error"; 
}
?>