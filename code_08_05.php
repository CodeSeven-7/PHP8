<?php
$string = 'Jak sie masz?';
if (str_contains($string, 'sie')) {
    print 'OK (zawiera sie)'.PHP_EOL;
}
if (str_starts_with($string, 'Jak')) {
    print 'OK (rozpoczyna sie)'.PHP_EOL;
}
if (str_ends_with($string, 'masz?')) {
    print 'OK (konczy sie)'.PHP_EOL;
}