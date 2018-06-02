<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<?php

	require 'config.php';

	mysqli_query($con, "insert into estudiantes(nombre, cc, carrera, email, telefono)
				 values('$_POST[nombre]','$_POST[cc]','$_POST[carrera]','$_POST[email]','$_POST[telefono]')") or die("Problemas en la base de datos".mysqli_error($con));
	mysql_close($con);

	echo "registro exitoso";

?>

</body>
</html>


