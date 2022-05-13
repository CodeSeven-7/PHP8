<?php
/* definicja zmiennych */
$a = 151;
$b = 81;
$c = 55;
$d = 12;

/* konstrukcja warunkowa */
if ( ($a >= 50 && $b < 100) || ($c < 80 && $d !=20) )
{
    print "Wykonuje sobie kod pierwszy.".PHP_EOL;
}

if ( !($a >= 50 && $b > 100) && ($c < 80 && $d != 20) )
{
    print "Wykonuje sobie kod drugi.".PHP_EOL;
}