<?php
$myText = "Oczywiscie, ze dzik jest najlepszym przyjacielem czlowieka";

$myTextDog = str_replace('dzik', 'pies', $myText); // zamiana dzik na pies
$myTextCat = str_replace('dzik', 'kot', $myText); // zamiana dzik na kot

print $myText.PHP_EOL;
print $myTextDog.PHP_EOL;
print $myTextCat.PHP_EOL;