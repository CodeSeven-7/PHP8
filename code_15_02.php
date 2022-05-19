<?php
/*
* Dany jest szecian o boku a = 12
* Oblicz pole i objetosc szescianu
*/
$a = 12;
$p = 6*($a**2); // pole szescianu
$v = $a**3; // objetosc szescianu

printf("Pole szescianu o boku %.1f wynosi %.1f".PHP_EOL, $a, $p);
printf("Objetosc szescianu o boku %.1f wynosi %.1f".PHP_EOL, $a, $v);

/*
* Dany jest walec o promieniu r = 18 i wysokosci h = 32
* Oblicz pole i objetosc walca
*/
$r = 18;
$h = 32;
$p = 2*M_PI*$r*($r+$h); // pole walca
$v = M_PI*($r**2)*$h; // objetosc walca

printf("Pole walca o promieniu %.1f i wysokosci %.1f wynosi %.1f".PHP_EOL, $r, $h, $p);
printf("Objetosc walca o promieniu %.1f i wysokosci %.1f wynosi %.1f".PHP_EOL, $r, $h, $v);

/*
* Dana jest kula o promieniu r = 18
* Oblicz pole i objetosc kuli
*/
$r = 18;
$p = 4*M_PI*($r**2); // pole kuli
$v = (4/3)*M_PI*($r**3); // objetosc kuli

printf("Pole kuli o promieniu %.1f wynosi %.1f".PHP_EOL, $r, $p);
printf("Objetosc kuli o promieniu %.1f wynosi %.1f".PHP_EOL, $r, $p);