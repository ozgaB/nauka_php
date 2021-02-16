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




/*SQL INJECTION
 * 
 * addslashes($_POST['haslo]) --raczej nie
 * haslo = mysql_real_escape_string($_POST)
 * 
 * function clear(&$str)
 * {
 *          if(get_magic_Quotes_gpc())
 *          $str = stripslashes($str)
 * $str = msqli_real_escape_string($str)
 * return $str;
 * }
 * $var = "haslo"
 * $haslo = clear($_POST)
 * 
 *   //do sesji zapisujemy login id haslo przed zlamaniem
 * 
 * 
 * XSS
 *     jesli musimy zapisac do bazy string a tam jakis skrypt
 * to  $var = filter_var("",FILTER_SANITIZE_STRING) //  jednak przy zapisie tylko clear a przy odczycie filter
 * jesli wartosci int to rzutowanie do int
 * 
 * 
 * 
 * jeśli kod html
 * html purifier
 * wrzucamy do katalogu
 * quick install  sql injection 27:35
 * 
 * 
 * 
 * wczytanie danych z pliku    $query = LOAD DATA LOCAL INFILE 'data.txt INTO TABLE test FIELD TRMINATED BY ',' LINES TERMINATED  BY '/n' (x,y,z)
 * 
 * optymalizacja indeksów
 * jesli wiemy ze id jest unikalne to inedx uniqe
 * szukaj po indeksie wybiieranie jak najmniej pól
 * by przyspieszyc index index limit 1
 * 
 * index złożony 2 kolumny wiecej jeszcze szybciej
 * jeśli login i haslo wyszukujemy bardzo czesto to nałożyć indeks złożony
 * spowalniamy inne kwerendy   jeśli mamy wiecej zapytań to nakładamy inddeksy
 * wystarczy sam login
 * 
 * value="<?php if (isset($_POST['']; else echo "" ?>      --by zapamietalo to co wyszukujemy 
 * 
 * 
 * WHERE nie dziala z agregujacymi sum() musi być having np sum(kwota) as laczna kwota from zamowienia having laczna kwota > 10 group by id
 * 
 * 
 * 
 * 
 * 
 */




mysqli_close($sqlconnect);
?>


NOW() - aktualny czas