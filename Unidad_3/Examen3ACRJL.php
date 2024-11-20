<?php
/*
CBTIS 89
Programam que alamcena el nombre de cuatro articulos en un arreglo llamado $Productos y en otro arreglo multidimensional llamado $Precios almacena los precios correspondientes de 3 meses, esto se hace por medio de filas y colimnas
*/
$Productos=array("Vestido","Pantalon","Cinturon","Camiseta");
$Precio=array(
array(500,600,550),
array(800,700,600), 
array(400,200,300),
array(500,200,500));

$Promedio=array();
$Subtotal=array();

for ($i=0; $i <4 ; $i++) 
    {for ($j=0; $j <3 ; $j++)
{
 }
}




echo "*Precios*";
echo "<br>";
for ($i=0; $i<4 ; $i++) 
	{for ($j=0; $j<3 ; $j++) 
		{echo $Precio[$i][$j]." ";
}
echo "<br>";
}