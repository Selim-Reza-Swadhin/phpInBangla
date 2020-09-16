<?php
function connect()
{
	return mysqli_connect("localhost","root","","php_specials_db_users");
}
function execute($link,$q)
{
	return mysqli_query($link,$q);
}
function num_rows($res)
{
	return mysqli_num_rows($res);
}
function fetch($res)
{
	return mysqli_fetch_assoc($res);
}