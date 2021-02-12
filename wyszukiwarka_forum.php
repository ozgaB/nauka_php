<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
     
        <title>Wyszukiwarka, Full Text Index - wiadomości na forum - by Arkadiusz Włodarczyk - videokurs.pl</title>
   
    </head>
    <body>
        <form action="index.php" method="post">
            <div>
                <input type="text" name="searched_words" value="<?php if (isset($_POST['searched_words'])) echo $_POST['searched_words']; else echo ""; ?>" />
                <input type="submit" value="Szukaj" />
            </div>            
        </form>
        <?php   
            if (isset($_POST['searched_words']))
            {
                
                $mysqlConnection = @mysql_connect("localhost", "root", "vertrigo") or die(mysql_error());

                mysql_select_db("kursmysql") or die(mysql_error());
                mysql_set_charset("utf8");

                $searched_words = mysql_real_escape_string($_POST['searched_words']);
                
                $query = "
                    SELECT k.login, p.post_subject, p.post_text FROM klienci k JOIN
                    (SELECT post_subject, post_text, poster_id, MATCH(post_text) AGAINST('$searched_words' WITH QUERY EXPANSION) AS trafnosc
                    FROM posts 
                    WHERE MATCH(post_text) AGAINST('$searched_words' WITH QUERY EXPANSION) ORDER BY trafnosc DESC) p
                    ON p.poster_id = k.id
                ";
                /*
                 * + - wymaga danego słowa
                 * - - takie słowo nie może istnieć
                 * > - powiększa znaczenie danego słowa
                 * < - zmniejsza znaczenie danego słowa
                 * ~ - zmniejsza znaczenie całego wyszukania (bad words)
                 * "" - to co pomiędzy cudzysłowiami musi wystąpić dokładnie w takiej kolejności i dokładnie tak ;)
                 * () - grupuje słowa, aby móc nadać na parę słów np. >
                 */
                $result = mysql_query($query) or die(mysql_error());


                if (mysql_num_rows($result) > 0)
                {
                    echo mysql_num_rows($result);
                    while($row = mysql_fetch_assoc($result))
                    {
                        var_dump($row);
                    }
                }

                mysql_close($mysqlConnection);   
            }
        ?>
        
       
        
     
    </body>
</html>



 