<?php
$querry1="select login from klienci where login = 'dsds'";
$result = mysqli_query($sqlconnect,$querry1) or die(mysqli_error($sqlconnect));
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$login = $row['login'];


// wstawianie postów
$querry_wstawianie = "insert into posty ('','temat','tresc','data','autor')";
$querry_wybieranie = "select * from posty";



while($row = mysqli_fetch_assoc($result))
       {
           echo "<table>";
           echo "<tr>login</tr><td>".$row['login']."</td>";
           echo "<table>";
       }
       
       
       
       //szyfrowanie hasel $query = "UPDATE klienci_z_md5 SET password = MD5(haslo);
?>