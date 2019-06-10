<?php 

	$conn = mysqli_connect("localhost", "root", "", "vidoe");

	if (!$conn) {
		echo "Hubo un error conectandose a la base de datos " . PHP_EOL;
	}

 ?>