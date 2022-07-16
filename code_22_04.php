<?php
// deklaracja tablicy z 4 elementami
$owoce = [
    "b" => "jablko",
    "c" => "banan",
    "d" => "arbuz",
    "a" => "gruszka"
];

print "Przed sortowaniem:".PHP_EOL;
print_r($owoce);

ksort($owoce); // sortowanie tablicy wedlug kluczy

print "Po sortowaniu:".PHP_EOL;
print_r($owoce);