<?php
$colors = array("red", "green", "blue", "yellow");
Echo ("<b>ESTUTURA FOREACH PARA PERCORRER UM VETOR </b> <br>");
$ind = 1;
foreach ($colors as $x) {
    echo "<b>$ind  - </b> $x <br>";
    $ind++;
};

?>