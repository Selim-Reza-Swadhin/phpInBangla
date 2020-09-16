<?php
include('includes/session.php');
//unset($_SESSION['admin']);
session_destroy();
redirect('index.php');
?>