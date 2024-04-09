<?php
echo ("π = " . pi());
echo ("<br>");
echo ("------------------------------------------------- <br>");
echo ("Menor número " . min(1,2,3,4,5,6,7,8, -98320987098574));
echo ("<br>");

echo ("------------------------------------------------- <br>");
echo ("Maior número " . max(1,2,3,4,5,6,7,8, 982759246));
echo ("<br>");

echo ("-------------------------------------------------<br>");
echo ("Raiz quadrada de 25 : <br>" . sqrt(25)) . ("<br>");

echo ("-------------------------------------------------<br>");
echo ("letra ramdomica : " .$letra = chr(64+rand(0,7))) . ("<br>");

echo ("-------------------------------------------------<br>");
echo ("Numero ramdomica : " .$letra = (rand( 0,  70))) . ("<br>");

echo ("-------------------------------------------------<br>");
echo ("Raiz quadrada de um número randomico de 0 a 100 : <br>" . $num = (rand( 0,  100))) . " = " . sqrt($num);


?>