<?php
include('../../includes/session.php');
include('../../includes/constants.php');
include('../../includes/connection.php');
$name = $_POST['name'];
$q = "INSERT INTO categories (name) VALUES('".$name."')";
$link = connect();
execute($link,$q);
redirect($base_url.'modules/categories?insert=success');
?>