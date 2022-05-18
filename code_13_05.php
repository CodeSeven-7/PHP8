<?php
$name = "indra"; // wszystkie male litery (wzorzec)
$enter = " Indra "; // imie wpisane przez uzytkownika

// pozbycie sie spacji na poczatku i na koncu oraz zamiana na male litery
$enter = mb_strtolower(trim($enter)); // przypisujemy wynik do tej samej zmiennej

if ($name == $enter) {
    print "Imiona sa indentyczne!";
} else {
    print "Imiona sie roznia!";
}