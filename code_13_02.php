<?php
$myText = "Z usmiechem na twarzy czlowiek podwaja swoje mozliwosci.";

$myTextLen = mb_strlen($myText); // liczba znakow w tekscie
$myCut = 22; // po ktorym znaku wycinamy tekst

$newText1 = mb_substr($myText, 0, 21); // pierwsze 21 znakow
$newText2 = mb_substr($myText, $myCut, $myTextLen-$myCut); // od znaku 22 do konca
$newText3 = mb_substr($myText, $myCut, 8); // 8 znakow, zaczynajac od 22

print $newText1.PHP_EOL;
print $newText2.PHP_EOL;
print $newText3.PHP_EOL;