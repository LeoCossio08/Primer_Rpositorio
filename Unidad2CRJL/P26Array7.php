<?php
/*
Programa para imprimir 2 dimensiones
Jose Leonardo Cossio Rodriguez
Programacion 3°A T.M.
*/
   $datos = array(
   array(0, 0, 0),array(1, 1, 1),array(2, 2, 2));

   foreach($datos as $datos2){
      foreach($datos2 as $dato){
         echo "$dato ";
      }
      echo "<br>"; 
   }
?>
