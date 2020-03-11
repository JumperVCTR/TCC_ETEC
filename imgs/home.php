<?php
	include("conection.php");
	include("functions.php");
	session_start();

	if (!isset ($_SESSION["user"]) and !isset ($_SESSION["pass"])) {
		header("location:not_logged_in.php");
	}else {
		$table="users";
		$user= $_SESSION["user"];

		$char=mysql_query("SELECT*FROM $table WHERE user='$user'");
		$show=mysql_fetch_array($char);		
	}
?>
<!DOCTYPE HTML>
<html>
	 <head>
        <meta charset ="UTF-8" />
        <title>Armazenador de Arquivos</title>
    	<link href="css/homestyle.css" rel="stylesheet"/>
    </head>    
    <body>
        <div id="interface">            
            <header id="cabecalho">
                <h1>Seja bem vindo,
                	<?php
						include("conection.php");
						$char=mysql_query("SELECT*FROM $table WHERE user='$user'");
						$show=mysql_fetch_array($char);
						echo $show['name'];		
					?>
				</h1>
                <nav id="menu">
                    <h1>Menu Principal</h1>
			   		<ul type="disc">
				        <li><a href ="home.php">Home</a></li>
				        <li><a href="profile.php">Perfil</a></li>
				        <li><a href="show_files.php">Meus Arquivos</a></li>
				        <li><a href="logout.php">Deslogar</a></li>
		   			</ul>
                </nav>                
            </header>
            
            <section id="corpo">
                <article id="noticia-principal">
                        <header id="cabecalho-artigo">
                            <hgroup>
                                <h1>Sobre nosso site</h1>
                                <h2>por J. Victor Silva</h2>
                            </hgroup>
                        </header>

                    <h2>Nosso Propósito</h2>
                    <p>Nosso site tem o objetivo de guardar os seus arquivos para você, facilitando o seu acesso em outros locais, tais como celulares, tablets, outros computadores, assim você pode armazenar arquivos de onde quer que esteja, e pode baixa-los 	sempre que quiser, assim, não precisa deixar muitos arquivos ocupando a memória do celular.
                    </p>
                    <figure class="foto-legenda">    
                        <img src="imgs/cloud-system.jpg" />
                        <figcaption>
                            <h3>Cloud Computing</h3>
                            <p>Acessar o mesmo arquivo de vários lugares</p>
                        </figcaption>
                    </figure>    
                    <h2>Desenvolvimento</h2>
                    <p>Foram utilizadas as linguagens HTML para o desenvolvimento corpo do site, CSS para o design do site, PHP para a programação, MySQL como Banco de dados.
                    </p>
                    <figure class="foto-legenda">    
                        <img src="imgs/langs.png" />
                        <figcaption>
                            <h3>Linguages</h3>
                            <p>Simbolo das linguagens usadas</p>
                        </figcaption>
                    </figure> 
                </article>
            </section>
            <aside id="lateral">
                <h1>Outras Notícias</h1>
                <h2>Vídeo mais recente</h2>

    [AQUI ENTRA UM VÍDEO]

                <h2>Novidades no Glass</h2>
                <p>O Google enfim revelou as especificações completas do Google Glass, e com ele uma surpresa ainda inédita no mercado: a gigante das buscas usará um sistema de áudio baseado na transdução por condução. Através das hastes dos óculos, o som será transmitido para o ouvido do usuário por meio de microvibrações em determinados ossos de sua cabeça, sem usar nenhum tipo de alto-falante.
                </p>
                <p>Além da surpresa do áudio, a tela montada a frente do olho do usuário também chamou atenção. Serão 640 x 360 pixels de resolução que, em proporção, equivaleria a um monitor de 25 polegadas de alta definição colocado a 2,5 metros de distância do espectador.
                </p>
            </aside>
            <footer id="rodape">
                <p>ETECVAV 2016 - Desenvolvedores</p>
                	<p><img src="imgs/facebook-logo.png" class ="fblogo"/>
                    <a href ="https://facebook.com/jumper.vctr">J. Victor Silva</a> | 
                    <img src="imgs/facebook-logo.png" class ="fblogo"/>
                    <a href ="https://facebook.com/FlavioVinicius13">Flavio Felipe</a></p>
            </footer>
        </div>
    </body>
</html>
