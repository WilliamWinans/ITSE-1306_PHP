<?php
/*
William Winans
ITSE 1306
2017.01.12
Chapter 4 PHP code assignment
*/
$MyName = 'William Winans';

echo '$MyName = ' . $MyName . '<br>' . PHP_EOL;

$today = date("l");

if($today == "Monday")
{
	echo "Today is Monday.<br>" . PHP_EOL;
}
elseif ($today == "Tuesday")
{
	echo "Today is Tuesday.<br>" . PHP_EOL;
}
else
{
	echo "Today is not Monday or Tuesday.<br>" . PHP_EOL;
}

$play = "Paper";

switch ($play) {
	case "Rock":
		echo "Rock vs Rock is a tie. Please try again!<br>" . PHP_EOL;
		break;
	case "Paper":
		echo "Paper covers Rock. Paper wins! Please try again!<br>" . PHP_EOL;
		break;
	case "Scissors":
		echo "Rock breaks Scissors. Rock wins! Please try again!<br>" . PHP_EOL;
		break;
	default:
		echo "I don't know what you played. Please try again!<br>" . PHP_EOL;
		break;
}
?>