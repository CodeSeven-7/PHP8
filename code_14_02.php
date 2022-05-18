<?php
/* definicja zmiennych */
$x = (int)2021; // typu integer
$y = (float)2021; // typu float

if ($x == $y) { // sprawdz tylko wartosc
    print "Zmienne maja te sama wartosc.".PHP_EOL;
} else {
    print "Zmienne sa roznej wartosci.".PHP_EOL;
}

if ($x === $y) { // sprawdz wartosc i typ
    print "Zmienne maja te sama wartosc i sa tego samego typu.".PHP_EOL;
} else {
    print "Zmienne sa roznego typu.".PHP_EOL;
}