<?php
require_once("conexion.php");
session_start();
if (!isset($_SESSION['idusuario'])) {
    header("Location:login.php");
}
if(isset($_POST["pista"])){
    $idpista = $_POST["pista"];
    $turno = $_POST["turno"];
    $fecha = $_POST["fecha"];
    $jugador1=$_POST["jugador1"];
    $jugador2=$_POST["jugador2"];
    $jugador3=$_POST["jugador3"];
    $jugador4=$_POST["jugador4"];
    $idusuario = $_SESSION['idusuario'];
    $datos = new Datos();
    $datos->reservas($idpista, $idusuario, $fecha, $turno, $jugador1, $jugador2, $jugador3, $jugador4);
    header("Location:portada.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portada</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="js/portada.js"></script>
</head>

<body class="cuerpo">
    <div class="logo col-md-8 col-sm-12">
        <img class="img-fluid" src="img/logo (1).png" alt="">
    </div>
    <br>
    <div class="enlaces link-secondary">
        <a href="contacto.php">Contacto</a>
        <a href="pistas.php">Nuestras pistas</a>
        <a href="nosotros.php">¿Quienes somos?</a>
        <a href="cerrarsesion.php">Cerrar sesión</a>
    </div>
    <br><br><br>
    <div></div>
    <div class="container col-md-6 col-sm-12">
        <form id="form" action="" method="post">
            <div class="form-group">
                <label class="label" for="">Seleccione Pista</label>
                <select class="form-control" name="pista" id="pista">
                    <option value="none">---</option>
                    <option value="1">Pista Azul</option>
                    <option value="4">Pista Pro</option>
                    <option value="3">Pista Roja</option>
                    <option value="2">Pista Verde</option>
                </select>
                <br><br>
                <label class="label" for="">Seleccione Fecha</label>
                <input class="form-control" type="date" name="fecha" id="fecha">
                <br><br>
                <div class="form-group">
                    <label class="label" for="">Seleccione Turno</label>
                    <select class="form-control" name="turno" id="turno">
                    </select>
                    <br><br>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" name="jugador1" placeholder="Jugador 1">
                            <input type="text" class="form-control" name="jugador2" placeholder="Jugador 1">
                        </div>
                        <div class="col-6">
                        <input type="text" class="form-control" name="jugador3" placeholder="Jugador 1">
                            <input type="text" class="form-control" name="jugador4" placeholder="Jugador 1">
                        </div>
                    </div>


                    <input type="submit" class="btn btn-primary" value="Reservar">
                </div>
        </form>

    </div>
</body>

</html>