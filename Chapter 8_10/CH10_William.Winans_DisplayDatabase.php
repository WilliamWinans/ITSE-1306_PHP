<?php
/*
William Winans
ITSE 1306
2017.01.17
Chapter 7 PHP code assignment
*/
error_reporting(E_ERROR | E_WARNING | E_PARSE);

$text_contents = "<pre>\n";

$hostname = "127.0.0.1";
$database = "itse_1306";
$username = "itse_1306";
//$password = "password";
$username = "root";
//$password = "";

$dbconnection = mysql_connect($hostname, $username);
if ($dbconnection == FALSE) 
{
	die("Could not connect to database. Error: " . mysql_error($dbconnection));
}
else
{
	$text_contents .= "Successful connection to $hostname." . PHP_EOL;
}

$db_select = mysql_select_db($database);
if ($db_select == FALSE) 
{
	die("Could not select database. Error: " . mysql_error($dbconnection));
}
else
{
	$text_contents .= "Successful connection to $database." . PHP_EOL;
}

$query = "SHOW TABLES FROM $database";
$result = mysql_query($query);
if (!$result)
{
	die('Error with TABLES query.<br>Acutal query: ' . $query . '<br> MySQL Error is <b>' . mysql_error() . '</b>');
}
else
{
	while ($tables = mysql_fetch_array($result))
	{
		$text_contents .= PHP_EOL . "<i><b>Table Name:</b></i> " . $tables[0] . PHP_EOL;	
		$query2 = "SHOW columns FROM ". $tables[0];
		$result2 = mysql_query($query2);
		while ($col_name = mysql_fetch_array($result2, MYSQL_NUM))
		{
			$text_contents .= " <i><b>Column:</b></i> " . $col_name[0];
		}
		$text_contents .= PHP_EOL;
		
		$query3 = "SELECT * FROM $tables[0]";
		$result3 = mysql_query($query3);
		$num_rows = mysql_num_rows($result3);
		if ($num_rows == 0)
		{
			$text_contents .= "No data in this table.";
		}
		else
		{
			while ($data = mysql_fetch_array($result3, MYSQL_NUM))
			{
				foreach($data as $row)
				{
					$text_contents .= $row. " ";	
				}
				$text_contents .= PHP_EOL;	
			}
		}
		$text_contents .= PHP_EOL;
	}
}
mysql_free_result($result);
mysql_free_result($result2);
mysql_free_result($result3);

$text_contents .= "</pre>";

mysql_close($dbconnection);

$file_handle = fopen("CH10_William.Winans_DisplayDatabase.html", "w") or die("Failed to create file.");
fwrite($file_handle, $text_contents) or die("Count not write to file");
fclose($file_handle);

echo "<a href=\"CH10_William.Winans_DisplayDatabase.html\">CH10_William.Winans_DisplayDatabase.html</a>";

?>