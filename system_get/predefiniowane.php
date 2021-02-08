<html>
    <head>
        <?php
            if (isset($_GET['page'])){
        $allowed_pages = array("java", "php", "mysql");
        
        $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);
        if (in_array($page, $allowed_pages))
        
        if (!empty($page)){
            if (is_file($page."title.php"))
            {
                    include($page."title.php");
            }
       
        }

    }else{
    include("start.php");
    }
        ?>
        
    </head>
    <body>
        <div id="menu">
            <a href="?page=java">Glowna<a/>
           <a href="?page=php">hello<a/>
            <a href="?page=mysql">hello<a/>

        </div>
        <div id="content">
<?php
    if (isset($_GET['page'])){
        $allowed_pages = array("java", "php", "mysql");
        
        $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);
        if (!in_array($page, $allowed_pages))
                echo "taka strona nie istniejehhhh";
        
        if (!empty($page)){
            if (is_file($page.".html"))
            {
                    include($page.".html");
            }
                    else
        {
            echo "taka strona nie iestnieje";
        }
        }

    }else{
    include("start.html");
    }
    echo "testtest";


?>
        </div>
    </body>
</html>