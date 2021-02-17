<?php
try {
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'");
    
$dbh = new PDO("mysql:host=localhost;dbname=kursmysql", "root", "", $options);
 //$dbh->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, $dbh)      <- ustawianie atrybutów  
 //

//połączenie

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$result=$dbh->query("SELECT * FROM klienci");
while($row = $result->fetch(PDO::FETCH_ASSOC))
{
    echo $row['imie'];
}







$result->closeCursor();  //zwolnienie kursora na koniec zawsze
$danazzewnatrz = "haslo";
        $dbh->quote($danazzewnatrz);
$result= $dbh->exec("INSERT INTO klienci ");   // <--- do bazy




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