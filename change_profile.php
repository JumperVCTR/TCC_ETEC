<?php
	include("conection.php");
	include("page.php");
	session_start();
	if (!isset ($_SESSION["user"]) and !isset ($_SESSION["pass"])) {
		header("location:not_logged_in.php");
	}
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$ID = $_POST['id'];

	echo "<section id='body'>";

	$change = "UPDATE files SET name ='$name', surname = '$surname', user = email='$email' WHERE ID ='$ID'";
		if(@mysql_query($change)){
			echo "<h1>Atualizado!</h1>" . "<br/>";
		}else{
			echo "Erro";
		}
?>
<?php  
	echo "</section>";
	include("footer.php");
?>