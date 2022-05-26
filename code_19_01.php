<?php
$name = "Mistrz Miecza Ken"; // zmienna globalna

function printName()
{
    $name = "Agentka Polowa Rio"; // zmienna lokalna
    print "Zmienna lokalna: $name".PHP_EOL;
}

print "Zmienna globalna: $name".PHP_EOL; // zmienna z linii 2
printName();
print "Zmienna globalna: $name".PHP_EOL; // ponownie zmienna z linii 2