<?php
	include("conection.php");
	include("functions.php");
	session_start();
	if (isset ($_SESSION["user"]) and isset ($_SESSION["pass"])) {
		header("location:home.php");
	}
	echo "<link href='css/style.css' rel='stylesheet' type='text/css' />";
	
	$tabela="users";
	$name = $_POST["name"];
	$surname = $_POST["surname"];
	$user = $_POST["user"];
	$user = strtolower($user);
	$email = $_POST["email"];
	$email = strtolower($email);
	$email2 = $_POST["emailcf"];
	$email2 = strtolower($email2);
	$passwd = $_POST["passwd"];
	$passwd2 = $_POST["passwdcf"];
	$errors = "";
	
	//verify registered username
	$consult_user=mysql_query("SELECT * FROM $tabela WHERE user = '$user'");
	$count_u=mysql_num_rows($consult_user);
	//verify registered email
	$consult_email=mysql_query("SELECT * FROM $tabela WHERE email = '$email'");
	$count_e=mysql_num_rows($consult_email);

	
	if (validateEmail($email) == false) {
		$errors .="O email inserido é inválido.<br />";
	}
	if (validateUser($user) == false) {
		$errors .="Nome de usuário Inválido.<br />";
	}
	if ($count_u == 1) {
		$errors .="Este nome de usuário já existe!<br />";
	}
	if ($count_e == 1) {
		$errors .="Este endereço de email ja foi cadastrado!<br />";
	}
	if ($name == "" || strlen($name) < 2) {
		$errors .="Seu nome não possui caracteres suficiente!<br />";
	}
	if ($surname == "" || strlen($surname) < 2) {
		$errors .="Seu sobrenome não possui caracteres suficiente!<br />";
	}
	if ($email == "" || strlen($email) < 5) {
		$errors .="Seu email não possui caracteres suficiente!<br />";
	}
	if ($user == "" || strlen($user) < 5) {
		$errors .="Seu nome de usuário não possui caracteres suficiente!<br />";
	}
	if ($passwd == "" || strlen($passwd) < 8) {
		$errors .="Sua senha não possui caracteres suficiente!<br />";
	}
	if ($email != $email2) {
		$errors .="Você digitou dois emails diferentes.<br />";
	}
	if ($passwd != $passwd2) {
		$errors .="Você digitou duas senhas diferentes.<br />" ;
	}
	if ($errors == "") {
		$sign = mysql_query("INSERT INTO $tabela(name, surname, user, pass, email) VALUES ('$name' , '$surname' , '$user' , '$passwd', '$email')");
		mkdir('files/'.$user.'/', 0777);
		echo "<h1>Dados enviados com sucesso!!!<br />";
		echo "<a href='index.php'>Voltar</a></h1>";
	}else {
		echo "<fieldset class='error' id='error'>";
		echo "<h1 id='error'>Ocorreu o(s) seguinte(s) erro(s): <br/><br /> ".$errors."<br /></h1>";
		echo "<a id ='error' href='index.php'>Voltar</a>";
		echo "</fieldset>";
	}
	
	
	
?>