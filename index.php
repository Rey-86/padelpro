<?php

if (!isset($_SESSION["idusuario"])) {
    header('Location: login.php');
}else{
    header('Location: portada.php');
}