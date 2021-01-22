
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<?php 

if (isset($_POST["submit"])){
	$nombre=$_POST["nombre"];
	$edad= $_POST ["edad"];
	$correo= $_POST ["correo"];
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Validar forma</title>
</head>
<body>
<h1>VALIDACION DE DATOS</h1>
<form action="" method="post">
	<label for="nom">Nombre del alumno:</label>
	<input type="text" name="nombre" id="nom" value="<?php if(isset($nombre)) {echo $nombre;}?>">
	<img src="img/taco.jpeg" width="50">
</body>
</html>