<?php
print "Tworzenie tablicy.".PHP_EOL;

// deklaracja tablicy z 2 elementami
$owoce = ["jablko", "banan"];

print_r($owoce); // drukowanie tablicy
// funkcja count zwraca liczbe elementow w tablicy
print "Tablica ma ".count($owoce)." elementy.".PHP_EOL;

print str_repeat('-', 30).PHP_EOL;
print "Dodanie 2 elementow.".PHP_EOL;

array_push($owoce, "arbuz"); // dodanie elementu do tablicy
array_push($owoce, "gruszka"); // dodanie elementu do tablicy

print_r($owoce);
print "Tablica ma ".count($owoce)." elementy.".PHP_EOL;

print str_repeat('-', 30).PHP_EOL;
print "Pobranie 1 elementu z tablicy.".PHP_EOL;

$owoc = array_pop($owoce); // pobranie (i usuniecie) ostatniego elementu z tablicy
print_r($owoce);

print "Tablica ma ".count($owoce)." elementy.".PHP_EOL;
print "Zmienna owoc ma wartosc $owoc.";