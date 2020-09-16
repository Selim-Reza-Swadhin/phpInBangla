<?php

$a  = 'anwar ali';
//$a = ucfirst($a);//changes the case of the first letter of string to upper case
//echo $a;
//$a = strtoupper($a);// changes the case of entire string to upper case
$a = strtolower($a);// changes the case of entire string to lower case
echo $a;
echo '<br>';
$count = strlen($a); 
echo $count;
echo '<br>';
$str = ' Abc           Def ';
$str = trim($str);//Removes white space (Unnecessary space before and after string)
echo strlen($str);
echo '<br>';

$str = "a b c d e a b c d e"; // 1 b 2 d e 1 b 2 d e
//$str = str_replace('a b c','1 b 2',$str); // replaces one or more character in a string with another character
$str = str_replace(array('a','c'),array('1','2'),$str);//replaces a set of character in array with another set of array in a string
echo $str;
echo '<br>';


$a = "Apple is a tasty fruit";
$sub = substr($a,1,9);// grabs a sub string from a string from provided index to last or provided index to provided number of character
echo $sub;
echo '<br>';

$a = 'a b c d e';
$arr = explode(' ',$a); // separate a string and places each pieces into an array with respect to a character or a string
$arr2 = implode(',',$arr);// joins the values of an array and changes it to a string with respect to a character or a string

$a = 'Apple is a tasty fruit';
$arr = explode('a',$a);
var_dump($arr);