<?php

require_once("conexion.php");

session_start();
if (isset($_SESSION['idusuario'])) {
    header('Location: portada.php');
}
if (isset($_POST['usuario'])) {
    $username = $_POST['usuario'];
    $email = $_POST['email'];
    $datos = new Datos();
    $user = $datos->login($username, $email);
    if ($user != null) {
        $_SESSION['idusuario'] = $user['idusuario'];
        $_SESSION['nombre'] = $user['nombre'];
        header('Location: portada.php');
    } else {
        $msj = 'Usuario o contraseña incorrecta';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padel Pro</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="fondo">
    <div class="logo col-md-8 col-sm-12">
        <img class="img-fluid" src="img/logo (1).png" alt="">
    </div>
    <br>
    <div class="container col-md-6 col-sm-12">
        <form action="" method="post">
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input class="form-control col-md-6 col-sm-12" type="text" name="usuario" id="usuario">
            </div>
            <br>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control col-md-6 col-sm-12" type="email" name="email" id="email">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <hr>
            <div class="form-group col-md-8 col-sm-12">
                <p class="p">Si todavía no está registrado pulse <a href="registro.php">aquí</a></p>
                <img src="img/raquetas.avif" alt="">
            </div>
        </form>
    </div>
</body>

</html>