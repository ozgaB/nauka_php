<?php
abstract class animalabstract
{
    protected $isHungry;
    function __construct($isHungry="true")
    {
        $this->isHungry = $isHungry;
    }
     abstract function eat();
}
?>