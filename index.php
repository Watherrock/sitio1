<html>
	<head>
		<title>Mi primer PHP</title>
	</head>
	<body>
		<?php echo'<p>Hola mundo</p>'; 
			mi_funcion(10,9);
			echo"<p>hola</p>"
		?>
	</body>


	<?php
	function mi_funcion($a,$b){
		$suma = $a + $b;
		echo "El resultado es: " .$suma;
	}

	?>
	
</html>
