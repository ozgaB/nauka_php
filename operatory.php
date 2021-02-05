<?php
$i = 5;

$f= "ddd";
if($i===$f){
    echo "typy sa takie same";
}
else{
    echo "typy są różne";
}

if ((!(5>2 and 7>2)) || (4<9 || 10<3)){
    echo "prawda";
}


echo "</br>";
$a = 20;
$b = 25;
// (warunek) ? instrukcja true : instrukcja false //
 $msg=($a < $b) ?  "prawda":"falsz";
echo $msg;

echo "</br>";
// dodawanie warunku do kodu html checkbox wzależności od warunku //
$isgreencheckd = true; 

echo "<input type='checkbox' name='kolor' value='green'".($isgreencheckd ? "checked":"")." /> Czekbox<br />";
        ?>
