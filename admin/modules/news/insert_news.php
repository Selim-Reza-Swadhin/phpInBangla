<?php
include('../../includes/session.php');
include('../../includes/constants.php');
include('../../includes/connection.php');
$title = $_POST['title'];
$description = $_POST['description'];
$author = $_POST['author'];
$category_id = $_POST['category_id'];
$published_date = date('Y-m-d');

$q = "INSERT INTO news (title,description,author,category_id,published_date) VALUES('".$title."','".$description."','".$author."','".$category_id."','".$published_date."')";
$link = connect();
execute($link,$q);
redirect($base_url.'modules/news?insert=success');
?>