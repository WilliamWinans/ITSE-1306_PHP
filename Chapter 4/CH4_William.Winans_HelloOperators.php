<?php
/*
William Winans
ITSE 1306
2017.01.12
Chapter 4 PHP code assignment
*/
$MyName = 'William Winans';

echo '$MyName = ' . $MyName . '<br>' . PHP_EOL;

echo "boolean value 1: [" . (20 > 9) . "]<br>" . PHP_EOL;
echo "boolean value 2: [" . (5 == 6) . "]<br>" . PHP_EOL;
echo "boolean value 3: [" . (1 == 0) . "]<br>" . PHP_EOL;
echo "boolean value 4: [" . (1 == 1) . "]<br>" . PHP_EOL;

echo "Literal: " . TRUE . "<br>" . PHP_EOL;
echo "Variable: " . $MyName . "<br>" . PHP_EOL;

$a = 500;
$b = 234;
$c = 200;

echo "Arithmetic: " . ($a + $b) . "<br>" . PHP_EOL;
echo "Assignment: " . ($c = $a + $b) . "<br>" . PHP_EOL;
echo "Comparison: " . ($a > $b) . "<br>" . PHP_EOL;
echo "Increment/Decrement: " . ++$b . " / " . --$a . "<br>" . PHP_EOL;
echo "Logical: " . (($a and $b) == ($a + $b)) . "<br>" . PHP_EOL;
echo "String: " . $a . $b . $c . "<br>" . PHP_EOL;

echo '$a: ' . $a . '<br>$b: ' . $b . '<br>$c: ' . $c . '<br>' . PHP_EOL;

if ($a == $b) {echo '$a == $b is TRUE <br>' . PHP_EOL;}
else {echo '$a == $b is FALSE <br>' . PHP_EOL;}

if ($b === $c) {echo '$b === $c is TRUE <br>' . PHP_EOL;}
else {echo '$b === $c is FALSE <br>' . PHP_EOL;}

if ($a != $b) {echo '$a != $b is TRUE <br>' . PHP_EOL;}
else {echo '$a != $b is FALSE <br>' . PHP_EOL;}

if ($b !== $c) {echo '$b !== $c is TRUE <br>' . PHP_EOL;}
else {echo '$b !== $c is FALSE <br>' . PHP_EOL;}

if ($a > $b) {echo '$a > $b is TRUE <br>' . PHP_EOL;}
else {echo '$a > $b is FALSE <br>' . PHP_EOL;}

if ($b >= $c) {echo '$b >= $c is TRUE <br>' . PHP_EOL;}
else {echo '$b >= $c is FALSE <br>' . PHP_EOL;}

if ($a < $b) {echo '$a < $b is TRUE <br>' . PHP_EOL;}
else {echo '$a < $b is FALSE <br>' . PHP_EOL;}

if ($b <= $c) {echo '$b <= $c is TRUE <br>' . PHP_EOL;}
else {echo '$b <= $c is FALSE <br>' . PHP_EOL;}
?>