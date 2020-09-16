<?php
$student[0] = array('name'=>'Suman','address'=>'Biratnagar','age'=>26);
$student[1] = array('name'=>'Anwar','address'=>'Kathmandu','age'=>30);
echo $student[0]['name'];
echo $student[0]['address'];
echo '<br>';
echo $student[1]['name'];
?>
    <hr>
<?php

$a[0][0] = 1;
$a[0][1] = 2;
$a[1][0] = 3;
$a[1][1] = 4;

$b[0] = 1;
$b[1] = 2;
echo "<pre>";
var_dump($a); 
echo "</pre>";
?>