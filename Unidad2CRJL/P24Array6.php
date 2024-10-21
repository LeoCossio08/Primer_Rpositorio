<?php
/*CBTIS 89
Programa que almacena datos en un arreglo y depues los imprime
Leonardo Cossio
3°A Programacion  Matutino 
*/
$estudiantes= array ("Leonardo"=>"Programacion CBTIS 89", "Ivana"=>"Logistica CBTIS 130" , "Cristhian"=>"Programacion CBTIS 89" , "Carlos"=>"Logistica CBTIS 89");
echo " ** ESTUDIANTES DE CBTIS **", "<br>", "<br>";
foreach ($estudiantes as $alumno=>$carrera)
	{echo "El Alumno " . $alumno  . "Esta En" . $carrera;
echo "<br>", "<br>";}
?>