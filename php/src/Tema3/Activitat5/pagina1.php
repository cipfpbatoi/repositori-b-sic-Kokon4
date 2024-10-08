<?php

session_start();

if (!isset($_SESSION['nom'])){
    echo "Has de fer login primer!";
    exit();
}

$page = basename($_SERVER['PHP_SELF']);

if(!in_array($page,$_SESSION['pages'])){
    $_SESSION['pages'][] = $page;
}

echo "Esta es la página 1<br>";
echo "Has visitat la pagina";
echo "<br><a href='historial.php'>Historial</a>";
echo "<br><a href='logout.php'>Tancar sessió</a>";
echo "<br><a href='index.php'>Pagina inicial</a>";
?>