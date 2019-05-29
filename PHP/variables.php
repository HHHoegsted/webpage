<?php

//PHP Front to Back, Traversy Media Part 3

echo('Hello World');
print('Hello World'); // samme resultat, men returnerer 1 

//variable præfikses med $, og starter med bogstaver eller underscore
//variable  er case sensitive
$output = 'Hello World'; 

echo $output;

/*
Data typer:
    String
    Integer
    Floats
    Booleans
    Arrays
    NULL
*/

//grundlæggende aritmetik
$num1 = 4;
$num2 = 10;
$sum = $num1 + $num2 //14

//string concatenation er ikke med + men med .
$str1 = 'Hello';
$str2 = 'World';
$greeting = $str1 .' '. $str2;

//man kan også concatenate med dobbelte anførselstegn
$greeting2 = "$str1 $str2";

//escape sequences fungerer som normalt
$str3 = 'They\'re Here';
$str3 = "They're Here;"

//const deklareres med define funktion. Konventionen er at const er med store bogstaver
define('PI', 3.1415926);

$radius = 5

$omkreds = 2 * PI * @radius;

?>