<?php
require_once("conexion.php");
if(isset($_SESSION['idusuario'])){
    $datos=new Datos();
    $date = $datos->getTurnos($fecha,$pista,$turno);
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
    <br><br>
    <div class="enlaces">
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
    </div>
    <br><br><br><br>
    <div></div>
    <div class="container col-md-6 col-sm-12">
        <form id="form" action="" method="post">
            <div class="form-group">
                <label class="label" for="">Seleccione Fecha</label>
                <input class="form-control" type="date" name="fecha" id="fecha">
                <br><br>
                <hr>
                <div class="form-group">
                    <label class="label" for="">Seleccione Turno</label>
                    <select class="form-control" name="turno" id="turno">
                        <option value="none">---</option>
                        <option value="1">9:00 a 11:00</option>
                        <option value="2">11:00 a 13:00</option>
                        <option value="3">13:00 a 15:00</option>
                        <option value="4">15:00 a 17:00</option>
                        <option value="5">17:00 a 19:00</option>
                        <option value="6">19:00 a 21:00</option>

                    </select>
                    <br><br>
                    <hr>
                    <label class="label" for="">Seleccione Pista</label>
                    <select class="form-control" name="pista" id="pista">
                        <option value="none">---</option>
                        <option value="1">Pista Azul</option>
                        <option value="4">Pista Pro</option>
                        <option value="3">Pista Roja</option>
                        <option value="2">Pista Verde</option>
                    </select>
                    <br><br>
                    <hr>
                    <input type="submit" class="btn btn-primary" value="Reservar">
                </div>
        </form>
        
    </div>
</body>

</html>