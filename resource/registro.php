<?php
 
 require("connect_db.php");

$CONTADOR = 1;


 	$name = $_POST['nombre'];
 	$apellido = $_POST['apellidos'];
 	$username = $_POST['usuario'];
 	$mail = $_POST['mail'];
	$pass = $_POST['pass'];
	$rpass = $_POST['pass2'];

	$comprobar_user = mysql_query("SELECT * FROM login WHERE user='$username'");
	$comprobar = mysql_num_rows($comprobar_user);
		if($pass == $rpass){
			if($comprobar>0){
				echo '<script lenguaje="javascript">alert("Ya existe un usuario con ese nombre")</script>'
			}
			else{
				mysql_query("INSERT INTO login VALUES('$CONTADOR', '$pass', '')");
				mysql_query("INSERT INTO usuarios VALUES('$CONTADOR', '$name', '$apellido', '$username', '$mail', '$pass', '' ,'', '', '')");
				$CONTADOR++;

				echo '<script>alert("Usuario registrado con éxito")</script>';
				mysql_close($link);
			}
		}else{
			echo "Contraseñas incorrectas";
		}

?>