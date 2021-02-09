<?php

if(isset($_POST['login']) && $_POST['password'])
{
    if(!empty($_POST['login'] && !empty($_POST['password'])))
    {
     $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING ) ;
     $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
     
     if($login == "Bartek" && $password == "haslo")
     {
         //  include tutaj może być czy coś
         echo "logowanie powiodlo sie";
     }
     else
         bladlogowania();
    }
    else
        bladlogowania();
}
else 
    bladlogowania();
echo $_POST['login'];
echo $_POST['password'];
function bladlogowania()
{
    echo  "logowanie nie powiodlo sie <a href='zmiennapost.php'>Powrót</a>";
}