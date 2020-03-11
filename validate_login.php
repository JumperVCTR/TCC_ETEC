<?php
	include("conection.php");
	echo "<link href='css/style.css' rel='stylesheet' type='text/css' />";
	session_start();
	$tabela="users";
	$user=$_POST["login"];
	$user = strtolower($user);
	$passwd=$_POST["pass"];

		$consult=mysql_query("select*from $tabela where user='$user'");
		$screen=mysql_fetch_array($consult);

		/* verifica se as variáveis de sessão constam no banco de dados. */
		if ($user==$screen["user"] and $passwd==$screen["pass"]) {
			$_SESSION["user"]=$user;
			$_SESSION["pass"]=$passwd;
			header("location:home.php");
		}
		else {

			echo "<h1>Usuario ou senha não existem!<br />";
			echo "<a href='index.php'>Voltar</a></h1>";
		}
	

?>