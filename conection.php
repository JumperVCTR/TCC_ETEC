<?php
	//echo '<link href="css/style.css" rel="stylesheet"/>';
	echo "<meta charset='utf8' />";

	$host    = "sql210.rf.gd"; # Endereço do servidor MySQL
	$usuario = "rfgd_18867138"; # Nome de usuário do MySQL 
	$passwd  = "docmq26p"; # Senha do MySQL
	$bd = "rfgd_18867138_TCC"; # Nome do Banco de Dados

	# Conexão com o BD;

	$conexao = @mysql_connect("$host", "$usuario", "$passwd") or die ("Não foi possível conectar a base de dados");
	$db = @mysql_select_db("$bd", $conexao) or die (utf8_encode("Não foi possível selecionar a base de dados"));
?>