<?php
$myText = "Jak czytac KSIAZKI i dlaczego ksiazki warto czytac?";
$searchText = "ksiazki";

$pos1 = mb_stripos($myText, $searchText); // sprawdz pierwsze wystapienie
$pos2 = mb_strrpos($myText, $searchText); // sprawdz ostatnie wystapienie

// tekst zostal odnaleziony?
if ($pos1 === false && $pos2 === false) // nie
{
    print "Szukany tekst nie zostal odnaleziony.";
}
else // tak
{
    if ($pos1 !== false) { // pierwsze
        print "Pierwsze wystapienie ciagu znakow \"$searchText\" ";
        print "zostalo odnalezione na pozycji nr $pos1.";
    }
    print PHP_EOL;
    if ($pos2 !== false) { // ostatnie
        print "Ostatnie wystapienie ciagu znakow \"$searchText\" ";
        print "zostalo odnalezione na pozycji nr $pos2";
    }
}
// dalszy ciag programu