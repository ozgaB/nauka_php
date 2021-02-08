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

?>
