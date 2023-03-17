<?php
require_once("conexion.php");
$fecha=$_GET["fecha"];
$pista = $_GET["pista"];
$datos = new Datos();
$turnosLibres = $datos->getTurnos($fecha, $pista);
echo json_encode($turnosLibres);
