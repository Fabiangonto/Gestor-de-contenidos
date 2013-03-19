<?php
	require_once('../funciones/funciones.php');


	conectar('localhost','root', 'mysql','admincontenido');



	$user=strip_tags($_POST['user']);
	$apePat=strip_tags($_POST['apePat']);
	$apeMat=strip_tags($_POST['apeMat']);
	$email=strip_tags($_POST['email']);
	$clave=strip_tags(sha1($_POST['pass']));
	$tipoUser=strip_tags($_POST['tipoUsuario']);
	$ip=strip_tags($_SERVER['REMOTE_ADDR']);

	$query=@mysql_query('SELECT * from usuario where NomUsuario="'.mysql_real_escape_string($user).'"');
	$existe=@mysql_fetch_object($query);

	//prueba ----------------------------------------	
		//foreach ($existe as $key => $value) {
			//echo $key." - ". $value;
		//}
	//-----------------------------------------------

	if($existe){
		echo " El usuario ".$user." existe";
	}
	else
	{	

		$insertar=mysql_query('INSERT INTO usuario(NomUsuario,ApePatUsuario,ApeMatUsuario,EmailUsuario,ClaveUsuario,TipoUsuario,Ip) values("'.mysql_real_escape_string($user).'","'.mysql_real_escape_string($apePat).'","'.mysql_real_escape_string($apeMat).'","'.mysql_real_escape_string($email).'","'.mysql_real_escape_string($clave).'","'.mysql_real_escape_string($tipoUser).'","'.mysql_real_escape_string($ip).'")');
		echo 'Gracias '.$user;
	

	}