<?php
// deklaracja tablicy z 4 elementami
$owoce = ["jablko", "banan", "arbuz", "gruszka"];

print "Przed sortowaniem:".PHP_EOL;
print_r($owoce);

sort($owoce); // sortowanie tablicy

print "Po sortowaniu:".PHP_EOL;
print_r($owoce);