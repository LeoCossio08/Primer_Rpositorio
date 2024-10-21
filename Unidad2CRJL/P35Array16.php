<?php
/*
CBTIS 89
Programa que sirve para sumar cantidades de un arreglo a otro 
Leonardo Cossio Rodriguez
Programacion 3°A T.M.
*/
$array1=array(10,20,30,40,50);
$longitud=count($array1);
$array2=array(3,7,6,15,18);
$longitud=count($array2);
$arraysuma=array();
$arrayresta=array();
$arraymulti=array();
$arraydivi=array();


for($i=0;$i<$longitud; $i++){ 
	$arraysuma[$i]=$array1[$i]+$array2[$i];
	$arrayresta[$i]=$array1[$i]-$array2[$i];
	$arraymulti[$i]=$array1[$i]*$array2[$i];
	$arraydivi[$i]=$array1[$i]/$array2[$i];
}
echo "SUMA ENTRE ARREGLOS <br> ";
for($i=0;$i<$longitud; $i++){ 
echo $array1[$i], "+", $array2[$i], "=", $arraysuma[$i];
echo "<br>";
}

echo "RESTA ENTRE ARREGLOS <br>";
for($i=0;$i<$longitud; $i++){ 
echo $array1[$i], "-", $array2[$i], "=", $arrayresta[$i];
echo "<br>";
}
echo "DIVISION ENTRE ARREGLOS <br>";
for($i=0;$i<$longitud; $i++){ 
echo $array1[$i], "/", $array2[$i], "=", $arraydivi[$i];
echo "<br>";
}
echo "MULTIPLICACION ENTRE ARREGLOS <br>";
for($i=0;$i<$longitud; $i++){ 
echo $array1[$i], "*", $array2[$i], "=", $arraymulti[$i];
echo "<br>";
}







//echo $array1, " + ", $array2, " = ", $arraysuma ;
//echo "<br>";


?>