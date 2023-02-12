<?php

# PHP don't require explicit type definition in variable declaration

# NOTE: when A VALUE needs to be interpreted as a different type
# the VALUE ITSELF DOES NOT change type

#NUMERIC CONTEXTS

$foo = "0"; //string
var_dump($foo);
$foo = $foo + 2; // int
var_dump($foo);
$foo = $foo + 1.3; // float
var_dump($foo);
$foo = 5 + "10 cerditos pequeños";
var_dump($foo); // $foo = int(15)
$foo = 5 + "10 Cerdos pequeños";
var_dump($foo); // $foo = int(15)


#ARRAYS

$a = 'CAR';
$a[0] = 'B';
echo $a;

$foo = 10;
$bar = (string) $foo;

var_dump($bar);


$foo = 100;
$str = "$foo";
$fst = (string) $foo;

if ($fst === $str) {
    echo "They are the same";
}
