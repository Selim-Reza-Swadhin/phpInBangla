<?php
session_start();
function redirect($page)
{
	echo '<script>window.location = "'.$page.'";</script>';
}
if(!isset($_SESSION['admin']))
{
	redirect('index.php');
}
?>