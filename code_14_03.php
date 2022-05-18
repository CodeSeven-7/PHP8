<?php
/* definicja zmiennych */
$weekend = true; // jest weekend?
$sun = true; // swieci slonce?
$hour = 10; // ktora godzina?

if ($weekend === true) { // tak?
    if ($sun === true && $hour < 18) { // swieci slonce i nie jest za pozno
        print "Hurra! Jedziemy na plaze!";
    } else {
        print "Znowu siedzimy w domu ;(";
    }
}