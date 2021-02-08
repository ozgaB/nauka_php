<?php
for( $i = 0 ; $i <= 7; $i++){
    for ($k = 1 ; $k <100; $k++ ){
        $k=$k+9;
    $tab2[] = $k;
    }
}
for( $i = 1 ; $i < 7; $i++){
    echo $tab2[$i];
}
echo "<pre>";
print_r($tab2);
echo "<pre>";

//asocjacyjna

$czzlowiek["imie"] = "Bartek";

$tab21 = array("imie" => "Bartek", "nazwisko" => 'Ozga');

$czlowiekk[0]['imie']='Bartek';
$czlowiekk[0]['nazwisko']='Ozga';
$czlowiekk[0]['wiek']='22';
$czlowiekk[1]['imie']='Piotr';
$czlowiekk[1]['nazwisko']='Ozga';
$czlowiekk[1]['wiek']='34';
print_r($czlowiekk);
?>

