<?php
$liczby = []; // deklaracja pustej tablicy
$ile = 10;

for ($i = 0; $i <= $ile; $i++) {
    if ($i % 2 == 0) { // parzyste?
        $liczby[] = $i; // dodajemy do tablicy kolejny element
        // array_push($liczby, $i); // alternatywa dla $liczby[] = $i
    }
}

$e = count($liczby); // ile elementow ma tablica?

// dostep do elementow tablicy
for ($i = 0; $i < $e; $i++) {
    print "klucz = $i, wartosc = $liczby[$i]".PHP_EOL;
}