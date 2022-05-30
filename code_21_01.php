<?php
for ($i = 1; $i <= 10; $i++) // inicjacja petli
{
    if ($i % 2 != 0) { // jesli nieparzyste
        continue; // to przerwij cykl i wykonaj nastepny
    }

    $pow = $i ** 2; // obliczanie kwadratu
    print "$i do potegi 2 = $pow".PHP_EOL;
}