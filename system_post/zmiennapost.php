<html>
    <head>
        
        
        
    </head>
    <body>
        <form action="zmiennapost.php" method="post" enctype="multipart/formdata">
            <div>
                <div>
                    Login: <input type="text" name="login" maxlength="8" size="5">
                </div>
                <div>
                    Password: <input type="text" name="password" maxlength="8" size="5">
                </div>
                <div>
                    <input type="submit" value="zaloguj sie"/>
                </div>
                
                
                
                
                
                
                
            </div>
            
            
            
            
            
        </form>
        
        
        
    </body>
    
    
    
</html>


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

function bladlogowania()
{
    echo  "logowanie nie powiodlo sie <a href='zmiennapost.php'>Powrót</a>";
}
?>

