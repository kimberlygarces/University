<?php

//1.contectarse al servidor mysql
        require 'conexion.php';

		//2.prepara una consulta sql
		echo $sql = "UPDATE `formfamiliar` SET nompadre = '".$_POST["nompadre"]."', nomMadre = '".$_POST["nomMadre"]."'
        ,telFamiliar = '".$_POST["telFamiliar"]."', ocupacionMadre = '".$_POST["ocupacionMadre"]."'
        , ocupacionPadre = '".$_POST["ocupacionPadre"]."'
                            WHERE id = ".$_POST["id"];
                            

		$conn->query($sql);

        echo '<script language="javascript">alert("Registro Correcto");
        window.location.href="../models/formulario/inscripcion.php?id='.'id'.'"</script>';
?>