<?php
	//echo '<link href="css/style.css" rel="stylesheet"/>';
	echo "<meta charset='utf8' />";

	$host    = "sql210.rf.gd"; # Endere�o do servidor MySQL
	$usuario = "rfgd_18867138"; # Nome de usu�rio do MySQL 
	$passwd  = "docmq26p"; # Senha do MySQL
	$bd = "rfgd_18867138_TCC"; # Nome do Banco de Dados

	# Conex�o com o BD;

	$conexao = @mysql_connect("$host", "$usuario", "$passwd") or die ("N�o foi poss�vel conectar a base de dados");
	$db = @mysql_select_db("$bd", $conexao) or die (utf8_encode("N�o foi poss�vel selecionar a base de dados"));
?>