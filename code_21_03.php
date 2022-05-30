<?php
function silnia($i)
{
    if ($i < 2) {
        return 1;
    } else {
        return $i * silnia($i - 1); // funkcja wywoluje sama siebie
    }
}

for ($x = 1; $x <= 10; $x++) // inicjacja petli
{
    print "$x! = ".silnia($x).PHP_EOL;
}