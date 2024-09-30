<?php
// Iniciar sessió
session_start();

// Emmagatzemar informació de l'usuari en la sessió
$_SESSION['nom'] = 'Joan';
$_SESSION['rol'] = 'Administrador';

// Regenerar l'ID de sessió
session_regenerate_id(true);

echo 'Benvingut, ' . $_SESSION['nom'] . '<br>';
echo 'Rol: ' . $_SESSION['rol'] . '<br>';
?>