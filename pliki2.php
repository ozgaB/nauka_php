<?php
/* 
 *  $wskaznik = fopen("nazwa.txt", "tryb otwarcia");
 * 
 * r - (read) ustawia wskaznik na poczatek plik musi być już stworzony
 * r+  - robi to co wyżej + pozwala zapisywać
 * w -write otwiera plik do zapisu ustawia wskaznik na poczatku. usuwa dotychczasowa zawartosc pliku, jesli nie istnieje to gotworzy
 * w+ to samo ale pozwala odczytywac
 * a - attach otwiera plik do zapisu; ustawia wskaznik na koniec pliku
 * a+ robi to co wyżej pozwala odczytywac
 */
$plikA1 = "test.txt";
$wskaznik = @fopen($plikA1, "r+") or die("nie ma takiego pliku");
//$tresc = fread($wskaznik, filesize($plikA1));
//echo "<pre>".$tresc."</pre>";
/*while($linia= fgets($wskaznik) ){
if($linia == "nowak")
{
    echo $linia;
}
}
*/
$licznik = (int)fread($wskaznik, filesize($plikA1));
$licznik++;
rewind($wskaznik);        //session wizyta pierwszy raz
fwrite($wskaznik, $licznik);

@fclose($plikA1);



?>

