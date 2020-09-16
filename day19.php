<?php
$arr = array('a','b','c','d','e');
foreach($arr as $a)
{
	echo $a."<br>";
}
?>
    <hr>
<?php
foreach($arr as $k=>$a)
{
	echo $a." is in index ".$k."<br>";
}
?>
    <hr>
<?php

$student = array('name'=>'Suman','address'=>'Biratnagar','age'=>26);
echo $student['name'];
echo $student['address'];
echo $student['age'];
?>