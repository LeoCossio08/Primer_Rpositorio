<?php
/*
CBTIS 89
Programa que imprime mediante un arreglo el empleado y su sueldo para sacar su aumento utilizando el ciclo for
Leonardo Cossio
Programacion 3°A T.M
*/
$array1=array("Leonardo","Ivana","Carlos","Cristhian");
$array2=array(3800,4500,3000,2500);
$longitud=count($array1);
$longitud=count($array2);
for($i=0;$i<$longitud; $i++){
	echo " El empledo " . $array1[$i] . " tiene un sueldo de " . $array2[$i];
echo "<br>", "<br>";
}
echo "*AUMENTO DE EMPLEADOS* <br>";
for($i=0;$i<$longitud; $i++){
	$aum=$array2[$i]* 0.15;
	

	echo "El aumento del empleado " . $array1[$i] . " sera de "  .  $aum;
	echo "<br>","<br>"; 
}
echo "*PAGO TOTAL CON AUMENTO* <br>";
for($i=0;$i<$longitud; $i++){
	$tot=$array2[$i]+$aum;
	echo " El pago total de " . $array1[$i] . " es de: " . $tot;
	echo "<br>", "<br>";
 }





?>