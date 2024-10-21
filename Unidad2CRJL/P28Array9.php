<?php
/*
CBTIS 89
Programa que sirve para crear un array asociativo y mostrarlo medinte un var dump
Leonardo Cossio
Programacion 3°A T.M
*/
$Ropa = array('Playeras'=>'100','Camisas'=>'250','Pantalones De Mezclilla'=> "300",'Bermudas'=>'200');

   foreach($Ropa as $Prenda=>$Precio){
     echo "La prenda " . $Prenda . " tiene un precio de: " . $Precio;
     echo "<br>";
   }
    var_dump($Ropa);
?>