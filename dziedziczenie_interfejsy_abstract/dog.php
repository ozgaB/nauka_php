<?php
require_once("animalabstract");
class dog extends animalabstract
{

        public $jedzenie = array("kapusta","groch");
    function eat($food) 
    {
        foreach($this->jedzenie as $value)
        {
            if($value == $food)
                break;
        
        else
        {echo "tego nie jem";}}
     if($this->isHungry)
     {
         echo "jem $food";
         $this->isHungry = false;
     }
 else {
         
 
     echo "nie jestem głodny";
 }
    }

}
?>