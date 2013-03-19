<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Inicio de la web</title>
</head>
<body>
	<h1>Bienvenido a la web</h1>

<?php
	echo "Hola ". $_SESSION['user'];
?>

</body>


</html>