<?php
   define('DB_SERVER', "localhost");
   define('DB_USERNAME', "root");
   define('DB_PASSWORD', "");
   define('DB_DATABASE', "padel_pro");

class Datos
{
    private $conn;
    function __construct()
    {
        $this->conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    }

    //Devuelve NULL si no existe el usuario y un array con los datos del usuario si existe
    function login($username, $email)
    {
        $consulta = "select * from usuarios where nombre=? and email=?";
        $stm = $this->conn->prepare($consulta);
        $stm->bind_param("ss", $username, $email);
        $stm->execute();
        $resultado = $stm->get_result();
        return $resultado->fetch_assoc();
    }

    function registrar($nombre, $email, $telefono,)
    {
        $consulta = "select * from usuarios where nombre=?";
        $stm = $this->conn->prepare($consulta);
        $stm->bind_param("s", $nombre);
        $stm->execute();
        $resultado = $stm->get_result();
        if ($resultado->num_rows > 0) {
            //echo "El usuario ya existe";
            return false;
        } else {
            $consulta = "insert into usuarios (nombre,email,telefono) values (?,?,?)";
            $stm = $this->conn->prepare($consulta);
            $stm->bind_param("sss", $nombre, $email, $telefono);
            $stm->execute();

            if ($stm->affected_rows > 0) {
                return true;
            } else {
                return false;
            }
        }
    }
}
?>    