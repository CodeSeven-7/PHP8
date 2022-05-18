<?php
// slynne slowa Neila Armstronga
$myText = "To jest maly krok dla czlowieka, ale wielki krok dla ludzkosci.";
$searchText = "dla";

$pos = mb_strpos($myText, $searchText); // sprawdz pozycje

// tekst zostal odnaleziony?
if ($pos !== false) // tak
{
    print "Pierwsze wystapienie ciagu znakow \"$searchText\" ";
    print "zostalo odnalezione na pozycji nr $pos.";
}
else // nie
{
    print "Szukany tekst nie zoslal odnaleziony.";
}
// dalszy ciag programu