<?php
/*
William Winans
ITSE 1306
2017.01.17
Chapter 5 PHP code assignment
*/
$MyName = 'wIlLiAm wiNANs';

echo fix_name($MyName) . "<br>" . PHP_EOL;

function fix_name($n)
{
	$n = ucwords(strtolower($n));
	return $n;
}



?>