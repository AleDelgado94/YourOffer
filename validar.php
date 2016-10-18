<?php
	require("connect_db.php");
	
	$username = $_POST['user'];
	$pass = $_POST['pass'];
	
	$sql2 = mysql_query("SELECT * FROM login WHERE user='$user'");
	
	if($f2=mysql_fetch_array($sql2)){
		if($pass==$f2['passadmin']){
			echo '<script>alert("Ejecutando como administrador")</script>'
			echo "<script>location.href='resource/main.php'</script>";
		}
	}

	$sql=mysql_query("SELECT * FROM login WHERE user='$user'");
	if($f=mysql_fetch_array($sql)){
		if ($pass==$f['pass']) {
			header("Location: resource/main.php");
		}else{
			echo '<script>alert("Contraseña Incorrecta")</script>';
			echo "<script>location.href='index.php'</script>";
		}

	}
	else{
		echo '<script>alert("El usuario no existe")</script>';
		echo "<script>location.href='index.php'</script>";
	}

?>