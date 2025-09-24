<?php 
class Conexion {
    public function conectar(){
        $host = "localhost";
        $usuario = "root"; // root
        $password = "";
        $base = "b191190067";
        $conexion = mysqli_connect($host, $usuario, $password, $base);
        return $conexion;
    }
}
?>
