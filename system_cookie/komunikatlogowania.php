<?php

            if(isset($_COOKIE['ref']))
            {
                $ref = filter_var($_COOKIE['ref'], FILTER_SANITIZE_STRING);
                if($ref == "reflink")
                {
                    echo "nagroda, twoim polecającym jest $ref";
                    // usuniecie ciasteczka setcookie('ref', $ref, -1); 
                }
            }
             echo "logowanie powiodlo sie na konto ".$_SESSION['login'];
         echo "<a href='sesja.php'>odswiez</a>";
         echo "<a href='sesja.php?akcja=wyloguj'>wyloguj</a>";
?>
