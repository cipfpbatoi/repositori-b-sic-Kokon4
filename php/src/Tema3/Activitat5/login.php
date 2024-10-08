<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Benvingut, perfavor inicie sessio</h1>

    <form action="index.php" method="POST">

        <label for="nom">Nom: </label>
        <input type="text" name="user" id="user" required><br><br>

        <label for="contrasenya">Contrasenya:</label>
        <input type="password" name="contrasenya" id="contrasenya" required><br><br>
    
        <input type="submit" value="Login">
    </form> 
</body>
</html>