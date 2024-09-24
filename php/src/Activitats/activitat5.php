<?php
echo "Tables de multiplicar del 1 al 5";
echo "<table border=\"1\">";
for ($r =1; $r <= 5; $r++){
    echo('<tr>');
    for ($c = 1; $c <= 10; $c++)  
        echo('<td>' .$c*$r.'</td>');
    echo('</tr>');
}
echo("</table>");
?>