<?php
echo '<html>';
echo '<body>';
$firstname=$_POST['fname'];
$lastname=$_POST['lname']; 
$xory=$_POST['xory'];
$salary=$_POST['salary'];

$theFile=fopen('savedInfo.txt', 'w') or die('unable to open or create');

$theText=$firstname."\r\n".$lastname."\r\n".$xory."\r\n".$salary."\r\n";
if(!empty($_POST['check_list']))
{
	foreach($_POST['check_list'] as $item)
	{
		$theText=$theText.$item."\r\n"; 
	}
}

fwrite($theFile, $theText); 
fclose($theFile); 
echo '</body>';
echo '</html>';
?>
