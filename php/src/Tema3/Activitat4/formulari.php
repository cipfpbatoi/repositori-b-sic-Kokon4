<?php
//Iniciem sesió
session_start();

//Generem un token CSRF y el guardem en la sessio
$token_csrf = uniqid('',true);
$_SESSION['token_csrf'] = $token_csrf;

?>

<form action="enviar_mensaje.php" method="POST">
    <label for="nombre">Nombre: </label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="email">Email: </label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="missatge">Missatge: </label>
    <textarea id="mensaje" name="mensaje" required></textarea><br><br>

    <input type="hidden" name="token_csrf" value="<?= $token_csrf ?>">

    <input type="submit" value="Enviar mensaje">