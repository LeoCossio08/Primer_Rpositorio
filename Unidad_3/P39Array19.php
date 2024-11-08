<?php
/*
CBTIS 89
P39Array19
Programa que almacena informacion de 6 personas y dependiendo de su edad los acomoda en grupo:
en el grupo 1 los menores de 18, en el grupo 2 los mayores de 18 hasta los 49 años y en el grupo 3 los que tienen 50 años o mas
Leonardo Cossio
Programacion 3°A T.M
*/

$nombre=array("Paco","Leo","Ivy","Mari","Ian","Cris");
$edad=array(17,18,16,24,58,36);
$gpo1=array();
$gpo2=array();
$gpo3=array();
 
for ($i=0; $i <6; $i++) { 
	
	if ($edad[$i]<18){
		$gpo1[$i]=1;
		$gpo2[$i]=0;
	    $gpo3[$i]=0;
	} else if ($edad[$i] >=18 && $edad[$i] <=49){
		$gpo1[$i]=0;
		$gpo2[$i]=1;
	    $gpo3[$i]=0;
	} else if ($edad[$i] >= 50){
		$gpo1[$i]=0;
		$gpo2[$i]=0;
	    $gpo3[$i]=1;
	}
}
echo "CBTIS 89 <br>";
echo "Nom"," ","Edad", " ","Gpo1"," ","Gpo2"," ","Gpo3";
echo "<br>";
for ($i=0; $i <count($nombre) ; $i++) { 
	echo $nombre[$i]."---".$edad[$i]."-----".$gpo1[$i]."-----".$gpo2[$i]."-----".$gpo3[$i]."<br>";
	}
