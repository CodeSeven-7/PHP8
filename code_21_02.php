<?php
$i = 10;
$sqrt = 0;

while (true) //inicjacja petli nieskonczonej
{
    $sqrt = sqrt($i); // obliczanie pierwiastka
    printf("pierwiastek z %d = %.2f".PHP_EOL, $i, $sqrt);

    if ($sqrt > 8) { // czy pierwiastek wiekszy od 8?
        break; // przerwij cykl i petle
    }

    $i += 25;
}