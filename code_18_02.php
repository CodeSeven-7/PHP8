<?php
declare(strict_types = 1);

function triangle(float $a, float $h) : float // funkcja liczaca pole trojkata
{
    $p = (0.5 * $a *$h); // obliczanie pola
    return (float)$p; // zwracanie wyniku
}

$a = 12; // podstawa trojkata
$h = 34; // wysokosc trojkata

$t = triangle(a: $a, h: $h); // wywolaj funkcje i przypisz wynik do zmiennej

printf("Pole trojkata o podstawie %d i wysokosci %d wynosi %d.", $a, $h, $t);