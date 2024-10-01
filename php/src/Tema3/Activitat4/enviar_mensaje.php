<?php

session_start();

if (!isset($_POST['token_csrf']) || $_POST['token_csrf'] !== $_SESSION['token_csrf']) {
    echo "Token no válido";
    exit;
}

//Inicialitzem les dades del fomulari

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

echo"Mensaje enviado con exito y el token es válido";

?>