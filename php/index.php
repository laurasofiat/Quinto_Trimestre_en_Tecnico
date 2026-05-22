<?php

//Variables y operaciones matemáticas----------------------------------------------------------

//Suma--------
$num1=3;
$num2=7;
$sum=$num1+$num2;
echo "$num1 mas $num2 Es igual a $sum \n";

//Resta, multiplicación y división-------
$resta=$num1-$num2;
echo "$num1 menos $num2 es igual a $resta \n";

$multi=$num1*$num2;
echo "$num1 por $num2 es igual a $multi \n";

$divi=$num1/$num2;
echo "$num1 sobre $num2 es igual a $divi \n";

//Cuadrado y cubo----------
$cuad=$num2**2;
$cubo=$num2**3;
echo "El cuadrado de $num2 es : $cuad \n El cubo de $num2 es $cubo \n";

//Grados Celcius a Fahrenheit---------
$conv=($num2*(9/5))+32;
echo "$num2 En grados Fahrenheit es $conv \n";

//Área------------
$area=($num1*$num2)/2;
echo "El área del triangulo con base:$num1 y altura:$num2 es $area \n";

//Condicionales----------------------------------------------------------

//Par o impar------
if ($num2%2==0) {
    echo "$num2 Es un numero par \n";
} else {
    echo "$num2 Es un numero impar \n";
}

//Mayor o menor------
if ($num2>=18){
    echo "Es mayor de edad. Edad : $num2 años \n";
}else{
    echo "Es menor de edad. Edad : $num2 años \n";
}

//Comparación-------
if ($num1>$num2) {
    echo "$num1 Es mayor que $num2 \n";
} elseif ($num1<$num2) {
    echo "$num1 Es menor que $num2 \n";
} else {
    echo "$num1 Es igual a $num2 \n";
}

//Promedio de notas-------
$not1=5.0;
$not2=3.4;
$not3=2.2;
$prom=($not1+$not2+$not3)/3;
if ($prom>=3.0){
    echo "El estudiante aprobó la materia. Su notas es $prom \n";
}else{
    echo "El estudiante reprobó la materia. Su notas es $prom \n";
}

//Validación de contraseña-------
$con1="Hola_Mairon";
$con2="Hi_Mairon🤪";
if($con1==$con2){
    echo "La contarseña es correcta. \n";
}else{
    echo "La contraseña es incorrecta. Modifica: $con2 \n";
}


//Bucles for---------------------------------------------------------------

//1 al 10-----
for($n=1; $n<=10; $n++){
    echo "$n . ";
}
echo "\n";

//tabla de multiplicación----
$num3=6;
for($n1=1; $n1<=10; $n1++){
    echo " $num3 x $n1 = " . ($num3*$n1) . "\n";
}

//Suma del 1 al 100----
for($n2=1; $n2<=100; $n2++){
    echo "$n2 . ";
}
echo "\n";

//Pares del 1 al 50----
for($n3=1; $n3<=50; $n3++){
    if($n3%2==0){
        echo $n3 . " . ";
    }
}
echo "\n";

//conteo regresivo---
for($n4=10; $n4>=1; $n4--){
    echo "$n4 . ";
}
echo "\n";

//Bucles while---------------------------------------------------------------

//NUmeros hasta ingresar 0
$nums=[40,20,2,0];
$n5=0;
while ($nums[$n5] !==0){
    echo "Numero = $nums[$n5] ";
    $n5++;
}
echo "\n";

//Numeros del 1 al 20;
$n6=1;
while($n6<=20){
    echo "$n6";
    $n6++;
}
echo "\n";

//Suma hasta 100
$n7=0;
$n8=1;
while ($n7<=100){
    $n7 = $n7 + $n8;
    $n7++;
}
echo "\n";

//Validar contraseña
$intentos=["Hi","holaa","mayronn",$con2];
$n=0;
while($intentos[$n] !== $con1){
    echo "Intento $n : Contraseña incorrecta. Modifica: $con2 \n";
    $n++;
}
echo "Intento $n : Contraseña incorrecta. \n";

//Contar mayores a 10
$intentos=[2,12,30,22];
$cont=0;
while ($cont < count($intentos)){
    if ($intentos[$cont]>10){
        echo "Numero $intentos[$cont] es mayor a 10 \n";
    }
    $cont++;
}

//Arreglos------------------------------------------------------------------

//Arreglo con nombres
$nombres=["Sara","Tatiana","Cristina","Meredith", "Alex","Derek"];
echo "$nombres[1], $nombres[2], $nombres[3], $nombres[4], $nombres[5]\n";

//Recorer arreglo con foreach
echo "Los nombres del arreglo son: \n";
foreach ($nombres as $nombre) {
    echo "$nombre \n";
}

//Buscar elemento
$elem="Alex";
if (in_array($elem, $nombres)) { //in_array busca el elemento $elem en el arreglo $nombres y devuelve true si lo encuentra, o false si no lo encuentra
    echo "El elemento $elem se encuentra en el arreglo. \n";
} else {
    echo "El elemento $elem no se encuentra en el arreglo. \n";
}

//Arreglo y promedio con números
$numeros=[5.0,3.4,2.2];
$N=0;
foreach ($numeros as $N) { //foreach recorre el arreglo y asigna cada valor a la variable $N en cada iteración
    $prome=($numeros[0]+$numeros[1]+$numeros[2])/3;
}
echo "El promedio de las notas es $prome \n";

//Ordenar de menor a mayor
$numeros1=[5,73,2,3,5566];
sort($numeros1); //sort ordena el arreglo de menor a mayor  
echo "Los numeros ordenados de menor a mayor son: \n";
foreach ($numeros1 as $num) {
    echo "$num \n";
}

?>