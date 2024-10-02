<?php

/* 1)  Crea un array asocia vo con los siguientes datos y claves.  
nombre: Sara, apellido: Martinez, edad: 23, ciudad: Barcelona. 
Muestra los valores del array anterior utilizando foreach.*/

echo "<h1> Ejercicio 1 </h1>";

$persona1 = array(
    "dato 1º"=> "Sara",
    "dato 2º"=> "Martinez",
    "dato 3º"=> "23",
    "dato 4º"=> "Barcelona",
);

foreach ($persona1 as $key => $value) {
    echo "". $key .": ". $value ."<br>";
}

/* 2) Muestra los valores del array del ejercicio 1 mostrando la clave y el valor utilizando 
foreach. */

echo "<br>";
echo "<h1> Ejercicio 2 </h1>";

$persona2 = array(
    "nombre"=> "Sara",
    "apellido"=> "Martinez",
    "edad"=> "23",
    "ciudad"=> "Barcelona",
);

foreach ($persona2 as $key => $value) {
    echo "". $key .": ". $value ."<br>";
}

/* 3) Modifica la edad del primer array a 24. Vuelve a mostrar toda su información. */ 

echo "<br>";
echo "<h1> Ejercicio 3 </h1>";

$persona1['dato 3º'] = '24';

foreach ($persona1 as $key => $value) {
    echo "". $key .": ". $value ."<br>";
}

/* 4) Borra la ciudad del array y vuelve a mostrar toda su información usando la función 
var_dump. */ 

echo "<br>";
echo "<h1> Ejercicio 4 </h1>";

unset($persona2['ciudad']);

var_dump($persona2);


/* 5) Crear un nuevo array con un valor separado por coma a partir de la cadena de texto 
$letters = “a,b,c,d,e,f”. Usando la función explode. Muestra su 
información en orden descendente. */ 

echo "<br>";
echo "<h1> Ejercicio 5 </h1>";

$letters = "a,b,c,d,e,f";

$arrayle = explode(",",$letters);

rsort($arrayle);

$length = count($arrayle);

foreach($arrayle as $key => $value){

    echo "letter ".$length--."º: ". $value ."<br>";

}

/* 6) Un profesor quiere registrar las notas de su clase en un array asocia vo. Las notas son 
las siguientes: */

echo "<br>";
echo "<h1> Ejercicio 6 </h1>";

$notas = array(
    "Miguel"=> "5",
    "Luis"=> "7",
    "Marta"=> "10",
    "Isabel"=> "8",
    "Aitor"=> "4",
    "Pepe"=> "1",    
);

arsort($notas);

echo "Notas de los estudiantes: ";

foreach($notas as $key => $value){
    echo $key.": ". $value." ";
}

/* 7) Calcula la media de las notas y muéstrala con solo 2 decimales. Además, muestra los 
nombres de los alumnos cuya nota esté por encima de la media. */  

echo "<br>";
echo "<h1> Ejercicio 7 </h1>";

$sum_total = array_sum($notas);
$cant_notas = count($notas);
$media_notas = $sum_total / $cant_notas;

echo "Media de las notas: ".number_format($media_notas,2)."<br>";
echo "Alumnos con nota por encima de la media: <br>";

foreach($notas as $key => $value){
    if  ($value > $media_notas){
        echo $key."<br>";
    }
}

/* 8) Busca en el array la nota más alta (debe hacerse mediante código). Muestra la nota y 
el nombre del mejor alumno de la clase. Deberá funcionar para cualquier valor del 
array. */  

echo "<br>";
echo "<h1> Ejercicio 8 </h1>";

$nota_alta = 0;
$alumno;

foreach($notas as $key => $value){
    if  ($value > $nota_alta){
        $nota_alta = $value;
        $alumno = $key;
    }
}

echo "La nota más alta es ".$nota_alta." y el mejor alumn@ es ".$alumno;



?>