<?php
/*
CBTIS 89
P40Array20.php
Programa que almacena por medio de un ciclo los numeros del 150 al 200 de la sigueinte manera:
en el $arreglo1 los numeros pares , en el $arreglo2 los numeros impares y en el $arreglo3 va la suma de los dos numeros anteriores 
Leonardo Cossio
Programacion 3°A T.M
*/
 
$Arreglo1 = array(); 
$Arreglo2 = array(); 
$Arreglo3 = array(); 
for ($i = 150; $i <= 201; $i++) {
    if ($i % 2 == 0) {
        $Arreglo1[] = $i;
    } else {
        $Arreglo2[] = $i;
    }
}
$longitud = min(count($Arreglo1), count($Arreglo2));

for ($i = 0; $i < $longitud; $i++) {
    $Arreglo3[] = $Arreglo1[$i] + $Arreglo2[$i];
}

echo "CBTIS 89";
echo "<br>";

echo "Arreglo1"," "," ","Arreglo2"," "," ","Arreglo3";
echo "<br>";

$numeros =max(count($Arreglo1),count($Arreglo2),count($Arreglo3));

for ($i = 0; $i<$numeros; $i++) {
   
    echo $Arreglo1[$i]."--------".$Arreglo2[$i]."--------".$Arreglo3[$i]."<br>";
}
?>

