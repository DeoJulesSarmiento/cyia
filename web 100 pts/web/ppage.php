

<?php
	include_once 'header1.php';
?>

<?php 
include "dbh.inc.php";

//write the query to get data from users table

$sql = "SELECT usersName, usersUid, usersPwd , usersEmail , usersId FROM users";

//execute the query

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2>users</h2>
<table class="table">
	<thead>
		<tr>
		<th>ID</th>
		<th>Fullname</th>
		<th>Email</th>
		<th>Username</th>
		<th>password</th>
		
	</tr>
	</thead>
	<tbody>
		<?php

		if($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
?>

		<tr>
			<td><?php echo $row['usersId'];?></td>
			<td><?php echo $row['usersName'];?></td>
			<td><?php echo $row['usersEmail'];?></td>
			<td><?php echo $row['usersUid'];?></td>
			<td><?php echo $row['usersPwd'];?></td>
			<td><a class="btn btn-info" href="update.php?usersId=<?php echo $row['usersId']; ?>">Edit</a></td> 
			<td><a class="btn btn-danger" href="delete.php?usersId=<?php echo $row['usersId']; ?>">Delete</a></td>
		</tr>


	<?php		}
		}

		?>
	</tbody>
</table>
	</div>

</body>
</html>