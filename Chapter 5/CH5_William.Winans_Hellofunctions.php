<?php
/*
William Winans
ITSE 1306
2017.01.17
Chapter 5 PHP code assignment
*/
function fix_name($n)
{
	$n = ucwords(strtolower($n));
	return $n;
}

Class PotentialUser
{
	public $username = "username";
	public $fname = "fname";
	public $lname = "lname";
	public $password = "password";
	public $pnumber = "pnumber";
	public $email = "email";
	public $phy_address = "phy_address";
	
	function __construct($username, $fname, $lname, $password, $pnumber, $email, $phy_address)
	{
		$this -> username = $username;
		$this -> fname = $fname;
		$this -> lname = $lname;
		$this -> password = $password;
		$this -> pnumber = $pnumber;
		$this -> email = $email;
		$this -> phy_address = $phy_address;
	}
	
};

class EnrolledUser extends PotentialUser
{
	public $class_name, $class_subject, $instructor_name;
	
	function __construct($class_name, $class_subject, $instructor_name, $username, $fname, $lname, $password, $pnumber, $email, $phy_address)
	{
		$this -> class_name = $class_name;
		$this -> class_subject = $class_subject;
		$this -> instructor_name = $instructor_name;
		parent::__construct($username, $fname, $lname, $password, $pnumber, $email, $phy_address);
	}
};

?>