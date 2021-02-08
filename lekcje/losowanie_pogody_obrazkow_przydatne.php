<?php

$tab = array("ładna","słoneczna","wietrzna","upalna");
$tab3 = array("brzydka","pochmurna","deszczowa","śnieżna");
/*for($i = 0; $i <=60; $i++){
    
   for($j = -30; $j <= 30; $j++){
       
   }
   $tab2[$i]=$j;
}       */

for($j=-30;$j<=30;$j++){
    $tab2[] = $j;
}

    $pogoda = rand(0,count($tab)-1);
    $pogoda2 = rand(0,count($tab3)-1);
    $celciusz = rand(0,count($tab2)-1);

    if($tab2[$celciusz] > 0){
        $pogodawlasciwa = $tab[$pogoda];
    }
    else{
        $pogodawlasciwa = $tab3[$pogoda2];
    }
echo " Dzisiaj jest $pogodawlasciwa pogoda i mamy $tab2[$celciusz] stopni." ; //zamiast tego można zdjecia czy cos
    



