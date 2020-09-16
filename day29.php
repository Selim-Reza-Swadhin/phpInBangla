<?php
$link = mysqli_connect("localhost","root","","php_specials_db_users");
$result = mysqli_query($link,"SELECT * FROM tbl_users");
$count = mysqli_num_rows($result);
if($count>0)
{
	/*$row = mysqli_fetch_assoc($result);
	echo $row['name']."<br>";
	$row = mysqli_fetch_assoc($result);
	echo $row['name']."<br>";
	$row = mysqli_fetch_assoc($result);
	echo $row['name']."<br>";
	$row = mysqli_fetch_assoc($result);
	echo $row['name']."<br>";
	$row = mysqli_fetch_assoc($result);
	echo $row['name']."<br>";*/

	echo "<hr>";

	while($row=mysqli_fetch_assoc($result))
	{
		echo $row['name']."<br>";
	}
}
?>
