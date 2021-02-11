<?php
$sqlconnect = @mysqli_connect("localhost", "root", "","kursmysql") or  die("brak polaczenia");
mysqli_set_charset($sqlconnect,"utf8");
$querry1="UPDATE klienci_z_sha512 SET password = SHA2(password, 512)";//SELECT NOW() AS aktualna_data
$result = mysqli_query($sqlconnect,$querry1) or die(mysqli_error($sqlconnect));

//if (mysqli_num_rows($result) > 0)
{
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC); // MYSQLI_ASSOC - asocjacyjne
    /*   while($row = mysqli_fetch_assoc($result))
       {
           echo "<table>";
           echo "<tr>login</tr><td>".$row['login']."</td>";
           echo "<table>";
       }*/
       



//$login = $row['aktualna_data'];    

}
//echo $login;
mysqli_close($sqlconnect);
?>


//NOW() -- daje aktualny czas do inserta