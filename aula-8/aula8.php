<?php

$color = "blue";

switch ($color) {
    case 'red':
        echo ("Your favorite color is Red");
        break;
    case 'green':
        echo ('Your favorite color is Green');
        break;
    case 'blue':
        echo ('Your favorite color is Blue');
        break;
    default:
        echo ("Your favorite color is neither red, green, nor blue!");
        break;
};
echo ("<br>");

echo (" Com Array: ");

$color2 = array('red', 'green', 'blue', 'black');
$x = rand(0, 3);

echo("A cor gerada foi " . $color2[$x]);
?>