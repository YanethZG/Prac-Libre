<?php

//Mostrar los numeros pares del 1 al 200, excepto el rango
// entre 50 y 125 usando bucle for.

for ($i = 1; $i < 200; $i++){
    //filtro
    if ($i > 50 && $i < 125){
        continue;
    }
    else{
        if ($i % 2 = 0){
            echo "$i <br>";
        }

    }

}