<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portada</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="cuerpo">
    <div class="logo col-md-8 col-sm-12">
        <img class="img-fluid" src="img/logo (1).png" alt="">
    </div>
    <br><br><br><br>
    <div ></div>
    <div class="container col-md-6 col-sm-12">
        <form id="form" action="" method="post">
            <div class="form-group" >
                <label class="label" for="">Seleccione Turno</label>
                <select class="form-control" name="turno" id="turno">
                    <option value="none">---</option>
                    <option value="turno1">9:00 a 11:00</option>
                    <option value="turno2">11:00 a 13:00</option>
                    <option value="turno3">13:00 a 15:00</option>
                    <option value="turno4">15:00 a 17:00</option>
                    <option value="turno5">17:00 a 19:00</option>
                    <option value="turno6">19:00 a 21:00</option>
                    
                </select>
                <br><br><hr>
                <label class="label" for="">Seleccione Pista</label>
                <select class="form-control" name="turno" id="turno">
                    <option value="none">---</option>
                    <option value="pistaAzul">Pista Azul</option>
                    <option value="pistaPro">Pista Pro</option>
                    <option value="pistaRoja">Pista Roja</option>
                    <option value="pistaVerde">Pista Verde</option>
                </select>
                <br><br><hr>
                <input type="submit" class="btn btn-primary" value="Reservar">
            </div>
        </form>
    </div>
</body>

</html>