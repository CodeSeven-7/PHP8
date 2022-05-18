<?php
$myText = "01101011"; // lancuch z zerami i jedynkami
$mask = "01"; // tych znakow szukamy

if (strspn($myText, $mask) == strlen($myText))
{
    print "Lancuch '$myText' to ciag znakow binarnych.".PHP_EOL;
}
// dalszy ciag programu