<?php
// definicja funkcji z 2 argumentami
// kazdy argument ma ustalona wartosc domyslna
function drukuj(?string $tekst = "", ?bool $nowa_linia = true)
{
    print $tekst;
    if ($nowa_linia === true)
    {
        print PHP_EOL;
    }
}

drukuj("Lubie ", false);
drukuj("programowac!");
drukuj();
drukuj("Ale lubie tez wakacje!");