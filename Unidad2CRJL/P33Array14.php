<?php
$Nombre=array("Leonardo","Ivana","cristhian","Carlos","Yesenia","Jose");
sort( $Nombre);
echo "Orden Ascendente: <p>";
for($i=0;$i<count($Nombre);$i++){
	echo $Nombre[$i]."<br>";
}
array_push($Nombre,"Manuel","Hector","Ian");
unset($Nombre[2]);
unset($Nombre[4]);
$Nombre=array_values($Nombre);
echo "<br>";
echo "Orden Descendente:<p>";

for($i=0;$i<count($Nombre);$i++){
	echo $Nombre[$i]."<br>";}
	echo "<br>";
	echo "El numero de elementosactual en el arreglo es de".
	count($Nombre);

?>