<?php

//Mostrar la suma de numeros del 1 al 100 usando buble while.

//Contador
$i = 1;

$suma = 0;

while($i < 100){
//echo $i . "<br>";
$suma += $i;
//incrementar contador
$i++;
}

echo "La suma de todos los numeros es: $suma";
