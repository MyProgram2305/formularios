<html lang="en">
<head>
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
   <h1>Formulario de acesso</h1>
   <br>
   <form action="procesaf3.php" name="form3" method="POST">
   	<label for="nom">Ingresa tu nombre:</label>
   	<input type="text" name="nombre" id="nom">
   	<label for= "pass">Ingresa tu password:</label>
   	<input type="password" name="passw" id="pass">
   	<br>
   	<br>
   	<input type="submit" name="enviar" value="LOG-in">

	   <?php include"procesaf3.php";?>

	</form>
	<img src="img/taco.jpeg" width="50">
   </body>
</html>