<?php
	include("conection.php");
	include("page.php");
	$cod = $_POST['id'];
	$delete = "DELETE FROM files WHERE ID='$cod'";
	echo "<section id='body'>";
 	echo"<figure class='pic-cap' >";    
    echo"    <img src='imgs/lixo.jpg' />";
	echo"</figure>";
		if(@mysql_query($delete)) {
			echo "<p class='done' id='done'>Excluido com Sucesso!</p><br />";
		}
		else {
			echo "<p class='error' id='error'>Erro ao excluir.</p>";
		}	
		
		echo "<a href='show_files.php' class='error' id='error'>Voltar</a>";
?>
<?php  
	echo "</section>";
	include("footer.php");
?>