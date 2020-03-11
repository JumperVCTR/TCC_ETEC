<?php
	include("conection.php");
	include("page.php");
	session_start();
	if (!isset ($_SESSION["user"]) and !isset ($_SESSION["pass"])) {
		header("location:not_logged_in.php");
	}
	$cod = $_GET['cod'];
	$resultado = mysql_query ("SELECT * FROM files WHERE ID = '$cod'");
	$linhas = @mysql_num_rows($resultado);
	echo "<section id='body'>";
	if($linhas==0){
		echo "Não há registros no banco!";
	}
	else {
		if($resultado and @mysql_num_rows($resultado)>0 and @mysql_errno()==0){
			while ($col_pesq = @mysql_fetch_array($resultado)){
				$id = $col_pesq["ID"];
				$file = $col_pesq["file_name"];
				echo "<form action='delete.php' method='post' />";
				echo "<input type='hidden' value='$id' name='id'/>";
				echo "Deseja realmente excluir o arquivo $file?";
				echo "<input type='submit' name='btndelete' value='Excluir' />";
			}
		}
	}
?>

<?php  
	echo "</section>";
	include("footer.php");
?>