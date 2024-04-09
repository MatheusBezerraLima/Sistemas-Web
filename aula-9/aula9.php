<?php
$i = 1;
$soma = 0;
echo("<strong>While de 1 até 5</strong> <br>");

while($i<=5){
    echo("$i <br>");
    $i++;
}
echo("<br>");
echo(" <strong>While usando uma condicional com break se a variavel for igual a 5 </strong> <br><br>");

$a = 1;

while($a <= 5){
 if($a == 3) break;
echo("$a<br>");
$a++;
}

echo("<br><br>");
echo(" <strong>While usando uma condicional com continue se a variavel for igual a 5 </strong> <br><br>");

$b = 0;
while($b <= 4){
$b++;
 if($b == 3) continue;
echo("$b<br>");
}

echo("<strong> Do While usando uma condicional </strong><br><br>");

$z = 1;
do{
    echo("$z <br>");
    $z++;
}while($z <= 5);

echo("<strong> Do While usando uma condicional, break quando a varavel for igual a 3 </strong><br><br>");

$z = 1;
do{
    if($z == 3)
        break;
    echo("$z <br>");
    $z++;
}while($z <= 5);

echo("<strong> Do While usando uma condicional, continue quando a varavel for igual a 7 </strong><br><br>");

$z = 0;
do{
    $z++;
    if($z == 3)
        continue;
    echo("$z <br>");
}while($z <= 4);


?>