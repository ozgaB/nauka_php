<?php
try {
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'");
    
$dbh = new PDO("mysql:host=localhost;dbname=kursmysql", "root", "", $options);
 //$dbh->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, $dbh)      <- ustawianie atrybutów  
 //

//połączenie

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->query("SELECT * FROM klienci");
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