<?php

$val = rand(1,6);

echo "El numero del dado que ha salido es: <b>".$val."</b> <br> <br>";

switch ($val){
    case 1:
        echo "En letras, el numero es <b>Uno</b>";
    break;
    case 2:
        echo "En letras, el numero es <b>Dos</b> ";
    break;
    case 3:
        echo "En letras, el numero es <b>Tres</b>";
    break;
    case 4:
        echo "En letras, el numero es <b>Cuatro</b>";
    break;
    case 5:
        echo "En letras, el numero es <b>Cinco</b>";
    break;
    case 6:
        echo "En letras, el numero es <b>Seis</b>";    
    break;
}

echo "<br>";

switch ($val){
    case 1:
        echo "La cara opuesta del <b>1 (Uno)</b> es el <b>5 (Cinco)</b>";
    break;
    case 2:
        echo "La cara opuesta del <b>2 (Dos)</b> es el <b>6 (Seis)</b>";
    break;
    case 3:
        echo "La cara opuesta del <b>3 (Tres)</b> es el <b>4 (Cuatro)</b>";
    break;
    case 4:
        echo "La cara opuesta del <b>4 (Cuatro) es el <b>3 (Tres)</b>";
    break;
    case 5:
        echo "La cara opuesta del <b>5 (Cinco)</b> es el <b>1 (Uno)</b>";
    break;
    case 6:
        echo "La cara opuesta del <b>6 (Seis)</b> es el <b>5 (Dos)</b>";
    break;
}

/* 1. Genere un número aleatorio entre el 1 y el 6 para simular la rada de un dado.  
2. Muestra en números y letras el valor obtenido y valor que tendrá el dado en la cara 
opuesta. (1:5, 2:6, 3:4)  */


?>