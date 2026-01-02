<?php
/*include 'conexion.php';

if(isset($_POST['id_libro']) && $_POST['id_libro'] !== "")
{
    $id_libro = $_POST['id_libro'];
    $png = $_POST['png']; 
    //if($png == "") { $png = null; }
    $png = ($png === null) ? "NULL" : "'$png'";
    $pais = $_POST['tipo_pais'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editorial = $_POST['editorial'];
    //if($editorial == "") { $editorial = null; }
    $editorial = ($editorial === null) ? "NULL" : "'$editorial'";
    $idioma = $_POST['idioma'];
    $anio_publicacion = $_POST['anio_publicacion'];
    //if($anio_publicacion == "") { $anio_publicacion = null; }
    $anio_publicacion = ($anio_publicacion === null) ? "NULL" : "'$anio_publicacion'";
    $coleccion = $_POST['tipo_coleccion'];
    $genero = $_POST['genero']; 
    $personaje = $_POST['personaje'];
    $resumen = $_POST['resumen'];
    $valoracion = $_POST['valoracion'];
    $detalles = $_POST['detalles'];
    //if($detalles == "") { $detalles = null; }
    $detalles = ($detalles === null) ? "NULL" : "'$detalles'";
    
    $sql="INSERT INTO cliente VALUES('".$id_libro."', '".$png."', '".$pais."', '".$titulo."', '".$autor."', '".$editorial_sql."', '".$idioma."', '".$anio_publicacion.'", '".$coleccion."', '".$genero."', '".$personaje."', '".$resumen."', '".$valoracion."', '".$detalles_sql."';
    $insercion= pg_query($conexion,$sql);   
    if($insercion)
    {
        echo "Registro exitoso";
    }
    else
    {
        echo "Registro fallido";
    }
}
else
{   
    echo "Datos incompletos, por favor ingrese lo solicitado";
}*/


/*include 'conexion.php';

if (isset($_POST['id_libro']) && $_POST['id_libro'] !== "") {

    $id_libro = $_POST['id_libro'];

    $png = $_POST['png'];
    $png = ($png == "") ? "NULL" : "'$png'";

    $pais = $_POST['tipo_pais'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];

    $editorial = $_POST['editorial'];
    $editorial = ($editorial == "") ? "NULL" : "'$editorial'";

    $idioma = $_POST['tipo_idioma'];

    $anio_publicacion = $_POST['anio_publicacion'];
    $anio_publicacion = ($anio_publicacion == "") ? "NULL" : "'$anio_publicacion'";

    $coleccion = $_POST['tipo_coleccion'];
    $genero = $_POST['genero'];
    $personaje = $_POST['personaje'];
    $resumen = $_POST['resumen'];
    $valoracion = $_POST['valoracion'];

    $detalles = $_POST['detalles'];
    $detalles = ($detalles == "") ? "NULL" : "'$detalles'";

    $sql = "
        INSERT INTO cliente
        VALUES (
            '$id_libro',
            $png,
            '$pais',
            '$titulo',
            '$autor',
            $editorial,
            '$idioma',
            $anio_publicacion,
            '$coleccion',
            '$genero',
            '$personaje',
            '$resumen',
            '$valoracion',
            $detalles
        )
    ";

    $insercion = pg_query($conexion, $sql);

    if ($insercion) {
        echo "Registro exitoso";
    } else {
        echo "Registro fallido";
    }

} else {
    echo "Datos incompletos, por favor ingrese lo solicitado";
}*/
include 'conexion.php';

if (isset($_POST['titulo']) && $_POST['titulo'] !== "") {

    //$id_libro = $_POST['id_libro'];

    $png = $_POST['png'];
    $png = ($png == "") ? "NULL" : "'$png'";

    $pais = $_POST['tipo_pais'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];

    $editorial = $_POST['editorial'];
    $editorial = ($editorial == "") ? "NULL" : "'$editorial'";

    $idioma = $_POST['tipo_idioma'];

    $anio_publicacion = $_POST['anio_publicacion'];
    $anio_publicacion = ($anio_publicacion == "") ? "NULL" : "'$anio_publicacion'";

    $coleccion = $_POST['tipo_coleccion'];
    $genero = $_POST['genero'];
    $personaje = $_POST['personaje'];
    $resumen = $_POST['resumen'];
    $valoracion = $_POST['valoracion'];

    $detalles = $_POST['detalles'];
    $detalles = ($detalles == "") ? "NULL" : "'$detalles'";

    $sql = "
        INSERT INTO libro
        (png, pais, titulo, autor, editorial, idioma, anio_publicacion, 
         coleccion, genero, personaje, resumen, valoracion, detalles)
        VALUES (
            $png,
            '$pais',
            '$titulo',
            '$autor',
            $editorial,
            '$idioma',
            $anio_publicacion,
            '$coleccion',
            '$genero',
            '$personaje',
            '$resumen',
            '$valoracion',
            $detalles
        )
        RETURNING id_libro;
    ";

    $insercion = pg_query($conexion, $sql);

    if ($insercion) {
       $fila = pg_fetch_assoc($insercion);
        echo "Registro exitoso. ID generado automáticamente: " . $fila['id_libro'];
    } else {
        echo "Registro fallido";
    }

} else {
    echo "Datos incompletos, por favor ingrese lo solicitado";
}
?>