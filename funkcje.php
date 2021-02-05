<?php

$wynik=strlen("test");


function nazwafunkcji()
{
    echo "funkcja";
    echo "funkcja2";
}

echo "<br>";



nazwafunkcji();
echo "<br>";


function dodawanie($a,$b)
{
    $c=$a+$b;
            return $c;
}
echo "<br>";

echo dodawanie(7,9);
echo "<br>";

function GetHigher($a = 0,$b = 0){   // wartosc domyslna po =  //
    return ($a>$b)? "$a jestwieksze":"$b jestwieksze";
}

function zmianaWartosci(&$odebrana,$wartosc){
    $odebrana = $wartosc;
            return $odebrana;
    
}
echo zmianaWartosci($wynik,5000);  //jeśli zmienna jest przekazywana to dodaj &//
echo "<br>";

echo GetHigher(7,3);

?>

