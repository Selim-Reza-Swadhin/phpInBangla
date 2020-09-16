<?php
include('../../includes/session.php');
include('../../includes/constants.php');
include('../../includes/header.php');
include('../../includes/connection.php');
$link = connect();
$result = execute($link,"SELECT * FROM news");
?>
<h1>News Manager</h1>

<?php
if(isset($_GET['insert'])){	?>
	<p>
        <b>News added successfully</b>
    </p>
<?php }
if(isset($_GET['update'])){	?>
	<p>
        <b>News updated successfully</b>
    </p>
<?php }
if(isset($_GET['delete'])){	?>
	<p>
        <b>News deleted successfully</b>
    </p>
	<?php }?>

<a href="<?php echo $base_url;?>modules/news/add_news.php">Add New News</a><br><br>
<?php
if(num_rows($result) > 0){?>

	<table width="100%;" border="1">
		<tr>
            <td><b>SN</b></td>
            <td><b>Title</b></td>
            <td><b>Action</b></td>
        </tr>

		<?php
		$i=0;
		while($news = fetch($result))
		{
			$i++;
			?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $news['title'];?></td>
				<td>
					<a href="<?php echo $base_url;?>modules/news/edit_news.php?id=<?php echo $news['id'];?>">Edit</a>
					<a href="<?php echo $base_url;?>modules/news/delete_news.php?id=<?php echo $news['id'];?>">Delete</a>
				</td>
			</tr>
			<?php }	?>
	</table>
	<?php }else{
	            echo "No News found";
            }?>
<?php include('../../includes/footer.php');?>