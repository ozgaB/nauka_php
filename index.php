<html>
	<head>
	
	<link rel="stylesheet" href="style.css">
	<title> Forum Piwnica</title>
	
	
	
	
	
	</head>
	<body>
		<div id="content">
			<div id="main_site">
                            <div id="posts">
                              <?php  
                                //Pobranie z bazy temat,tresc,autor,
                                
                                ?>
                            </div>
			
			

			
			
			
			</div>

			<div id="menu">	
				<div id="Menu_pasek">
			<ul >

			<?php
                        $sesja=0;
                        $uprawnienia=1; // uprawnienia pobieraj z bazy 
                                if($sesja==0)
				echo "<li ><a href='?page=zaloguj.php'>Zaloguj</a></li>";
                                if($sesja==0)
				echo "<li ><a href='?page=zarejestruj.php'>Zarejestruj</a></li>";
                                if($sesja==1)
				echo "<li ><a href='?page=mojekonto.php'>Moje konto</a></li>";
                                if($sesja==1)
				echo "<li ><a href='?page=utworzpost.php'>Wyloguj</a></li>";
                                if($sesja==1 AND $uprawnienia>1 )
                                            echo"<li ><a href='?page=utworzpost.php'>Utwórz post</a></li>";
                                     if($sesja==1 AND $uprawnienia>3)
                                            echo"<li ><a href='?page=usunpost.php'>Usuń post</a></li>";

                                         ?>
				<li ><img src="piwnica.png"></img></a>
				

			
													

			</ul>
				</div>
			</div>


	</body>
	































</html>