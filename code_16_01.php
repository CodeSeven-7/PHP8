<?php
/*
* W trojkacie prostokatnym przyprostokatne maja 
* dlugosc a = 9 i b = 3, a jeden z katow ostrych ma miare α
* Oblicz sinα * cosα
*/

$a = 9; // pierwszy bok
$b = 3; // drugi bok

// z twierdzenia Pitagorasa obliczamy dlugosc trzeciego boku
$c = sqrt($a**2 + $b**2);

// oblicz funkcje trygonometryczne
// pierwszy wariant, kat ostry miedzy a i c
$sina = $a / $c;
$cosa = $b / $c;

$result = $sina * $cosa;
printf("kat ac: sinα * cosα = %.2f * %.2f = %.2f".PHP_EOL, $sina, $cosa, $result);

// drugi wariant
$sina = $b / $c;
$cosa = $a / $c;

$result = $sina * $cosa;
printf("kat bc: sinα * cosα = %.2f * %.2f = %.2f".PHP_EOL, $sina, $cosa, $result);