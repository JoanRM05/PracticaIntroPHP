<?php

$num1 = rand(11, 30);
$num2 = rand(11, 30);

echo "El primer valor es: <b>".$num1."</b>";
echo "<br>";
echo "El segundo valor es: <b>".$num2."</b>";
echo "<br><br>";

echo "<b>BUCLE FOR</b> <br>";
if ($num1 % 2 == 0){
    $x = 0;
    for ($i = 0; $i <= $num1; $i = $i + 2, $x++){
        echo $x.". ".$i."<br>";
    }

} else {
    echo "El primer valor no es par, por lo tanto esta accion no se puede realizar.";
}
echo "<br><br>";

echo "<b>DO / WHILE</b> <br>";

$copy = $num2;
$x = 1;
do {

    echo $x++.". ".$copy--."<br>";

} while($copy >= 0);

echo "<br><br>";

echo "<b>DO / WHILE V2</b> <br>";

$copy1 = $num1;
$copy2 = $num2;

$y = 1;
if ($num1 < $num2){

    do {
        
        if ($copy1 <= $copy2){
            echo $y++.". ".$copy1++."<br>";
        }

    } while($copy1 <= $copy2);    

} else {
    echo "Al ser mas pequeña el segundo valor, mostraremos el valor del primero: <b>".$num2."</b>";
}


/* 1. Se declaren dos variables con valores numéricos superiores a 10 y seguidamente:  
2. Muestra la progresión numérica de los números pares desde 0 hasta el valor de la 
primera con un bucle for.  
3. Muestra la progresión numérica desde la segunda variable hasta 0 con un bucle 
while.  
4. Muestra la progresión numérica desde la primera variable a la segunda con un bucle 
do/while.
a. Si la segunda variable es más pequeña, sólo queremos que imprima una vez 
el valor de la primera variable.*/


?>