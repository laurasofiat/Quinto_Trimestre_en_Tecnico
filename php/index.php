<?php

//  PUNTO 1 - VARIABLES Y OPERACIONES BÁSICAS------------------------------------------------------------------------------------

// Ejercicio 1 - Sumar dos números
$a = 8;
$b = 5;
$resultado = $a + $b;
echo "1. Suma: $a + $b = $resultado \n";

// Ejercicio 2 - Restar, multiplicar y dividir
$resta = $a - $b;
$multiplicacion = $a * $b;
$division = $a / $b;
echo "2. Resta: $a - $b = $resta \n";
echo "   Multiplicacion: $a * $b = $multiplicacion \n";
echo "   Division: $a / $b = $division \n";

// Ejercicio 4 - Celsius a Fahrenheit
$celsius = 100;
$fahrenheit = ($celsius * 9 / 5) + 32;
echo "4. $celsius grados Celsius = $fahrenheit Fahrenheit \n";

// Ejercicio 5 - Área de un triángulo
$base = 10;
$altura = 6;
$area = ($base * $altura) / 2;
echo "5. Area del triangulo: $area \n";


//  PUNTO 2 - CONDICIONALES------------------------------------------------------------------------------------

// Ejercicio 6 - Par o impar
$numero = 7;
if ($numero % 2 == 0) {
    echo "6. $numero es PAR \n";
} else {
    echo "6. $numero es IMPAR \n";
}

// Ejercicio 7 - Mayor de edad
$edad = 17;
if ($edad >= 18) {
    echo "7. Con $edad años: ES mayor de edad \n";
} else {
    echo "7. Con $edad años: NO es mayor de edad \n";
}

// Ejercicio 8 - Comparar dos números
$x = 15;
$y = 22;
if ($x > $y) {
    echo "8. El mayor es $x \n";
} elseif ($y > $x) {
    echo "8. El mayor es $y \n";
} else {
    echo "8. Son iguales \n";
}

// Ejercicio 9 - Promedio de 3 notas
$nota1 = 3.5;
$nota2 = 2.8;
$nota3 = 4.0;
$promedio = ($nota1 + $nota2 + $nota3) / 3;
$promedio = round($promedio, 2);
if ($promedio >= 3.0) {
    echo "9. Promedio: $promedio - APRUEBA \n";
} else {
    echo "9. Promedio: $promedio - REPRUEBA \n";
}

// Ejercicio 10 - Validar contraseña
$contrasena = "php2024";
$intento = "php2024";
if ($intento == $contrasena) {
    echo "10. Contrasena CORRECTA \n";
} else {
    echo "10. Contrasena INCORRECTA \n";
}


//  PUNTO 4 - BUCLES FOR------------------------------------------------------------------------------------

// Ejercicio 16 - Números del 1 al 10
echo "16. Numeros del 1 al 10: ";
for ($i = 1; $i <= 10; $i++) {
    echo "$i ";
}
echo "\n";

// Ejercicio 17 - Tabla de multiplicar
$tabla = 5;
echo "17. Tabla del $tabla: \n";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $tabla * $i;
    echo "    $tabla x $i = $resultado \n";
}

// Ejercicio 18 - Sumar del 1 al 100
$suma = 0;
for ($i = 1; $i <= 100; $i++) {
    $suma = $suma + $i;
}
echo "18. Suma del 1 al 100 = $suma \n";

// Ejercicio 19 - Pares del 1 al 50
echo "19. Pares del 1 al 50: ";
for ($i = 2; $i <= 50; $i = $i + 2) {
    echo "$i ";
}
echo "\n";

// Ejercicio 20 - Contador regresivo
echo "20. Cuenta regresiva: ";
for ($i = 10; $i >= 1; $i--) {
    echo "$i ";
}
echo "\n";


//  PUNTO 5 - BUCLES WHILE------------------------------------------------------------------------------------

// Ejercicio 21 - Números hasta ingresar 0 (simulado)
$valores = [5, 3, 8, 0];
$i = 0;
echo "21. Numeros ingresados hasta el 0: \n";
while ($valores[$i] != 0) {
    echo "    Numero: " . $valores[$i] . "\n";
    $i++;
}
echo "    Se ingreso 0. Fin. \n";

// Ejercicio 22 - Números del 1 al 20 con while
echo "22. Numeros del 1 al 20: ";
$i = 1;
while ($i <= 20) {
    echo "$i ";
    $i++;
}
echo "\n";

// Ejercicio 23 - Sumar hasta superar 100
$suma = 0;
$num = 1;
while ($suma <= 100) {
    $suma = $suma + $num;
    $num++;
}
echo "23. Suma que supera 100: $suma \n";

// Ejercicio 24 - Validar contraseña con intentos
$clave = "sena123";
$intentos = ["abc", "1234", "sena123"];
$i = 0;
echo "24. Validando contrasena: \n";
while ($intentos[$i] != $clave) {
    echo "    Intento incorrecto: " . $intentos[$i] . "\n";
    $i++;
}
echo "    Contrasena correcta: " . $intentos[$i] . " \n";

// Ejercicio 25 - Contar mayores a 10
$numeros = [3, 15, 7, 22, 11, 4, 18];
$contador = 0;
$i = 0;
while ($i < count($numeros)) {
    if ($numeros[$i] > 10) {
        $contador++;
    }
    $i++;
}
echo "25. Numeros mayores a 10: $contador \n";


//  PUNTO 6 - ARREGLOS------------------------------------------------------------------------------------

// Ejercicio 26 - Arreglo de 5 nombres
$nombres = ["Ana", "Carlos", "Maria", "Luis", "Sofia"];
echo "26. Nombres: \n";
for ($i = 0; $i < count($nombres); $i++) {
    echo "    " . $nombres[$i] . "\n";
}

// Ejercicio 27 - Recorrer con foreach
echo "27. Con foreach: \n";
foreach ($nombres as $nombre) {
    echo "    Hola $nombre \n";
}

// Ejercicio 28 - Buscar elemento
$buscar = "Maria";
if (in_array($buscar, $nombres)) {
    echo "28. '$buscar' SI esta en el arreglo \n";
} else {
    echo "28. '$buscar' NO esta en el arreglo \n";
}

// Ejercicio 29 - Promedio de números
$notas = [4.5, 3.2, 5.0, 2.8, 4.1];
$total = 0;
foreach ($notas as $nota) {
    $total = $total + $nota;
}
$promedio = $total / count($notas);
$promedio = round($promedio, 2);
echo "29. Promedio del arreglo: $promedio \n";

// Ejercicio 30 - Ordenar de menor a mayor
$numeros = [42, 7, 19, 3, 55];
sort($numeros);
echo "30. Ordenado: ";
foreach ($numeros as $n) {
    echo "$n ";
}
echo "\n";

?>