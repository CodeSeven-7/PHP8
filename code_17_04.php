<?php
// definicja funkcji anonimowej
$drukuj = function(string $tekst) {
    print $tekst;
    print PHP_EOL;
};

$drukuj('Funkcja $drukuj po raz pierwszy.'); //wywolanie funkcji anonimowej

// definicja funkcji zwrotnej (callback)
function mojaFunkcja($callback) {
    $callback('Funkcja $drukuj po raz drugi.'); // wywolanie funkcji zwrotnej
}

mojaFunkcja($drukuj); // wywolanie funkcji zwrotnej

// argument funkcji anonimowej
$zmienna = 'Funkcja $drukuj po raz trzeci.';

$drukujWiek = function($callback) use ($zmienna) {
    $callback($zmienna); // wywolanie funkcji
};

$drukujWiek($drukuj); //wywolanie funkcji anonimowej