
<?php
$host="localhost";
    $bd="sitio";
    $usuario="root";
    $contrasenia="";

    //Conexion a base de datos
    try {
        $conexion= new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
    } catch ( Exception $ex) {
        echo $ex->getMessage();
    }

?>