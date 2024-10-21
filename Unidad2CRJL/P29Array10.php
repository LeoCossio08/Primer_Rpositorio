<?php
/*
CBTIS 89
Programa que sirve apara saber si uno de los nombres se encuentra en el array
Leonardo Cossio
Programacion 3°A T.M
*/
$nombres=array("Leonardo","Ivana","Cristhian","Carlos","Ian","Mildreth","Emiliano","Jose");
$nombre="Ivana";
foreach($nombres as $nom){
	if($nom == $nombre){
		echo "Este nombre esta en el array";
	}
}
?>