<?php
	session_start();
	require_once "./functions/admin.php";
	$title = "List book";
	require_once "./template/header.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();
	$result = getAll($conn);
?>
	<p class="lead"><a style="color: skyblue" href="admin_add.php">Add new book</a></p>
	<a href="admin_signout.php" class="btn btn-primary">Sign out!</a>
	<table class="table" style="margin-top: 20px">
		<tr>
			<th>ISBN</th>
			<th>Title</th>
			<th>Author</th>
			<th>Image</th>
			<th>Description</th>
			<th>Price</th>
			<th>Publisher</th>
			<th>Action</th>
		</tr>
		<?php while($row = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo $row['book_isbn']; ?></td>
			<td><?php echo $row['book_title']; ?></td>
			<td><?php echo $row['book_author']; ?></td>
			<td><?php echo "<img src='upload_image/$row[book_image]' width='50'/>" ?></td>
			<td><?php echo $row['book_descr']; ?></td>
			<td><?php echo $row['book_price']; ?></td>
			<td><?php echo $row['book_publisher']; ?></td>
			
			<td><a style="color: red" href="admin_delete.php?bookisbn=<?php echo $row['book_isbn']; ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>

<?php
	if(isset($conn)) {mysqli_close($conn);}
?>