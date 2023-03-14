<?php

require_once("conexion.php");

if(isset($_POST['nombre'])){
    $usuario=$_POST['nombre'];
    $email = $_POST['email'];
    $telefono=$_POST['telefono'];
    $datos=new Datos();
    if($datos->registrar($usuario,$email,$telefono)){

 header('Location: login.php');

        exit();
}else{
    $msj="El nombre de usuario ya existe";
}
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse Padel Pro</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <br>
    <div class="logo col-md-8 col-sm-12">
        <img class="img-fluid" src="img/logo (1).png" alt="">
    </div>
    <br>
    <div id="cuerpo" class="container col-md-6 col-sm-12">
        <br>
        <form action="" method="post">
            <div class="form-group">
                <label for="usuario">Nombre</label>
                <input class="form-control col-md-6 col-sm-12" required type="text" name="nombre" id="nombre">
            </div>
            <div class="form-group">
                <label for="usuario">Email</label>
                <input class="form-control col-md-6 col-sm-12" required type="email" name="email" id="email">
            </div>
            <br>
            <div class="form-group">
                <label for="password">Teléfono</label>
                <input class="form-control col-md-6 col-sm-12" required type="number" name="telefono" id="telefono">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Registrarse">
            </div>
        </form>        
    </div>
    
</body>
</html>