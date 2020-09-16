<?php
	$a = 6;
	$b = 6;
	if($a>$b)
	{
		echo $a." is greater than ".$b;
	}
	/*else
	{
		if($b > $a)
		{
			echo $b." is greater than ".$a;
		}
		else
		{
			echo $a." is equal to ".$b;
		}
	}*/
	elseif($b>$a)
	{
		echo $b." is greater than ".$a;
	}
	else
	{
		echo $b." is equal to ".$a;
	}
?>