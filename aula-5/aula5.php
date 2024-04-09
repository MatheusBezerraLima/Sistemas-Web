<?php 
echo "Hello" . "<br>";
echo 'Hello' . '<br>';
$x = "Matheus";
echo "Hello $x" . "<br>";
echo 'Hello $x' . '<br>';

echo strlen("Matheus") . "<br>";

echo str_word_count("Hello word! Matheus Bezerra a b c d") . "<br>";

echo str_word_count("Em linguística, a noção de texto é ampla e ainda aberta a uma definição mais precisa. Grosso modo, pode ser entendido como manifestação linguística das ideias de um autor, que serão interpretadas pelo leitor de acordo com seus conhecimentos linguísticos e culturais. Seu tamanho é variável.") ."<br>";

echo strpos("Hello ou Word!" , "Word");

?>