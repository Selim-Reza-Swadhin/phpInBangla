<?php
$a = 1;
$a = 2;
echo $a;
?>
    <hr>
<?php

//1st way to define array
$a = array(1,2,3);

//2nd way to define array
$a = array(0=>1,1=>2,2=>3);
//$a = array(1=>2,2=>3,0=>1);

//3rd way to define array
$a[] = 1;
$a[] = 2;
$a[] = 3;

//4th way to define array
$a[0] = 1;
$a[1] = 2;
$a[2] = 3;

//5th way to define array
$a = [1,2,3];

echo $a[2];

//Using for loop to print each value of array
$b = [0=>'abc',1=>'cde',2=>'efg'];

for($i=0;$i<=2;$i++)
{
	echo $b[$i]."<br>";
}

echo '<hr>';

$i=0;
while($i<=2)
{
	echo $b[$i]."<br>";
	$i++;
}

?>