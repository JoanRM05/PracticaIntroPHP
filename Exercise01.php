<?php
$num1 = rand(1,15);
$num2 = rand(1,15);

echo "Numero 1: <b>".$num1."</b>";
echo "<br>";
echo "Numero 2: <b>".$num2."</b>";
echo "<br> <br>";


echo "La suma de ".$num1." y ".$num2." es ".$res = $num1 + $num2;
echo "<br>";
echo "La resta de ".$num1." y ".$num2." es ".$res = $num1 - $num2;
echo "<br>";
echo "La division de ".$num1." y ".$num2." es ".$res = $num1 / $num2;
echo "<br> <br>";

if ($num1 == $num2) {
    echo "Los valores <b>".$num1."</b> y <b>".$num2."</b> son iguales";
} else if ($num1 > $num2) {
    echo "El valor <b>".$num1."</b> es mayor al ".$num2;
} else {
    echo "El valor <b>".$num2."</b> es mayor al ".$num1;
}
echo "<br> <br>";

if ($num1 > 1 && $num2 > 1) {

    $area = $num1 * $num2 / 2; 

    echo "El area de un triangulo con los valores ".$num1." y ".$num2." es <b>".$area."</b>";

} else {
    echo "Una de las dos variables generadas no supera el numero '1' por tal de poder asi realizar el calcualo indicado";
}

echo "<br> <br>";

/* 1. Declare dos variables numéricas, las sume, reste, dividí y muestre los valores de 
las variables y los resultados de sus operaciones.
2. Muestra cuál es mayor, cuál menor o si son iguales.
3. Si las dos variables son valores superiores a 1, 
a. calcula el área del triángulo con base y altura igual a los valores de las 
variables.   */









?>