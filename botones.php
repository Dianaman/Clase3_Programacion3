<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<input type="text" name="uno"></input><br>
		<input type="text" name="dos"></input><br>
		<input type="text" name="tres"></input><br>
		<br>

		<input type="submit" name="sumar" value="Sumar"></input><br>
		<input type="submit" name="multiplicar" value="Multiplicar"></input><br>
		<input type="submit" name="exponenciar" value="Exponenciar"></input><br>
	</form>
	<?php
		//var_dump($_POST);

		if(isset($_POST['sumar'])) echo $_POST['uno'] + $_POST['dos'] + $_POST['tres'];
		if(isset($_POST['multiplicar'])) echo $_POST['uno'] * $_POST['dos'] * $_POST['tres'];
		if(isset($_POST['exponenciar'])) echo $_POST['uno'] ** $_POST['dos'] ** $_POST['tres'];
	?>

	<!--
	Cuando hay más de un input del tipo submit, se agregará al array POST o GET el nombre del botón clickeado.
	-->
</body>
</html>