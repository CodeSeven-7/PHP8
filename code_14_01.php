<?php
/* definicja zmiennych */
$x = 18;
$y = 32;

printf("wartosci poczatkowe: x = %d, y = %d".PHP_EOL, $x, $y);

printf("x + y = %d".PHP_EOL, $x + $y); // suma
printf("x - y = %d".PHP_EOL, $x - $y); // roznica

printf("x * y = %d".PHP_EOL, $x * $y); // iloczyn
printf("x / y = %.4f".PHP_EOL, $x / $y); // iloraz (pokaz 4 miejsca po przecinku)

printf("x * x = %d".PHP_EOL, $x ** 2); //do kwadratu
printf("x * x * x * x * x = %d".PHP_EOL, $x ** 5); // do 5 potegi

printf("x mod y = %d".PHP_EOL, $x % $y); // reszta z dzielenia (modulo)

printf("wartosci poczatkowe: x = %d, y = %d".PHP_EOL, $x, $y);
$x++; $y++; // inkrementacja (zwiekszenie o jeden)

printf("inkrementacja: x = %d, y = %d".PHP_EOL, $x, $y);

$x--; $y--; // dekrementacja (zmniejszenie o jeden)
printf("dekrementacja: x = %d, y = %d".PHP_EOL, $x, $y);