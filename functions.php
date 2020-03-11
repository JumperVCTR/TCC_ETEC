<?php
	//Email Validation
	function validateEmail($email) {
				/*					Name			 	*//* 			Domain				*//*	Extension */							
		$pattern = "/^(([0-9a-zA-Z]+[-._+&])*[0-9a-zA-Z]+@([-0-9a-zA-Z])+[.][a-zA-Z]{2,6}){0,1}+[.a-zA-Z]{0,3}$/";
		if (preg_match($pattern, $email)) {
			return true;
		}else {
			return false;
		}
	}

	// Username Validation
	function validateUser($username) {
		$valid_char = "([0-9a-zA-Z._])";
		if (preg_match($valid_char, $username)) {
			return true;
		}else {	
			return false;
		}
	}
?>