<?php 
require_once 'config.php';
require_once 'register.php';

$register = new Register($conexion);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($register->registrarUsuario($usuario, $email, $password)) {
        mysqli_close($conexion);
        header("location: index.php");
        exit();
    } else {
        echo "Algo ha salido mal, inténtalo de nuevo";
    }
}
?>

