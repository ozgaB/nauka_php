<?php


        //0,2,5,8,
$i=0;
$j=0;
do{
    $tab[$j]= $i;
    $j++;
    $i+=2;
}while($i<9);

echo $tab[3];
$tab["im"]= "bartek";
$tab['nz']= 'ozga';

foreach ($tab as $key => $value)
{
    echo $tab[$key];
    
    
    
}
echo "<br>";

function tabliczkamnozenia($iloscwierszy,$ilosckolumn){
    for($i=1;$i<=$iloscwierszy;$i++)
    {
        for($j=1;$j<=$ilosckolumn;$j++){
            echo $i*$j;
        }
        echo "<br>";
    }
}
tabliczkamnozenia(10,10);
function potega($wartosc,$wykladnik){
    $wynik=$wartosc;
    for($i = 0;$i <=$wykladnik - 1;$i++)
    {   
        $wartosc=$wynik*$wartosc;
    }
    echo $wartosc;
}
        echo "<br>";
potega(5,3);
?>
