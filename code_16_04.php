<?php
// Data urodzin (mozesz wpisac swoja)
$person = 'Robert Lewandowski';
$d = 21; // dzien
$m = 8; // miesiac
$y = 1988; // rok

// jak dlugo zyjesz?
$seconds = time() - mktime(0, 0, 1, $m, $d, $y);
$days = $seconds / 86400; // 86 400 sekund = 1 dzien

// obliczanie trendow -- zakres od -100 do 100
// korzystamy ze stalych zdefiniowanych w jezyku PHP -- M_PI i M_PI_2
// wiecej: http://php.net/manual/en/function.pi.php
$pi2 = M_PI + M_PI_2;

// cykl intelektualny
$i = (($days % 33) / 33) * $pi2;
$ii = sin($i) * 100;

// cykl emocjonalny
$e = (($days % 28) / 28) * $pi2;
$ee = sin($e) * 100;

// cykl fizyczny
$f = (($days % 23) / 23) * $pi2;
$ff = sin($f) * 100;

// jaka jest tendencja cyklu?
function t($t) {
    $r = (($t >= M_PI_2) && ($t < M_PI_2 + M_PI)) ? 'spadkowa' : 'wzrostowa';
    return $r;
}

// drukowanie wynikow
printf("$person zyje juz %d sekund, czyli %d dni!".PHP_EOL, $seconds, $days);
printf("Dzisiaj jego cykle sa nastepujace:".PHP_EOL);
printf("- intelektualny %d [tendencja %s]".PHP_EOL, $ii, t($i));
printf("- emocjonalny %d [tendencja %s]".PHP_EOL, $ee, t($e));
printf("- fizyczny %d [tendencja %s]".PHP_EOL, $ff, t($f));