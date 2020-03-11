<?php
	include("conection.php");
	include("functions.php");
	include("page.php");
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
    <section id="body">
        <article id="first-news">
                <header id="article-header">
                    <hgroup>
                        <h1>Sobre nosso site</h1>
                    </hgroup>
                </header>

            <h2>Nosso Propósito</h2>
            <p>Nosso site tem o objetivo de guardar os seus arquivos, facilitando o seu acesso em outros locais, tais como celulares, tablets, outros computadores, assim você pode armazenar arquivos de onde quer que esteja, e pode baixa-los sempre que quiser.
            </p>
            <figure class="pic-cap">    
                <img src="imgs/cloud-system.jpg" />
                <figcaption>
                    <h3>Cloud Computing</h3>
                    <p>Acessar o mesmo arquivo de vários lugares</p>
                </figcaption>
            </figure>    
            <h2>Desenvolvimento</h2>
            <p>Foram utilizadas as linguagens HTML5, CSS3, JavaScript, PHP e MySQL.</p>
            <ul> 
            <li><span style="font-weight: bold">HTML</span> para o desenvolvimento do corpo do site.</li>
            <li><span style="font-weight: bold">CSS</span> para o desenvolvimento do design do site.</li>
            <li><span style="font-weight: bold">JavaScript</span> para fazer as validações dos formulários.</li>
            <li><span style="font-weight: bold">PHP</span> foi usado na programação do site, especificamente do sistema de login, inserção no banco de dados e upload de arquivo.</li>
            <li><span style="font-weight: bold">MySQL</span> é o nosso banco de dados, que armazena os dados do usuário e o local que o arquivo será salvo.</li>
            </ul>
            <figure class="pic-cap">    
                <img src="imgs/langs.jpg" />
                <figcaption>
                    <h3>Linguages</h3>
                    <p>Simbolo das linguagens usadas</p>
                </figcaption>
            </figure>
        </article>
    </section>
</body>
<?php
	include("footer.php");
?>