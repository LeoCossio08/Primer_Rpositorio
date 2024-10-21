<?php

$arraynumerico = array("Camisa","Pantalon","Cinturon","Gorra","Calcetines");

//orden ascendente
sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";

//orden descendente
rsort($arraynumerico);
var_export($arraynumerico);
?>