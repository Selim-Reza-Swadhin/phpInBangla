<?php
$num1 = $_GET['num_1'];
$num2 = $_GET['num_2'];
$opt = $_GET['operation'];
if ($opt == 'add') {
    add($num1, $num2);
}
if ($opt == 'minus') {
    minus($num1, $num2);
}
if ($opt == 'divide') {
    divide($num1, $num2);
}
if ($opt == 'multiply') {
    multiply($num1, $num2);
}

function add($a, $b)
{
    echo $a + $b;
}

function minus($a, $b)
{
    echo $a - $b;
}

function divide($a, $b)
{
    echo $a / $b;
}

function multiply($a, $b)
{
    echo $a * $b;
}

?>
<br>
<a href="calculator.php">Go Back</a>