<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	include("conection.php");
	session_start();
	if (isset ($_SESSION["user"]) and isset ($_SESSION["pass"])) {
		header('location:home.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Armazenamento de arquivos em nuvem</title><br>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link rel = "shortcut icon" href = "img/favicon.ico "/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
		<script src="js/jquery.min.js"></script>
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
						<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
					   </script>
		<link href='//fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="wrap">
			<h1>Armazenador de Arquivos</h1><br>
			<h1 id="chape">#ForçaChape</h1>			
			<div class="main-content">
				<div class="sap_tabs">	

					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">

						  <ul>
							  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Entrar</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Criar conta</span></li>
						  </ul>		
						  <!---->

						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
								<div class="register">
									<form method="post" action="validate_login.php">										
										<input placeholder="Seu nome de usuário" class="mail" type="text" required="" name="login" id="login" />									
										<input placeholder="Sua senha" class="lock" type="password" required="" name ="pass" id ="pass" />				
										<input type="submit" value="Entrar" name="btnlogin" id="btnlogin"/>
									</form>
									<p>Esqueceu sua senha?<a href="under_construction.php"> Clique aqui!</a></p>
								</div>
						</div>	

						<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
							<div class="register">
								<form method ="post" action="sign_in.php">	
									<input placeholder="Seu nome" type="text" required="" name ="name" id ="name" />
									<input placeholder="Seu sobrenome" type="text" required="" name ="surname" id ="surname" />
									<input placeholder="Escolha um nome de usuário" type="text" required="" name ="user" id ="user" />
									<input placeholder="Seu e-mail" type="text" required="" name ="email" id ="email" />
									<input placeholder="Confirme seu e-mail" type="text" required="" name ="emailcf" id ="emailcf" />
									<input placeholder="Escolha uma senha" type="password" required="" name ="passwd" id ="passwd" />	
									<input placeholder="Confirme sua senha" type="password" required="" name ="passwdcf" id ="passwdcf" />
									<div class="sign-up">
										<input type="submit" value="Criar Conta" name="btncreate" id="btncreate "/>
									</div>
								</form>
							</div>
						</div> 	        					            	      
					</div>	

				</div>
			</div>
			 <!--start-copyright
				<div class="copy-right">
					<div class="wrap">
						<p>&copy; 2016 Cool Login Form.  All Rights  Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
					</div>
				</div>
			//end-copyright-->
		 </div>
	</body>
</html>