<?php
include('../../includes/session.php');
include('../../includes/constants.php');
include('../../includes/header.php');
include('../../includes/connection.php');
$link = connect();
$result = execute($link,"SELECT * FROM categories");
?>
<h1>Add News</h1>
<form action="<?= $base_url;?>/modules/news/insert_news.php" method="post">
	Title 
	<input type="text" name="title"><br>

	Description 
	<textarea name="description"></textarea><br>

	Category 
	<select name="category_id">
		<option value="">Choose Category</option>
		<?php
		if(num_rows($result)>0)
		{
			while($row = fetch($result)){?>

				<option value="<?= $row['id'];?>"><?= $row['name'];?></option>

				<?php }	}?>
	</select>
    <br>

	Author 
	<input type="text" name="author"><br><br>

	<input type="submit" value="Add">

	
</form>

<?php include('../../includes/footer.php');?>