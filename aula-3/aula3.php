<?php

for ( $i = 1; $i <= 10; $i++){
    echo("<table border='1'>");
    for($a = 1; $a <=10; $a++){
    $resul = $i*$a ;
    echo ("<tr><td>". $i . " x " . $a . " = " . $resul . "</td></tr>");
    }
    echo("<br>");
    echo("<table>");
}


?>