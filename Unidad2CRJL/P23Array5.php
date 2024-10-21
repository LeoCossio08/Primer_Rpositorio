<?php
/*CBTIS 89
Programa que almacena datos en un arreglo y depues los imprime
Leonardo Cossio
3°A Programacion  Matutino 
*/
$fruta=array("Manzana"=>"25", "Mango"=>"40" , "Limon"=>"35" , "Naranja"=>"20");
echo " ** FRUTERIA DEL SUR **", "<br>", "<br>";
foreach ($fruta as $costo=>$frutas)
	{echo "El kilo de " . $costo . "cuesta" . $frutas;
echo "<br>", "<br>";}
?>