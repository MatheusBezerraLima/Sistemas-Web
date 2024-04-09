<?php 
$a = rand(1, 10);
$b = rand(0,10);
echo("Em uma faixa númerica de 1 a 10 <br>");

echo ("A = $a <br>");

echo ("A elevado a B é = " . $a**$b . "<br>");
if($b % 2 == 0){
    echo "B é par <br>";
}else{
    echo "B é impar <br>";
}

echo ("Qual o valor de B? <br>");
 
if($b < $a){
    echo ("Dica: B é menor que A");
}else{
    echo ("Dica: B é maior que A ");
}
echo("<br>");

echo("#######################################<br>");
$hora = date('H') -3;  //Esta função date("H")-3 retorna o horario que esta na máquina local 
echo ("Agora é : $hora horas<br>");

if($hora <= 12){
    echo ("Good Morning!!");
} else{
    echo ("Good Afternoon!!");
}


?>