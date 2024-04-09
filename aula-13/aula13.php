<?php
$cars = array("Volvo", "BMW", "Mercedes");

echo count($cars);
echo ("<br>");

$myArr = array("Volvo", 15, ["apples", "bananas"]);

echo count($myArr);
echo ("<br>");

$cars = array ("brand" => "Ford", "model" => "Mustang", "year" => 1964);
var_dump($cars);
echo ("<br><br>");

foreach ($cars as $var => $carro) {
    echo ("$var: $carro <br>");
};

?>