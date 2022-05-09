<?php
$liczba = 1988;

printf("%%b = '%b'".PHP_EOL, $liczba); // format binarny (dwojkowy)
printf("%%e = '%e'".PHP_EOL, $liczba); // format naukowy
printf("%%f = '%f'".PHP_EOL, $liczba); // format zmiennoprzecinkowy
printf("%%o = '%o'".PHP_EOL, $liczba); // format osemkowy
printf("%%s = '%s'".PHP_EOL, $liczba); // format tekstowy
printf("%%x = '%x'".PHP_EOL, $liczba); // format szesnastowy (heksadecymalny) 

printf("Rok %d w formacie szesnastkowym to %X.", $liczba, $liczba);