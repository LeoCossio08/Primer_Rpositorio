<?php
/*
CBTIS 89
Programa que calcula cuantos billetes y monedas se necesitan para pagar cierta cantidad 
Leonardo Cossio 
Programacion 3°A T.M
*/
$cheque=2610;$B1000;$B500;$B200;$B100;$B50;$B20;$M10;$M5;$M2;$M1;$R;
$B1000=floor($cheque/1000);
$R=$cheque%1000;
$B500=floor($R/500);
$R=$cheque%500;
$B200=floor($R/200);
$R=$cheque%200;
$B100=floor($R/100);
$R=$cheque%100;  
$B50=floor($R/50);
$R=$cheque%50;
$B20=floor($R/20);
$R=$cheque%20; 
$M10=floor($R/10);
$R=$cheque%10;
$M5=floor($R/5);
$R=$cheque%5;
$M2=floor($R/2);
$R=$cheque%2;
$M1=floor($R/1);
$R=$cheque%1;
echo " La cantidad del cheque es: ".$cheque;
echo "<br>";
echo "La cantidad de billetes de 1000 es: " .$B1000;
echo "<br>"; 
echo "La cantidad de billetes de 500 es: " .$B500;
echo "<br>";
echo "La cantidad de billetes de 200 es: " .$B200;
echo "<br>";
echo "La cantidad de billetes de 100 es: " .$B100;
echo "<br>";
echo "La cantidad de billetes de 50 es: " .$B50;
echo "<br>";
echo "La cantidad de billetes de 20 es: " .$B20;
echo "<br>";
echo "La cantidad de monedas de 10 es: " .$M10;
echo "<br>";
echo "La cantidad de monedas de 5 es: " .$M5;
echo "<br>";         
echo "La cantidad de monedas de 2 es: " .$M2;
echo "<br>";
echo "La cantidad de monedas de 1 es: " .$M1;
echo "<br>";