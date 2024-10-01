<?php
setcookie(
    'nom_usuari',
    'Joan',
    [
        'expires' => time() + 3600,
        'path' => '/',
        'domain' => true,
        'httponly' => true,
        'samesite' =>'Lax'
    ]
    );
?>