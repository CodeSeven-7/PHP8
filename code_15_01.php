<?php
/*
 * Dany jest kwadrat o boku a = 12
 * Oblicz obwod, pole i przekatna kwadratu
 */
$a = 12;
$p = $a**2; // pole kwadratu
$o = $a*4; // obwod kwadratu
$q = $a*sqrt(2); // przekatna kwadratu sqrt oznacza pierwiastek

printf("Pole kwadratu o boku %.1f wynosi %.1f \n", $a, $p);
printf("Obwod kwadratu o boku %.1f wynosi %.1f \n", $a, $o);
printf("Przekatna kwadratu o boku %.1f wynosi %.1f \n", $a, $q);

/*
* W trojkacie prostokatnym o bokach abc bok a = 25, b = 12
* a i b sa przyprostokatnymi, c jest przeciwprostokatna
* Oblicz obwod i pole trojkata
*/
$a = 25;
$b = 12;
$c = sqrt($a**2 + $b**2); // sqrt oznacza pierwiastek
$o = $a + $b + $c; // obwod trojkata
$po = $o / 2; // polowa obwodu trojkata
$p = sqrt($po*($po-$a)*($po-$b)*($po-$c)); // pole trojkata

printf("Pole trojkata o bokach a=%.1f, b=%.1f, c=%.1f wynosi %.1f".PHP_EOL, $a, $b, $c, $p);
printf("Obwod trojkata o bokach a=%.1f, b=%.1f, c=%.1f wynosi %.1f".PHP_EOL, $a, $b, $c, $o);

/*
* Dane jest kolo o srednicy r=45
* Oblicz pole i obwod kola
*/
$r = 45;
$p = pi()*($r**2); // pole kola, π pobieramy z funkcji pi()
$o = 2*pi()*$r; // obwod kola

printf("Pole kola o promieniu %.1f wynosi %.1f".PHP_EOL, $r, $p);
printf("Obwod kola o promienu %.1f wynosi %.1f".PHP_EOL, $r, $o);