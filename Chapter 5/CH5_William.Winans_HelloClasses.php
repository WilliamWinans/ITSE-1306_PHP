<?php
/*
William Winans
ITSE 1306
2017.01.17
Chapter 5 PHP code assignment
*/
include_once('CH5_William.Winans_HelloFunctions.php');

$MyName = 'wIlLiAm wiNANs';

echo fix_name($MyName) . "<br>" . PHP_EOL;

$objUser = new PotentialUser("wrwinans", "William", "Winans", "SomeP@SSw0rd", "903-555-1212", "william.winans@tstc.edu", "2650 S East End Blvd, Marshall, Tx 75670");
$objEnrolledUser = new EnrolledUser("ITSE 1306", "PHP Programming", "Will Winans", $objUser->username, $objUser->fname, $objUser->lname, $objUser->password, $objUser->pnumber, $objUser->email, $objUser->phy_address);

echo "<pre>";

print_r($objUser);
print_r($objEnrolledUser);

echo "</pre>";
?>