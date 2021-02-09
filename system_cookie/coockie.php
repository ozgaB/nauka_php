<?php
 session_start();
 ob_start();
 if(isset($_GET['ref']))
 {
     $ref = filter_var($_GET['ref'], FILTER_SANITIZE_STRING);
     if(!isset($_COOKIE['ref'])) //tylko raz
     setcookie("ref", $ref, time()+60*60*24*30*3);
     
 }
 if(!isset($_SESSION['initiate']))     //regeneracja id sesji
 {
     session_regenerate_id();
     $new_session_id = session_id();
     session_write_close();
     session_id($new_session_id);
     session_start();
     $_SESSION['initiate'] = 1;
 }
  
 /* $_COOKIE['ref']= "inna_wartosc";
 setcookie("ref", "inna_wartosc", time()+10);  ZMIANA WARTOSCI COOKIE*/
?>

<html>
    <head>
        
        
        
    </head>
    <body>
        <?php
        if(isset($_GET['akcja']) && $_GET['akcja'] == "wyloguj")
{
             $_SESSION['zalogowany'] = 0;
             session_destroy();
echo "wylogowano";
} 



if ($_SESSION['zalogowany'] == 1 && time() - $_SESSION['time'] > 5*60)   //time out
{
    echo "zostajesz wylogowany";
    $_SESSION['zalogowany'] == 0;
    session_destroy();
}
/*if ($_SESSION['zalogowany'] == 1 && $_SESSION['komp_info'] != $_SERVER['HTTP_USER_AGENT']) // Zmiana przeglądarki zabezpieczenie
{
    echo "zostajesz wylogowany z powodu zmiany";
    $_SESSION['zalogowany'] == 0;
    session_destroy();
} */
if((isset($_POST['login']) && $_POST['password']) or $_SESSION['zalogowany']== 1)
{
    if((!empty($_POST['login']) && !empty($_POST['password'])) or $_SESSION['zalogowany']== 1)
    {
        if($_SESSION['logowanie'] == 0){
     $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING ) ;
     $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        }
     if($login == "Bartek" && $password == "haslo" || $_SESSION['zalogowany'] == 1)
     {
         if($_SESSION['zalogowany'] == 0)
             $_SESSION['login'] = $login;
             
         //  include tutaj może być czy coś
            include('komunikatlogowania.php');
         $_SESSION['zalogowany'] = 1;
         $_SESSION['time'] = time();
         $_SESSION['comp_info'] = $_SERVER['HTTP_USER_AGENT'];
     }
     else
         bladlogowania();
    }
    else
        bladlogowania();
}

function bladlogowania()
{
    echo  "logowanie nie powiodlo sie <a href='sesja.php'>Powrót</a>";
}
if ($_SESSION['zalogowany'] == 0){
    ?>

        <form action="coockie.php" method="post" enctype="multipart/formdata">
            <div>
                <div>
                    Login: <input type="text" name="login" maxlength="8" size="5">
                </div>
                <div>
                    Password: <input type="password" name="password" maxlength="8" size="5">
                </div>
                <div>
                    <input type="submit" value="zaloguj sie"/>
                </div>
                
                
                
                
                
                
                
            </div>
            
            
            
            
            
        </form>
  <?php
}

ob_end_flush();
?>
        
        
    </body>
    
    
    
</html>



