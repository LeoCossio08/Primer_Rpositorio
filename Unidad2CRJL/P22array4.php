<?php
/*
CBTIS 89
Programa que almacena datos en un arreglo y posteriormente los imprime.
Leonardo Cossio
3°A Programación Matutino
*/
$equipo= array ("Portero"=>"Julio","Marco","Defensa"=>"Diego", "Medio"=>"Jair","Delantero"=>"Rafa");
echo "** SELECCIÓN NACIONAL **","<br>","<br>";
foreach ($equipo as $posicion=>$jugador)
	{echo "El Jugador" . $jugador . " Es El" . $posicion;
echo "<br>","<br>";}
?>