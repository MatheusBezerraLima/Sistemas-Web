<?php
echo ('<b>Repetindo $x até que ele seja igual a 10 </b> <br><br>');
for ($x = 1; $x <= 10; $x++){
    echo ('A váiavel $x  é <b>:' . $x . '</b> <br>');
};

echo ("----------------------------------------------------------------------------------------------------------------<br>");
echo ('<b> Repetindo $x até que ele seja igual a 10, mas quando $x for igual a 6 ira parar. <br></b> <br>');
for ($x = 1; $x <= 10; $x++){
    if ($x == 6) break;
    echo ('A váiavel $x  é <b>:' . $x . '</b> <br>');
};

echo ("----------------------------------------------------------------------------------------------------------------<br>");
echo ('<b> Repetindo $x até que ele seja igual a 10, quando $x = 6 ira pular o 6 </b> <br><br>');

for ($x = 1; $x <= 10; $x++){
    if ($x == 6) continue;
    echo ('A váiavel $x  é <b>:' . $x . '</b> <br>');
};
?>