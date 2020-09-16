<?php
$a = array(1,5,3,4,7,8,9,2,6);
$c= count($a);
?>
<table border="1" width="100%">
	<?php
	for($i=0;$i<$c;$i++)
	{
		if($i%3==0)
		{
			echo "<tr>";
		}
		echo "<td>".$a[$i]."</td>";
		if(($i+1)%3==0)
		{
			echo "</tr>";
        }
	}
    ?>
    <hr>
    <?php
	/*foreach($a as $i=>$v)
	{
		if($i%3==0)
		{
			echo "<tr>";
		}
		echo "<td>".$v."</td>";
		if(($i+1)%3==0)
		{
			echo "</tr>";
		}
	}*/
	?>
</table>

