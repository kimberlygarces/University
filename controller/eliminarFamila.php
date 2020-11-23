<?php
require 'conexion.php';

	if(!empty($_GET["id"])){
		
		$sql = "DELETE FROM `formfamiliar` WHERE id = ".$_GET["id"];
		$conn->query($sql);

	}

	header("Location: ../models/formulario/inscripcion.php");
	exit;
	
?>