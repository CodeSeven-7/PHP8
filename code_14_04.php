<?php
/* definicja zmiennych */
$a = 10; // 1010 binarne
$b = 12; // 1100 binarne

/* operacje bitowe */
$x1 = $a & $b; // iloczyn bitowy (AND)
$x2 = $a | $b; // suma bitowa (OR)
$x3 = $a ^ $b; // alternatywa wykluczajaca (XOR)
$x4 = $a >> 2; // przesun o 2 bity w prawo
$x5 = $a << 2; // przesun o 2 bity w lewo

printf("\$a = %06d".PHP_EOL, decbin($a));
printf("\$a = %06d".PHP_EOL, decbin($b));
printf(str_repeat('-', 11).PHP_EOL);
printf("AND: %06d".PHP_EOL, decbin($x1));
printf("OR: %06d".PHP_EOL, decbin($x2));
printf("XOR: %06b".PHP_EOL, decbin($x3));
printf(">>: %06d".PHP_EOL, decbin($x4));
printf("<<: %06b".PHP_EOL, decbin($x5));