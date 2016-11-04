<?php
// Written by Will Winans
/*
William Winans
ITSE 1306
2017.01.10
Chapter 3 PHP code assignment
*/
echo '<pre>';

echo 'Hello World!' . PHP_EOL;

$MyName = 'William Winans';

echo '$MyName = ' . $MyName . PHP_EOL;

$Array_3by3 = array(array(100,101,102),
                    array(103,104,105),
				    array(106,107,108));

echo '$Array_3by3[1][1] = ' . $Array_3by3[1][1] . PHP_EOL;

$DoubleQuoteVariable = "A variable stored in double quotes.";

echo '$DoubleQuoteVariable = ' . $DoubleQuoteVariable . PHP_EOL;

echo 'substr($MyName, 0, 5) = ' . substr($MyName, 0, 5) . PHP_EOL;

$number1 = 110;
$number2 = 25;

echo '$number1 = ' . $number1 . PHP_EOL;
echo '$number2 = ' . $number2 . PHP_EOL;
echo $number1 . ' / ' . $number2 . ' = ' . ($number1 / $number2) . PHP_EOL;

echo 'date("l F jS y", time()) = ' . date("l F jS y", time()) .PHP_EOL;

echo '</pre>';
?>