<?php
include('../../includes/session.php');
include('../../includes/constants.php');
include('../../includes/header.php');
include('../../includes/connection.php');
$link = connect();
$result = execute($link,"SELECT * FROM categories");
?>
<h1>Category Manager</h1>

<?php
if(isset($_GET['insert'])){?>

	<p><b>Category added successfully</b></p>

<?php }if(isset($_GET['update'])){?>

	<p><b>Category updated successfully</b></p>

<?php }if(isset($_GET['delete'])){?>

	<p><b>Category deleted successfully</b></p>

<?php }?>

<a href="<?= $base_url;?>modules/categories/add_category.php">Add New Category</a><br><br>

<?php if(num_rows($result) > 0){?>

	<table width="100%;" border="1">
		<tr>
            <td><b>SN</b></td>
            <td><b>Name</b></td>
            <td><b>Action</b></td>
        </tr>

		<?php
		$i=0;
		while($cat = fetch($result)){
			$i++;
			?>

			<tr>
				<td><?= $i;?></td>
				<td><?= $cat['name'];?></td>
				<td>
					<a href="<?= $base_url;?>modules/categories/edit_category.php?id=<?= $cat['id'];?>">Edit</a>
					<a href="<?= $base_url;?>modules/categories/delete_category.php?id=<?= $cat['id'];?>">Delete</a>
				</td>
			</tr>
			<?php }	?>
	</table>
	<?php }else{
                echo "No categories found";
             }?>
<?php include('../../includes/footer.php');?>