<?php

session_start();


if (!isset($_SESSION['nom'])) {
    echo "Has de fer login primer!";
    exit(); 
}


if (isset($_SESSION['pages']) && count($_SESSION['pages']) > 0) {
    echo "<h1>Historial de pàgines visitades</h1>";
    echo "<ul>";
    

    foreach ($_SESSION['pages'] as $page) {
        echo "<li>" . htmlspecialchars($page) . "</li>";
    }
    
    echo "</ul>";
} else {
    echo "<p>No has visitat cap pàgina encara.</p>";
}
echo "<br><a href='index.php'>Pagina inicial</a>";
echo "<br><a href='login.php'>Tancar sessió</a>";
echo ("a")
?>
