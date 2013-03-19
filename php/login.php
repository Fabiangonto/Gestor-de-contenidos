<?php
	session_start();


	require_once('../funciones/funciones.php');

		conectar('localhost', 'root','mysql','adminContenido');


		$user=strip_tags($_POST['user']);
		$pass=strip_tags($_POST['pass']);

		$query=@mysql_query('SELECT NomUsuario from usuario where NomUsuario="'.mysql_real_escape_string($user).'"');
		$existe=@mysql_fetch_object($query);

		if($existe){
			
			$_SESSION['logeo']="yes";
			$_SESSION['user']=$user;

			 header("Location: ../inicio.php"); 

		}
		else
		{
			echo "Error al ingresar";
		}

?>