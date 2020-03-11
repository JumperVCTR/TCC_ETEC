<?php
	include("conection.php");
	include("functions.php");
	include("page.php");
	session_start();

	if (!isset ($_SESSION["user"]) and !isset ($_SESSION["pass"])) {
		header("location:not_logged_in.php");
	}else {
		$table="users";
		$user= $_SESSION["user"];

		$char=mysql_query("SELECT*FROM $table WHERE user='$user'");
		$show=mysql_fetch_array($char);
		$ID = $show['ID'];
	}
?>
    <section id="body">


        <label>Aqui você pode alterar os seus dados</label><br /><br /><br />
        <form name="profile" method="post" action="under_construction.php" onSubmit="return validate(this)">
            
            <input type ='text' placeholder="<?php echo $show['name']; ?>" id='name' name='name'><br />
            <input type ='text' placeholder="<?php echo $show['surname']; ?>" id='surname' name='surname'><br />
            <input type ='text' value="<?php echo $show['user']." (Não pode se alterado)"; ?>" disabled><br />
            <input type ='text' placeholder=" <?php echo $show['email']; ?>" id='email' name='email'><br />
            <input type ='hidden' value= "<?php echo $ID; ?>" name='id' />

            <p class ="error"  id="errorvl"></p>         
            <input type="submit" onSubmit="validate()" value="Enviar" /><br /><br />

        </form>
    </section>
</body>


<?php
   include("footer.php");
?>