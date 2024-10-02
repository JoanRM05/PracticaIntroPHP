<?php

$val = rand(1,15);

echo "El numero generado es <b>".$val."</b>";
echo "<br> <br>";

switch ($val) {
    case 1:
        echo "El numero generado corresponde al dia <b>Lunes</b>";
        break;
    case 2:
        echo "El numero generado corresponde al dia <b>Martes</b>";
        break;
    case 3:
        echo "El numero generado corresponde al dia <b>Miercoles</b>";
        break;
    case 4:
        echo "El numero generado corresponde al dia <b>Jueves</b>";
        break;
    case 5:
        echo "El numero generado corresponde al dia <b>Viernes</b>";
        break;
    case 6:
        echo "El numero generado corresponde al dia <b>Sabado</b>";
        break;
    case 7:
        echo "El numero generado corresponde al dia <b>Domingo</b>";
        break;
    default:
        echo "El dia generado <b>NO</b> corresponde a ningun dia de la semana";
        break;
}    
/* 1. Se declara una variable con un valor numérico. U lizando una estructura switch/case genera un mensaje que indique a qué día de la semana se corresponde.

a. En caso de que no sea un valor entre el 1 y el 7 indica que no se corresponde con ningún día. */ 



?>