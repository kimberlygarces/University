<?php
require 'conexion.php';

	if(!empty($_GET["id"])){
		
		$sql = "DELETE FROM `infoestudiante` WHERE cedula = ".$_GET["id"];
		$conn->query($sql);

	}

	header("Location: ../models/formulario/forms.php");
	exit;
	
?>