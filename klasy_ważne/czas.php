<?php
include('class.czas.php');

$a = new czas("Europe/London");
$b = new czas;
$a->setfuturetime(5);
echo $a->futuretime."<br>";
echo $a->currenttime."<br>";
$a->setfuturetime(10);
echo $a->futuretime."<br>";

?>