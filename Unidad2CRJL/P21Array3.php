<?php
/*
CBTIS 89 
Programa que alamacena los nombres de 6 personas en un arreglo y despues los imprime
por medio de un ciclo for
Leonardo Cossio
3°A Programacion Matutino
*/
$arraynombres=array("Mildreth","Leonardo","Gabriela","Samuel","Sandra","Mia");
$longitud=count($arraynombres);

for ($i=0;$i<$longitud;$i++)
{echo $arraynombres [$i];
echo "<br>";
}
?>