<?php
for($i=1;$i<=20;$i++)
{
	if($i%2==0)
	{
		echo $i."<br/>";
	}
}
?>
<hr>
<table>
<?php
for($i=1;$i<=18;$i++)
{
	if(($i-2)%6==0)
	{
		echo "<tr>";
	}
	if($i%2==0)
	{
		echo "<td>".$i."</td>";
	}
	
	if($i%6==0)
	{
		echo "</tr>";
	}
}
?>
</table>

	