<?php
/*
CBTIS 89
Programa que convierte los datos de un arreglo a una cadena de texto, y de forma
contraria es decir convierte una cadena de texto a elementos dentro de un arreglo
Leonardo Cossio Rodriguez
3°A Programacion T.M.
*/

//Almacena datos en un arreglo
$arraydatos=["Karina","Rosales","Orozco"];

//Convierte un array a una cadena de texto 
$string=implode( " ", $arraydatos);
echo "cadena de texto <br>";
echo $string;
echo "<br>","<br>";

//cadena de texto a separar
$cadena ="Tercero de Programacion matutino";

//Convierte na cadena de texto en un array
$array=explode( " ",$cadena);

$longuitud=count($array);
echo "<br>";
echo "Arreglo con datos de tipo string <br>";

//Imprime los elementos del arreglo 
for($i=0;$i<$longuitud; $i++)
	{// Se obtiene el valor de cada elemento
		echo $array[$i];
		echo "<br>";
	}
?>