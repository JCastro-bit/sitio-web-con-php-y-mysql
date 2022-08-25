<!doctype html>
<html lang="en">

<head>
    <title>Inicio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include("favicon.php");?>

    <link rel="stylesheet" href="http://localhost/sitio-web-con-php-y-mysql/css/bootstrap.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>    
    <?php $url="http://".$_SERVER['HTTP_HOST']."/sitio-web-con-php-y-mysql"?>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Administrador del sitio web <span
                    class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/inicio.php">Inicio</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/productos.php">Libros</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/cerrar.php">Cerrar sesión</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>">Ver sitio web</a>
        </div>
        <div>
            <?php
                    // Obteniendo la fecha actual del sistema con PHP
                    $fechaActual = date('d-m-Y');   
                    echo $fechaActual;
                ?>
        </div>
    </nav>
    <div class="container">
        <br>
        <div class="row">