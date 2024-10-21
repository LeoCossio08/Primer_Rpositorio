<?php
/*
CBTIS 89
Programa que almacena diversos datos en un arreglo  y posteriormente 
imprime por medio de un cico for
Leonardo Cossio
3°A Programacion Matutino 
*/
$nombre = "Ana";
$array = array(1,2,3,"casa",$nombre);

//Se obtiene el número de elementos
$longitud = count($array);
// Recorre todos los elementos 
for ($i=0; $longitud; $i++)
 { //Se obtiene el valor de cada elemento
 	echo $array[$i];
 	echo "<br>";
}
?>
