<?php
declare(strict_types = 1);

$kalkulator = function(string $operacja, float $x, float $y) : float
{
    return match($operacja) {
        '+' => $x + $y,
        '-' => $x - $y,
        '*' => $x * $y,
        '/' => fdiv($x, $y),
    };
};

$x = (float)12;
$y = (float)8;

printf("%.2f + %.2f = %.2f".PHP_EOL, $x, $y, $kalkulator('+', $x, $y));
printf("%.2f - %.2f = %.2f".PHP_EOL, $x, $y, $kalkulator('-', $x, $y));
printf("%.2f * %.2f = %.2f".PHP_EOL, $x, $y, $kalkulator('*', $x, $y));
printf("%.2f / %.2f = %.2f".PHP_EOL, $x, $y, $kalkulator('/', $x, $y));
printf("%.2f / 0 = %.2f".PHP_EOL, $x, $kalkulator('/', $x, 0));