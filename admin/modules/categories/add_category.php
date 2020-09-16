<?php
include('../../includes/session.php');
include('../../includes/constants.php');
include('../../includes/header.php');
include('../../includes/connection.php');
?>
<h1>Add Category</h1>
<form action="<?= $base_url;?>/modules/categories/insert_category.php" method="post">
	Category Name <input type="text" name="name"><br><br>
	<input type="submit" value="Save">
</form>

<?php include('../../includes/footer.php');?>