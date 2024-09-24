<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Alta Llibre</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>

        <?php 
        $llibres = array(
            array("Modul",),
            array("Editorial",),
            array("Preu",),
            array("Págines",),
            array("Estat",)
        );
        ?>

<form action="newbook.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="module">Mòdul:</label>
        <select id="module" name="module">
            <option value ="matematicas">Matematicas</option>
            <option value ="Ingles">Ingles</option>
            <option value="valencia">Valencia</option>
        </select>
        <span class="error"><!-- Missatge d'error per al mòdul aquí --></span>
    </div>
    <div>
        <label for="publisher">Editorial:</label>
        <input type="text" id="publisher" name="publisher" value="">
        <span class="error"><!-- Missatge d'error per a l'editorial aquí --></span>
    </div>
    <div>
        <label for="price">Preu:</label>
        <input type="text" id="price" name="price" value="">
        <span class="error"><!-- Missatge d'error per al preu aquí --></span>
    </div>
    <div>
        <label for="pages">Pàgines:</label>
        <input type="text" id="pages" name="pages" value="">
        <span class="error"><!-- Missatge d'error per a les pàgines aquí --></span>
    </div>
    <div>
        <label for="status">Estat: Llegit</label>
        <input type="radio" name="status" value="Llegit" />  <br />
        <label for="status">Estat: No Llegit</label>
        <input type="radio" name="status" value="No llegit" />  <br />
        <span class="error"><!-- Missatge d'error per a l'estat aquí --></span>
    </div>
    <div>
        <label for="photo">Foto:</label>
        <input type="file" id="photo" name="photo">
        
    </div>
    <div>
        <label for="comments">Comentaris:</label>
        <textarea id="comments" name="comments"></textarea>
    </div>
    <div>
        <button type="submit">Donar d'alta</button>
    </div>

    <p>
       <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $module = $_POST["module"];
                $publisher = $_POST["publisher"];
                $price = $_POST["price"];
                $pages = $_POST["pages"];
                $status = $_POST["status"];

                $llibres[0][1] = $module;
                $llibres[1][1] = $publisher;
                $llibres[2][1] = $price;
                $llibres[3][1] = $pages;
                $llibres[4][1] = $status;


            echo "LLibres" . "<br>";
            echo "Modul: " . $llibres[0][1] . "<br>";
            echo "Editorial: " . $llibres[1][1] . "<br>";
            echo "Preu: " . $llibres[2][1] . "<br>";
            echo "Pagines: " . $llibres[3][1] . "<br>";
            echo "Estat: " . $llibres[4][1] . "<br>";
            
            if (move_uploaded_file($ubicacio_temporal, $ubicacio_destinacio)) {
                echo "<p>El fitxer <strong>$nom_fitxer</strong> ha estat pujat correctament.</p>";
                echo "<p>Tipus de fitxer: $tipus_fitxer</p>";
                echo "<p>Mida del fitxer: " . ($mida_fitxer / 1024) . " KB</p>";
                echo "<p>Ubicació del fitxer: $ubicacio_destinacio</p>";
            } else {
                echo "<p>Error al moure el fitxer a la ubicació final.</p>";
            }
        } else {
            echo "<p>Error al pujar el fitxer.</p>";
        }
        
         ?>
    </p>



</form>
</body>
</html>