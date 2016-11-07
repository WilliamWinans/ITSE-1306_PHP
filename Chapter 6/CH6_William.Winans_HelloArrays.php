<?php
/*
William Winans
ITSE 1306
2017.01.19
Chapter 6 PHP code assignment
*/

$MyFavQuote = "Everyone should learn how to code. It teaches you how to think. -- Steve Jobs";
$user[] = "wrwinans";
$user[] = "William Winans";
$user[] = "S0M3p@\$\$w0rd";
$user[] = "903-555-1212";
$user[] = "william.winans@tstc.edu";
$user[] = "2650 S East End Blvd, Marshall, TX 75670";
$class['ClassName'] = "ITSE 1306";
$class['ClassSubject'] = "PHP Programming";
$class['InstructorName'] = "Will Winans";
$grocery_list = array(
	'meats' => array(
		'Hamburger Meat', 'Pepperoni', 'Pork Chops', 'Chicken Breasts'
	),
	'frozen' => array(
		'French Fries', 'Tater Tots', 'Hot Pockets', 'Pizza'
	),
	'produce' => array(
		'Potatoes', 'Bananas', 'Strawberries', 'Lettuce', 'Grapes'
	),
	'condiments' => array(
		'Ketchup' , 'Mustard', 'Mayonaise', 'Ranch Dressing', 'BBQ Sauce'
	),
	'pasta' => array(
		'White Rice', 'Spagetti', 'Raviloi', 'Spagetti O\'s'
	),
	'baking' => array(
		'Sugar', 'Salt', 'Pepper'
	),
	'health' => array(
		'Ibuprofen', 'Alka Seltzer', 'Tums'
	)
);

echo "For loop to display the user array<br>" . PHP_EOL;

for($i = 0; $i < count($user); $i++)
{
	echo '$user[' . $i . '] = ' . $user[$i] . '<br>' . PHP_EOL;
}

echo "For loop to display the user array<br>" . PHP_EOL;
$j = 0;
foreach($class as $item)
{
	echo '$class[' . $j . '] = ' . $item . '<br>' . PHP_EOL;
	$j++;
}

echo "Nested foreach loop to display the grocery_list array<br>" . PHP_EOL;
foreach($grocery_list as $label => $department)
{
	echo '$department = ' . $label . '<br>' . PHP_EOL;
	$j++;
	foreach($department as $item)
	{
		echo '$item = ' . $item . '<br>' . PHP_EOL;
	}
}

asort($grocery_list, SORT_REGULAR);

echo "Nested foreach loop to display the grocery_list array after it has been sorted<br>" . PHP_EOL;
foreach($grocery_list as $label => $department)
{
	echo '$department = ' . $label . '<br>' . PHP_EOL;
	$j++;
	foreach($department as $item)
	{
		echo '$item = ' . $item . '<br>' . PHP_EOL;
	}
}

$MyFavQuote = explode('--', $MyFavQuote);
echo "<pre>";
print_r($MyFavQuote);
echo "</pre>";
?>