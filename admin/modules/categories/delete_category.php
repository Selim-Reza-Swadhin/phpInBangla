<<?php
include('../../includes/session.php');
include('../../includes/constants.php');
include('../../includes/connection.php');
$id = $_GET['id'];
$q = "DELETE FROM categories WHERE id = ".$id;
$link = connect();
execute($link,$q);
redirect($base_url.'modules/categories?delete=success');
?>