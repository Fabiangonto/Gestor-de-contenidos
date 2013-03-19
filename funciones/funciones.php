<?php 

	function conectar($server, $user, $pass, $nameDb)
	{
		$con=@mysql_connect($server, $user, $pass);
		@mysql_select_db($nameDb);
	}

 ?>