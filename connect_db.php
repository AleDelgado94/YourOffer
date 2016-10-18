<?php
    $link = mysql_connect("127.0.0.1", "root", "");
    if($link){
		mysql_select_db("youroffer", $link);
	}
	else{
		echo '<script>alert("No se pudo conectar")</script>';
	}
	
?>