<?php
$un = $_POST['username'];
$pw = $_POST['password'];
$g = $_POST['gender'];
$desc = $_POST['description'];
$cou = $_POST['country'];
echo "Welcome ".$un.",<br/>";
echo "Your password is ".$pw.".<br/>";
echo "Your gender is ".$g."<br/>";
echo "Your description is ".$desc."<br/>";
echo "You are from ".$cou."<br/>";
echo "You chose following subjects:<br/>";
if(isset($_POST['subject']))
{
	foreach($_POST['subject'] as $sub)
	{
		echo $sub.',';
	}
}



/*$a = 'abc';
if(isset($a))
{
	echo $a;
}
else
{
	echo "The variable is not defined";
}*/
?>