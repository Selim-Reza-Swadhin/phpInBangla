<!DOCTYPE html>
<html>
<head>
	<title>PHP with HTML</title>
</head>
<body>
<?php
for($i=1;$i<=10;$i++)//$i++ is equivalent to $i=$i+1
{
	echo $i."<br>";
}
?>
<h1>Table from 1 to 9 for loop</h1>
<table>
	<?php
	for($i=1;$i<10;$i++){
		if(($i-1)%3==0){
			echo "<tr>";
		}
		echo "<td>".$i."</td>";
		if($i % 3 == 0){
			echo "</tr>";
		}
	}
	?>
</table>
</body>
</html>


