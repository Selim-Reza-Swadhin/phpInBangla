<?php
$a = "String1";
$b = "String2";
$c = $a.$b;//Concatenation
echo $c;
?>

    <hr>

<?php
$a = 6;
$b = 6;
if($a>$b)
{
	echo $a." is greater than ".$b;
}
else
{
	echo $b." is greater than ".$a;
}
echo '<br>';
if($a%2 != 0)
{
	echo "Odd Number";
}
else
{
	echo "Even Number";
}
if($a%2 == 1)
{
	echo "Odd number";
}
?>