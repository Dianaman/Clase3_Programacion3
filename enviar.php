<h1>DATOS RECIBIDOS!</h1>
<?php
	echo "Recibido por GET:<br>";
	var_dump($_GET);
	echo "<p>Recibido por POST: <br>";
	var_dump($_POST);

	//echo $_GET["nombre"];
	echo "<hr>";
	$nombre = $_POST['nombre'];
	echo $nombre;

	/*
	Hay dos maneras de enviar y recibir datos en PHP
	$_POST
	$_GET

	var_dump() es una funcion para saber el contenido y el tipo de una variable
	
	----------------
	HTTP envia datos cliente-servidor

	GET:
	 *envia los datos por la url
	 *no puede enviar mas de 2048 caracteres
	 *sólo envia los cuadros de texto que poseen name
	POST 
	 *no muestra los datos por la url
	 *no tiene límite de caracteres
	 *sólo envia los cuadros de texto que poseen name

	*/
?>