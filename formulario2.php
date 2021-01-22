<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario básico</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<style>
	h1{
    font-sixe: 43px;
    color: pink ;
	}
	   .resalta2 {
	   	color: #FF33FF;
	   	font-size: 33px;
	   	font-weight: 12px;

	   }

	            .captura{
                 color: blue;
                 font-size: 33px;
                 font-weight:bold;
	            }

    </style>
    <body>
<h1>Formulario de captura:</h1>
          <form action="" name="f1" method="get">
          	<label for="nom1">numero1:</label>
          	<input type="text" name="nom1" id="nom1" placeholder="123...">
          	<br>
          	<br>
          	<label for="nom2">numero2:</label>
          	<input type="text" name="nom2" id="nom2" placeholder="123...">
          	<br>
          	<br>
          	<input type="submit" name="boton1" value="enviar">
          	<input type="reset" name="boton2" value="Limpiar_Forma">
          </form>
            <br>
            <br>
            <?php
           $n1= $_GET["nom1"];
           $n2= $_GET["nom2"];

           //echo $n1."<br>";
           //echo $n2."<br>";

          if (isset($_GET["boton1"])) {

    //echo var_dump(empty($n1)) . "<br>";

    if ((empty($n1)) or (empty($n2))) {
        echo "ERROR FALTA QUE CAPTURES UNO O DOS VALORES???";
        exit();
    } else {

        echo "<p class='captura'>CAPTURA CORRECTA</p>";
        $suma = $n1 + $n2;
        echo "<br>";
        echo "<br>";
        echo "<p class='resalta2'>La suma de los numeros es--> $suma</p>" . "<br>";
        echo "<p class='resalta2'>Presiona el boton enviar para una nueva suma...</p>";

    }
}
       
            ?>

            <script src="js/jquery-1.11.1.js"></script>
            <script src="js/bootstrap.min.js"></script>
</style>
<img src="img/taco.jpeg" width="50">
</body>
</html>