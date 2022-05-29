<?php
$i = 10;
$sqrt = 0;

while ($sqrt <= 20) // inicjacja petli
{
    $sqrt = sqrt($i); // obliczanie pierwiastka
    printf("pierwiastek z %d = %.2f".PHP_EOL, $i, $sqrt);

    $i += 50;
}