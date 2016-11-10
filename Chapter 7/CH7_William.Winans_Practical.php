<?php
/*
William Winans
ITSE 1306
2017.01.17
Chapter 7 PHP code assignment
*/

$text_contents = "";
$ExampleNumber = 5000 / 98;
$timestamp = mktime(11, 45, 00, 07, 04, 1976);
$timestamp2 = mktime(1, 45, 00, 4, 35, 2016);

$text_contents = "<pre>";

$text_contents .= sprintf("My ExampleNumber variable is %b with the binary integer specifier.\n", $ExampleNumber);
$text_contents .= sprintf("My ExampleNumber variable is %c with the ASCII Char specifier.\n", $ExampleNumber);
$text_contents .= sprintf("My ExampleNumber variable is %d with the signed decimal specifier.\n", $ExampleNumber);
$text_contents .= sprintf("My ExampleNumber variable is %e with the scientific notation specifier.\n", $ExampleNumber);
$text_contents .= sprintf("My ExampleNumber variable is %f with the floating point specifier.\n", $ExampleNumber);
$text_contents .= sprintf("My ExampleNumber variable is %o with the octal integer specifier.\n", $ExampleNumber);
$text_contents .= sprintf("My ExampleNumber variable is %s with the string specifier.\n", $ExampleNumber);
$text_contents .= sprintf("My ExampleNumber variable is %u with the unsigned decimal specifier.\n", $ExampleNumber);
$text_contents .= sprintf("My ExampleNumber variable is %x with the lowercase hexadecimal specifier.\n", $ExampleNumber);
$text_contents .= sprintf("My ExampleNumber variable is %X with the uppercase hexadecimal specifier.\n", $ExampleNumber);

$text_contents .= sprintf("My ExampleNumber variable is '$%010.0f' with the 0 decimal precision specifier.\n", $ExampleNumber);
$text_contents .= sprintf("My ExampleNumber variable is '$%010.1f' with the 1 decimal precision specifier.\n", $ExampleNumber);
$text_contents .= sprintf("My ExampleNumber variable is '$%010.2f' with the 2 decimal precision specifier.\n", $ExampleNumber);
$text_contents .= sprintf("My ExampleNumber variable is '%010.3f' with the 3 decimal precision specifier.\n", $ExampleNumber);
$text_contents .= sprintf("My ExampleNumber variable is '%010.4f' with the 4 decimal precision specifier.\n", $ExampleNumber);
$text_contents .= sprintf("My ExampleNumber variable is '%010.5f' with the 5 decimal precision specifier.\n", $ExampleNumber);

$text_contents .= date("l F jS, Y - g:ia", $timestamp) . "\n";
$text_contents .= date("W", $timestamp) . "\n";
$text_contents .= date("Y.m.d", $timestamp) . "\n";

if (checkdate(date("n", $timestamp2), date("j", $timestamp2), date("Y", $timestamp2)) == TRUE)
{
	$text_contents .= '$timestamp2 is a valid date.\n';
	$text_contents .= "This is due to the face that the mktime() function added the extra days to the end of the month and moved the timestamp variable forward to a valid date.\n";
}
else
{
	//echo '$timestamp2 is NOT a valid date.';
	$text_contents .= '$timestamp2 is NOT a valid date.';
}
$text_contents .= "</pre>";

echo $text_contents;

$file_handle = fopen("CH7_William.Winans_Practical.html", "w") or die("Failed to create file.");
fwrite($file_handle, $text_contents) or die("Count not write to file");
fclose($file_handle);

$cmd = "dir";

exec(escapeshellcmd($cmd), $output, $status);

if ($status)
{
	echo "Exec command failed";
}
else
{
	$file_handle = fopen("CH7_William.Winans_Practical.html", "a") or die("Failed to create file.");
	echo "<pre>";
	fwrite($file_handle, "<pre>") or die("Count not write to file");
	foreach ($output as $line)
	{
		echo htmlspecialchars("$line\n");
		fwrite($file_handle, htmlspecialchars("$line\n")) or die("Count not write to file");
	}
	echo "</pre>";
	fwrite($file_handle, "</pre>") or die("Count not write to file");
	fclose($file_handle);
}

?>