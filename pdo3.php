<?php
try {
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'");
    
$dbh = new PDO("mysql:host=localhost;dbname=kursmysql", "root", "", $options);
 //$dbh->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, $dbh)      <- ustawianie atrybutów  
 //

//połączenie

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$haslo =  $_GET['haslo'];                                                       // <-- PREPERED STATEMENTS
//placeholder zamiennik
$result=$dbh->prepare("SELECT * FROM klienci WHERE haslo = :haslo");
$result->bindParam(":haslo",$haslo);
$result->bindParam(":email",$email, PDO::PARAM_STR);

$result->execute();
//$result->execute(array($haslo));
while($row = $result->fetch(PDO::FETCH_ASSOC))
{
    echo $row['imie'];
}


$dbh = null;
}
catch(PDOException $e)
{
    echo "Błąd:".$e->getMessage();
}



//$dbh = new PDO("sqlite:naszabazadanych.sqlite;");                             <-DRIVER dla sqlite
//$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

var_dump(PDO::getAvailableDrivers());        // <- dostępne drivery zainstalowane na serwerze


?>