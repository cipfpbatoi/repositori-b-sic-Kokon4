<?php
 session_start();

 if (!isset($_SESSION['nom']) || !isset($_SESSION['contrasenya'])) {
    header('Location: login.php');
    exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = htmlentities($_SESSION['nom']); 
    $contrasenya = htmlentities($_SESSION['contrasenya']); 


    if (isset($_POST['recordar'])) {
        setcookie('nom', $nom, time() + 3600); 
    }
} else {
    $nom = $_SESSION['nom']; 
}

echo "Benvingut, " . $nom . "!";
?>
<br><br>
<a href="Ofegat/ofegat.php">Ofegat</a><br><br>
<a href="4EnRatlla/4enralla.php">4 En Ratlla</a><br><br>
<a href="logout.php">Tancar sessió</a>