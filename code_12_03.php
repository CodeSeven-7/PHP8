<?php
$myText1 = "Zycie jest jak pudelko czekoladek - nigdy nie wiesz, co ci sie trafi.";
$myText2 = "Miej serce i patrzaj w serce";

$len1 = mb_strlen($myText1);
$len2 = mb_strlen($myText2);

if ($len1 == $len2)
{
    print "Ciagi znakow maja te sama dlugosc.";
}
else
{
    print "Ciagi znakow nie maja tej samej dlugosci.";
    print "Pierwszy ma dlugosc $len1 znakow, a drugi ma dlugosc $len2 znakow.";
}
// dalszy ciag programu