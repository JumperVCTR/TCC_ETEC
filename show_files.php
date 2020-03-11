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
        <form name="Form_Upload_Arquivo" action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="upload_file"/>
                <figure class="pic-cap" >    
                    <img src="imgs/file_sharing.png" />
                    <figcaption>
                        <h3>Envie seus arquivos</h3>
                        <p>Baixe seus arquivos de outros dispositivos.</p>
                    </figcaption>
                </figure> 
                <input type="submit" value="Enviar" /><br /><br />

        </form>
        <?php
            $consulta = mysql_query("SELECT * FROM files WHERE file_local = 'files/$user/' ORDER BY file_name ASC");
            if ($resultado = @mysql_fetch_array($consulta)){
                    echo "<table class='files'>";
                    echo "<tr class='line1'><td>Nome do arquivo</td><td>Excluir</td></tr>";
                do {
                    $cod = $resultado["ID"];
                    echo "<tr><td class='lines' ><a href=" . $resultado["file_local"] . $resultado["file_name"] . ">" . $resultado["file_name"] . "</a><td class='lines'><a href='delete_files.php?cod=$cod'>Excluir</a></td></tr>";
                } while($resultado = mysql_fetch_array($consulta));
            }
            echo "</table>";
        ?>
    </section>
</body>


<?php
   include("footer.php");
?>