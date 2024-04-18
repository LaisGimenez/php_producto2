<?php

class UserModel {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function insert($usuario, $email, $password){
        //Insertar datos en la BD
        $sql = "INSERT INTO login (usuario, email, password) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($this->conexion, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $usuario, $email, $password);
        return mysqli_stmt_execute($stmt);
    }

    public function usuarioExistente($usuario) {
        $sql = "SELECT id_viajero FROM login WHERE usuario = ?";
        $stmt = mysqli_prepare($this->conexion, $sql);
        mysqli_stmt_bind_param($stmt, "s", $usuario);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        return mysqli_stmt_num_rows($stmt) > 0;
    }

    public function emailExistente($email) {
        $sql = "SELECT id_viajero FROM login WHERE email = ?";
        $stmt = mysqli_prepare($this->conexion, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        return mysqli_stmt_num_rows($stmt) > 0;
    }
}

?>