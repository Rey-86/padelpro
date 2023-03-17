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

    function getTurnos($fecha,$pista){
        $consulta = "SELECT turnos.id, turnos.turno FROM turnos LEFT JOIN reservas ON turnos.id = reservas.turno AND reservas.fecha = ? and reservas.idpista=? WHERE reservas.idreserva IS NULL;";
        $stm = $this->conn->prepare($consulta);
        $stm->bind_param("si", $fecha,$pista);
        $stm->execute();
        $resultado = $stm->get_result();
        $turnos = array();
        while($turno=$resultado->fetch_assoc()){
            array_push($turnos, $turno);
        }
        return $turnos;
       
    }
    function reservas($idpista, $idusuario, $fecha, $turno,$jugador1,$jugador2,$jugador3,$jugador4 ){
        $consulta = "insert into reservas (idpista,idusuario,fecha,turno,jugador_1,jugador_2,jugador_3,jugador_4) values (?,?,?,?,?,?,?,?)";

        $stm = $this->conn->prepare($consulta);
        $stm->bind_param("iisissss", $idpista,$idusuario,$fecha,$turno,$jugador1,$jugador2,$jugador3,$jugador4);
        $stm->execute();

        if ($stm->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}
