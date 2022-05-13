<?php
$city = "Krakow"; // informacja od uzytkownika

switch ($city) {
    case "Londyn":
        print "Stolica Wielkiej Brytanii";
        break;
    case "Berlin": // przenikanie warunku
    case "Monachium":
        print "Interesujace miasto w Niemczech";
        break;
    case "Zakopane": // przenikanie warunku
    case "Krakow":
        print "$city to bardzo piekne miasto w Polsce!";
        break;
    default:
        print "Pozostale miasta tez sa fajne!";
}