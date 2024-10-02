<?php

$val = rand(0,20);

$copy = $val;
$par = 0;
$impar = 0;

if ($val % 2 == 0){
    $par++;
} else{
    $impar++;
}

echo "Suma de los valores: ".$val;

do{

    $valtemp = rand(0,20);
    echo " + ".$valtemp;

    if ($valtemp % 2 == 0){
        $par++;
    } else{
        $impar++;
    }

    $copy = $copy + $valtemp;

} while($copy <= 100);

echo " = ".$copy;
echo "<br><br>";
echo "Numeros Pares Generados: <b>".$par."</b>";
echo "<br>";
echo "Numeros Impares Generados: <b>".$impar."</b>";


/* 1. Se genere un número aleatorio entre 0 y 20 y se muestre por pantalla.  
2. Se repita la operación hasta que el total de valores sumados sea superior a 100.  
3. Muestra la suma de los valores generados.  
4. Muestra el total de números pares e impares generados.   */



?>