<?php
// definicja stalych
define('BOOK', 'PHP8 i SQL');
define('YEAR', '2021');
define('PHP', ['3','4','5','7','8']); // stala moze tez byc tablica
# define ('PHP_EOL',"\n");

print "Ksiazka: ".BOOK." (".YEAR." rok)";
print PHP_EOL;
print "Wersja PHP: ".PHP[4];