<?php
$deg = 45; // stopnie
$rad = deg2rad($deg); // zamiana stopni na radiany

// argumentem dla funkcji trygonometrycznych w jezyku PHP sa radiany
$sin = sin($rad);
$cos = cos($rad);
$tan = tan($rad);

printf("Sinus kata %.2f stopni (%.2f radiana) wynosi %.2f".PHP_EOL, $deg, $rad, $sin);
printf("Cosinus kata %.2f stopni (%.2f radiana) wynosi %.2f".PHP_EOL, $deg, $rad, $cos);
printf("Tangens kata %.2f stopni (%.2f radiana) wynosi %.2f".PHP_EOL, $deg, $rad, $tan);