<?php
$name = "Mistrz Miecza Ken"; // zmienna globalna

function printName()
{
    global $name; // dostep do zmiennej globalnej

    print "Globalna przed zmiana: $name".PHP_EOL;

    $name = "Agentka Polowa Rio"; // zmiana zmiennej globalne
    print "Globalna po zmianie: $name".PHP_EOL;
}

print "Zmienna globalna: $name".PHP_EOL; // zmienna z linii 2
printName();
print "Zmienna globalna: $name".PHP_EOL; // nowa wartosc zmiennej globalnej