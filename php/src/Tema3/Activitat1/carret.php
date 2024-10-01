<?php

//Per a guardar els productes del carret necesitem les sessions.
//Per initziar una sessio:

session_start();

//Inicialitzar el array del carret

//Si la array no esta feta en la sessio (!isset) l'initzialitzem
if(!isset($_SESSION['carret'])) {
    $_SESSION['carret'] = [];
}

//Si el formulari ha sigut enviat, initzialitzem el producte a una variable.

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['producte'])) {
    $producte = $_POST['producte'];

    // Si el producto está en el carrito, incrementa la cantidad
    if (isset($_SESSION['carret'][$producte])) {
        $_SESSION['carret'][$producte]++;
    } else {
        // Si el producto no está en el carrito, agrega una nueva entrada con cantidad 1
        $_SESSION['carret'][$producte] = 1;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>El meu carro</h1>
    <?php if (!empty($_SESSION['carret'])): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Producte</th>
                    <th>Cantitat</th>
                    <th>Accions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['carret'] as $producte => $cuantitat): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($producte); ?></td>
                        <td><?php echo $cuantitat;?></td>
                    </tr>
                    <?php endforeach;?>
            </tbody>
        </table>
        <?php else: ?>
            <p>El carret esta buit</p>
            <?php endif;?>
            <a href="formulari.html">Tornar a la seleccio de productes</a>
</body>
</html>