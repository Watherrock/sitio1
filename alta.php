<?php
/*alta.php
 *Autor: Ian de Jesús Sánchez Pérez
 *Función:	Recibe los valores del formulario.html y los imprime
 */
//Recibir los valores del formulario:
$nombre = $_POST['nombre'];
$apaterno = $_POST['apaterno'];
$amaterno = $_POST['amaterno'];
$correoe = $_POST['correoe'];

//Imprimir los valores del formulario

echo "Hola: ".$nombre." ".$apaterno." ".$amaterno;
echo "<br />";
echo "Tu correo electrónico es: ".$correoe;
echo "<br />";
?>

<a href="./formulario.html">Regresar al fromulario</a>
