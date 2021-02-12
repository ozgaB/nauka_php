<?php
$sqlconnect = @mysqli_connect("localhost", "root", "","kursmysql") or  die("brak polaczenia");
mysqli_set_charset($sqlconnect,"utf8");
//$querry1="UPDATE klienci_z_sha512_salt SET password = SHA2(CONCAT('$salt',password), 512)";//SELECT NOW() AS aktualna_data
$salt = "xDxDx";
//if (mysqli_num_rows($result) > 0)
//{
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC); // MYSQLI_ASSOC - asocjacyjne
    /*   while($row = mysqli_fetch_assoc($result))
       {
           echo "<table>";
           echo "<tr>login</tr><td>".$row['login']."</td>";
           echo "<table>";
       }*/
       
$login=mysqli_real_escape_string($sqlconnect,"jakislogin");
$haslo = "jakieshaslo";

$haslo = hash("sha512", $salt.$haslo);
//$query = "INSERT INTO klienci_z_sha512_salt (login, password) VALUES ('$login','$haslo')";


//$login = $row['aktualna_data'];    
//mysqli_query($sqlconnect,$query) or die(mysqli_error($sqlconnect));

//}
//echo $login;
$query11 = "SELECT password FROM klienci_z_sha512_salt WHERE login = '$login' " ;
$rezultat = mysqli_query($sqlconnect,$query11) or die (mysqli_error($sqlconnect));
print_r($rezultat);


    $rezultat = mysqli_fetch_assoc($rezultat);
    echo $rezultat['password'];









mysqli_close($sqlconnect);
?>


NOW() - aktualny czas