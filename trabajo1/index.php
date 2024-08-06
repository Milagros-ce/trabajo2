<?php
echo "BIENVENIDOS A MI PRIMER ARCHIVO PHP <br>";
print("IST LA RECOLETA <br>");
print_r("PROMOCION 2013 <br>");
print_r("---------------------------------<br>");

echo "VARIABLES Y OPERADORES MATEMÁTICOS <br>";

$nombre = "Milagros";
$edad = 30;
echo "Mi nombre es" . $nombre . " y tengo ". $edad . "años.<br>";

print_r("---------------------------------<br>");


echo " OPERADORES MATEMÁTICOS <br>";

$num1 = 20;
$num2 = 10;

$suma=$num1 + $num2;
$resta=$num1 - $num2;
$multiplicacion=$num1 * $num2;
$division=$num1 / $num2;
$potencia=pow($num1,$num2);
$raiz=pow($num1,0.5);

echo"La raiz cuadrada de 20 es:".$raiz."<br> La potencia de 20 elevado a 10 es:".$potencia."<br> La division de 20 entre 10 es:".$division."<br> La multiplicacion de 20 por 10 es: ".$multiplicacion."<br> La suma de 20 mas 10 es: ".$suma."<br> La resta de 20 menos 10 es: ".$resta."";
?>



