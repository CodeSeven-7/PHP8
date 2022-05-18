<?php
$myText = "PROGRAMOWANIE";

$myTextRev = strrev($myText); // odwroc tekst
$myTextRepeat = str_repeat('*', 10); // utworz lancuch z 10 znakow *

print $myTextRev." to odwrocony tekst ".$myText.PHP_EOL;
print "10 gwiazdek: ".$myTextRepeat.PHP_EOL;