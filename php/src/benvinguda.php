<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Benvinguda</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = htmlspecialchars($_POST['nom']);
            $edat = htmlspecialchars($_POST['edat']);
            echo "<h2>Benvingut/da, $nom!</h2>";
            echo "<p>Tens $edat anys.</p>";
        } else {
            echo "<p>Si us plau, completa el formulari.</p>";
        }
    ?>
</body>
</html>