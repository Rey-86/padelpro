<?php
require_once("conexion.php");
$fecha=$_GET["fecha"];
$pista = $_GET["pista"];
$turno = $_GET["turno"];
$datos = new Datos();
$turnosLibres = $datos->getTurnos($fecha, $pista, $turno);
var_dump($turnosLibres);
