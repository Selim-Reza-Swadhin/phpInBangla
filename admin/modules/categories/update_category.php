<?php
include('../../includes/session.php');
include('../../includes/constants.php');
include('../../includes/connection.php');
$id = $_POST['id'];
$name = $_POST['name'];
$q = "UPDATE categories
      SET 
      name= '$name' 
      WHERE id = '$id'";
$link = connect();
execute($link,$q);
redirect($base_url.'modules/categories?update=success');
?>