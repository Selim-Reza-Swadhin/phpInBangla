<?php
include('../../includes/session.php');
include('../../includes/constants.php');
include('../../includes/header.php');
include('../../includes/connection.php');
$link = connect();
$id = $_GET['id'];
$result = execute($link,"SELECT * FROM categories WHERE id = ".$id);
$row = fetch($result);
?>
<h1>Edit Category</h1>
<form action="<?= $base_url;?>/modules/categories/update_category.php" method="post">
	Hidden Id : <input type="text" name="id" placeholder="hidden id" value="<?= $row['id'];?>">
    <br>
	Category Name : <input type="text" name="name" value="<?= $row['name'];?>"><br><br>
	<input type="submit" value="Save">
</form>

<?php include('../../includes/footer.php');?>