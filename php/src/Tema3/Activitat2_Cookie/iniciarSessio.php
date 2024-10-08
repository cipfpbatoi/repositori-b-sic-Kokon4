<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nom = $_POST['nom'];
    $contraseña = $_POST['contrasenya'];
    $recordarme = $_POST['recordarme'];

    setcookie('nom',$nom,time() + 3600);

} else  {
    echo "Completa el formulari";
}

if (isset($_COOKIE['nom'])) {
    echo ("Nom: " . $_COOKIE['nom'] . "<br>");
}
?>