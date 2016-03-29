<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<input type="text" name="elprimero"></input><br>
		<input type="text" name="elsegundo"></input><br>
		<input type="text" name="eltercero"></input><br>
		<!-- <input type="submit" name="calclar" value="calcular">	-->
		<input type="submit"  value="calcular"></input><br><br>
	</form>
	<br>
	<?php
		var_dump($_POST);
		/*
		/********* Manera hardcodeada *********/
/*
		$mayor = $_POST["elprimero"];

		if($mayor < $_POST["elsegundo"]) $mayor = $_POST["elsegundo"];
		if($mayor < $_POST["eltercero"]) $mayor = $_POST["eltercero"];

		echo $mayor;
		*/
		/********* Con foreach *********/

		//Si en el submit se le agrega un name, ésta entrará también en el array, 
		//por lo que habría que preguntar en el if si el name no es calcular

		$mayor = $_POST["elprimero"];

		foreach ($_POST as $i =>$name){
			if($mayor < $_POST[$i]) $mayor = $_POST[$i];
		}
		
		echo "<br>El mayor es: ". $mayor;

		/*
			isset() ------> retorna true si es distinto a null y false si es null, detecta si una variable está seteada
			$_POST y $_GET son variables superglobales, por lo tanto siempre son visibles
			isset($_POST) siempre dará true
			Por lo tanto, debería utilizarse con un elemento:
			isset($_POST['nombre'])




			Si el form no tiene action, se llama a si mismo
		*/
	?>
</body>
</html>