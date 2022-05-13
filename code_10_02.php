<?php
/* konstrukcja match z argumentem */
$code = 432;

$e = match ($code) {
    400 => "kwas",
    401, 402, 403 => 'alginian',
    432, 433 => 'monolaurynian',
    483 => 'winian',
    default => 'nie mam pojecia',
};

print "Dodatek do zywnosci o kodzie $code to jakis $e.".PHP_EOL;

/* konstrukcja match bez argumentow */
$text = 'Czesc';

$lang = match(true) {
    str_contains($text, 'Czesc') => 'polski',
    str_contains($text, 'Welcome') => 'angielski',
    str_contains($text, 'Hola') => 'hiszpanski',
    default => '',
};

print "W lancuchu '$text' wykrylem jezyk $lang.".PHP_EOL;