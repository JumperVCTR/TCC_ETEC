<?php
	include("conection.php");
	include("page.php");
	session_start();
	if (!isset ($_SESSION["user"]) and !isset ($_SESSION["pass"])) {
		header("location:not_logged_in.php");
	}
		$user_folder = $_SESSION['user'];
	if (isset($_FILES["upload_file"])){
	    $File = $_FILES["upload_file"];
	    $Folder = ('files/'.$user_folder.'/');
	    $File_name_1 = $File['name'];
	    $File_name = str_replace(" ", "_", $File_name_1);
	    if ($File_name == "") {
	    	echo "<section id='body'>";
    		 	echo"<figure class='pic-cap' >";    
                echo"    <img src='imgs/alert.png' />";
            	echo"</figure>";
	    		echo "<p class ='error' id='error'>Selecione um arquivo!</p><br />";
    			echo "<a id='error' href ='show_files.php'>Voltar</a>";
	    } else {
		    move_uploaded_file($File['tmp_name'], $Folder . $File_name);
		    mysql_query("INSERT INTO files (file_name, file_local) VALUES ('$File_name', '$Folder')");
		    header("Location: show_files.php");
 		}  
    }
?>
<?php  
	echo "</section>";
	include("footer.php");
?>