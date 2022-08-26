<?php

    session_start();    

    if($_POST){
        if(($_POST['usuario']=="javiercastro")&&($_POST['contrasenia']=="sistema")) {
            $_SESSION['usuario']=="ok";
            $_SESSION['nombreUsuario']=="JavierCastro";
            header('Location:inicio.php');  
        }else{
             $mensaje="Error: El usuario o contrasena son incorrectos";
        }
         
    }
?>

<!doctype html>
<html lang="en">
<head>
    <title>Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="../img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
    <link rel="manifest" href="./img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- favicon -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://localhost/sitio-web-con-php-y-mysql/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <br><br><br><br>
                <div class="card">
                    <div class="card-header">
                        Login 🔒
                    </div>
                    <div class="card-body">
                <?php if(isset($mensaje)) {?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $mensaje; ?>
                    </div>
                <?php }?>
                        <form method="POST">
                            <div class="form-group">
                                <label>Usuario</label>
                                <input require type="text" class="form-control" name="usuario"
                                    placeholder="Introduzca el usuario">

                            </div>
                            <div class="form-group">
                                <label>Contraseña</label>
                                <input require type="password" class="form-control" name="contrasenia" placeholder="Contraseña">
                            </div>
                            <button type="submit" class="btn btn-primary">Entrar al administrador</button>
                        </form>


                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>