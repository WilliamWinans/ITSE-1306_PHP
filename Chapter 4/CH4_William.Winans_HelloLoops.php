<?php
/*
William Winans
ITSE 1306
2017.01.12
Chapter 4 PHP code assignment
*/
$MyName = 'William Winans';

echo '$MyName = ' . $MyName . '<br><br>' . PHP_EOL;

echo 'While Loop:<br>' . PHP_EOL;
echo '5 times table from 0 to 20:<br>' . PHP_EOL;
$count = 0;
while ($count <= 20)
{
	echo "$count * 5 = " . $count * 5 . "<br>" . PHP_EOL;
	$count++;
}

echo 'a-z and A-Z<br>' . PHP_EOL;
$count = 65;
while ($count <= 122)
{
	if ($count >= 91 && $count <= 96)
	{
		$count++;
	}
	else
	{
		echo " " . chr($count);	
		$count++;
	}
}
echo "<br><br>" . PHP_EOL;

echo 'Do...While Loop:<br>' . PHP_EOL;
echo '10 times table from 0 to 20:<br>' . PHP_EOL;
$count = 0;
do {
	echo "$count * 10 = " . $count * 10 . "<br>" . PHP_EOL;
	$count++;	
} while ($count <= 20);


echo 'a-z and A-Z<br>' . PHP_EOL;
$count = 65;
do {
	if ($count >= 91 && $count <= 96)
	{
		$count++;
	}
	else
	{
		echo " " . chr($count);	
		$count++;
	}
} while ($count <= 122);

echo "<br><br>" . PHP_EOL;

echo 'For Loop:<br>' . PHP_EOL;
echo '20 times table from 0 to 20:<br>' . PHP_EOL;
for ($count = 0; $count <= 20; $count++)
{
	echo "$count * 20 = " . $count * 20 . "<br>" . PHP_EOL;
}
echo 'a-z and A-Z<br>' . PHP_EOL;
for ($count = 65; $count <= 122; $count++)
{
	if (!($count >= 91 && $count <= 96))
	{
		echo " " . chr($count);	
	}
}
?>