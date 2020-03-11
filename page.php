<!DOCTYPE HTML>
<html>
	 <head>
        <meta charset ="UTF-8" />
        <title>Armazenador de Arquivos</title>
    	<link href="css/homestyle.css" rel="stylesheet"/>
        <script src="js/validations.js" type="text/javascript"></script>
    </head>    
    <body>
        <div id="interface">            

            <header id="head">
                <h1>Seja bem vindo, <!-- código para exibir o nome cadastrado no  baco de dados -->
                	<?php
						include("conection.php");
                        session_start();
                        $table="users";
                        $user= $_SESSION["user"];
						$char=mysql_query("SELECT*FROM $table WHERE user='$user'");
						$show=mysql_fetch_array($char);
						echo $show['name'];		
					?>
				</h1>
                <nav id="menu">
                    <h1>Menu Principal</h1>
			   		<ul type="disc">
				        <a href ="home.php"><li>Home</li></a>
				        <a href="profile.php"><li>Perfil</li></a>
				        <a href="show_files.php"><li>Meus Arquivos</li></a>
				        <a href="logout.php"><li>Deslogar</li></a>
		   			</ul>
                </nav>                
            </header>
            <aside id="side">
                <h1>Seja nosso parceiro</h1>
                <h2>Anuncie no nosso site</h2>
                <figure class='anuncio' >
                    <img src='imgs/chapecoense_Forca_Chape.jpg' />
                </figure>
                <figure class='anuncio' >
                    <img src='imgs/anuncie_aqui.png' />
                </figure>
            </aside>
