<?php
/* imie wprowadzone przez uzytkownika, mozesz wpisac swoje */
$name = "   Arkadiusz   ";
print "Tekst oryginalny: >". $name. "<".PHP_EOL;

/* usuniecie spacji z lewej i prawe strony */
print "Funkcja trim: >". trim($name). "<".PHP_EOL;

/* usuniecie spacji z lewej strony */
print "Funkcja ltrim: >". ltrim($name). "<".PHP_EOL;

/* usuniecie spacji z prawej strony */
print "Funkcja rtrim: >". rtrim($name). "<".PHP_EOL;