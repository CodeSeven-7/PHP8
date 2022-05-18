<?php
$myText = "Dzialaj! Nie jutro, nie za godzine. Teraz!";
$myTextLower = mb_strtolower($myText); // zamiana na male litery
$myTextUpper = mb_strtoupper($myText); // zamiana na wielkie litery

// weilka litera na poczatku lancucha
$myTextFirst1 = ucfirst($myTextLower);

// wielka litera na poczatku kazdego wyrazu w lancuchu
$myTextWords1 = ucwords($myTextLower);
$myTextWords2 = mb_convert_case($myTextLower, MB_CASE_TITLE, 'UTF-8');

print $myText.PHP_EOL;
print "mb_strtolower: $myTextLower".PHP_EOL;
print "mb_strtoupper: $myTextUpper".PHP_EOL;
print "ucfirst: $myTextFirst1".PHP_EOL;
print "ucwords: $myTextWords1".PHP_EOL;
print "mb_convert_case: $myTextWords2".PHP_EOL;