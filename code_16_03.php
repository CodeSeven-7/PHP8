<?php
$arg1 = M_E; // liczba Eulera 2.7182818284590452354
$log = log($arg1); // logarytm naturalny

$arg2 = 45;
$log10 = log10($arg2); // logarytm dziesietny

$x = -85; 
$abs = abs($x); // wartosc bezwzgledna

printf("Logarytm naturalny z liczby %.2f wynosi %.2f".PHP_EOL, $arg1, $log);
printf("Logarytm dziesietny z liczby %.2f wynosi %.2f".PHP_EOL, $arg2, $log10);
printf("Wartosc bezwzgledna z liczby %.2f wynosi %.2f".PHP_EOL, $x, $abs);