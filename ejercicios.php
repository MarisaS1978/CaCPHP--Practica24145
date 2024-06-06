<?php
/*
//1-Escribe un programa que solicite al usuario su nombre y luego imprima un saludo personalizado.

echo "Ingrese su nombre ";
$nombre = trim(fgets(STDIN));

echo "Bienvenido, ".$nombre."\n";

echo "-----------------------------------------------------"."\n";

//2-Escribe un programa que calcule la suma de todos los números pares desde 1 hasta un número N dado. 

echo "Ingrese un número N: ";
$num = trim(fgets(STDIN));

$suma = 0;

for($i=1;$i<=$num;$i++){
    if($i%2 == 0){
        $suma = $suma + $i; 
    }
}

echo "La suma de todos los números pares desde 1 hasta N es: ".$suma."\n";


echo "-----------------------------------------------------"."\n";

//3-Escribe un programa que sume dos números enteros ingresados por el usuario y muestre el resultado.

echo "Ingrese un primer número ";
$num1=trim(fgets(STDIN));

echo "Ingrese un segundo número ";
$num2=trim(fgets(STDIN));



$resultado = $num1 + $num2;

echo "La suma de ".$num1." y ".$num2." es: ".$resultado."\n";

echo "-----------------------------------------------------"."\n";

//4-Escribe un programa que determine si un número ingresado por el usuario es par o impar.

echo "Ingrese un número ";
$num=trim(fgets(STDIN));

if($num % 2 == 0){
    echo "El número ".$num. " es par "."\n";
}else{
    echo "El número ".$num. " es impar "."\n";
}


echo "-----------------------------------------------------"."\n";

//5-Escribe un programa cargue un array de notas de 120 alumnos (1 a 10) y se obtenga como resultado el promedio.
$notas = array();
$cantAlumnos = 120;

for ($i = 0; $i < $cantAlumnos; $i++) {
    echo "Ingrese la nota (entre 1 y 10) del alumno " . ($i + 1) . ": ";
    $nota = trim(fgets(STDIN));

    while ($nota < 1 || $nota > 10) {
        echo "Nota inválida. Por favor, ingrese una nota válida (entre 1 y 10): ";
        $nota = trim(fgets(STDIN));
    }

    $notas[] = $nota;
}

$suma = array_sum($notas);
$promedio = $suma / $cantAlumnos;

echo "El promedio de notas de los alumnos es: " . $promedio . "\n";

echo "-----------------------------------------------------"."\n";


//6-Generar un array de 1000 elementos (enteros) y cargarlo con valores aleatorios entre 1 y 100.

$elementos=array();
$cantidad = 1000;


for( $i = 0; $i < $cantidad; $i++){
    $elementos[]=rand(1,100);
}

print_r($elementos);

echo "-----------------------------------------------------"."\n";

*/

//7-Del array anterior obtener el promedio de todos los valores, el máximo y el mínimo (Sin utilizar los métodos).

$elementos=array();
$cantidad = 1000;


for( $i = 0; $i < $cantidad; $i++){
    $elementos[]=rand(1,100);
}

print_r($elementos);

$suma = 0;
$maximo = $elementos[0];
$minimo = $elementos[0];

for ($i = 0; $i < $cantidad; $i++) {
    $suma += $elementos[$i];
    
    if ($elementos[$i] > $maximo) {
        $maximo = $elementos[$i];
    }
    
    if ($elementos[$i] < $minimo) {
        $minimo = $elementos[$i];
    }
}

$promedio = $suma / $cantidad;

echo "El promedio de los valores es: " . $promedio . "\n";
echo "El valor máximo es: " . $maximo . "\n";
echo "El valor mínimo es: " . $minimo . "\n";

echo "-----------------------------------------------------"."\n";


?>