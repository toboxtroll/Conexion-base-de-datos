<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

require_once 'config.php';



$tildes = $con->query("SET NAMES 'utf8'"); //Para que se muestren las tildes

$result = mysqli_query($con, "SELECT * FROM estudiantes");

mysqli_data_seek ($result, 0);

$extraido= mysqli_fetch_array($result);

echo "- Nombre: ".$extraido['nombre']."<br/>";

echo "- Apellidos: ".$extraido['cc']."<br/>";

echo "- Dirección: ".$extraido['carrera']."<br/>";

echo "- Teléfono: ".$extraido['email']."<br/>";

echo "- Edad: ".$extraido['telefono']."<br/>";

mysqli_free_result($result);

mysqli_close($con);

?>
</body>
</html>
