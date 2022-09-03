<?php

include 'dbh.inc.php';

if(isset($_POST['update'])) {
	$prod_code = $_POST['prod_code'];
	$prod_id = $_POST['prod_id'];
	$prod_name = $_POST['prod_name'];
	$num_of_stocks = $_POST['num_of_stocks'];


	$sql = "UPDATE `inventory` SET  `prod_code`='$prod_code',`prod_name`='$prod_name',`prod_id`='$prod_name',`num_of_stocks`='$num_of_stocks' WHERE `prod_id` = '$prod_id'";

	$result = $conn->query($sql);

	if($result == TRUE){
		echo "record updated sakses";
	} else{
		echo "error: " . $sql . "<br>" . $conn->error;
	}
}

if(isset($_GET['prod_id'])){
	$usersId = $_GET['prod_id'];

	$sql = "SELECT * FROM `inventory` WHERE `prod_id` = '$prod_id'";

	$result = $conn->query($sql);

	if($result->num_rows > 0){

			while($row = $result->fetch_assoc()){

				$prod_code = $row['prod_code'];
				$prod_name = $row['prod_name'];
				$num_of_stocks = $row['num_of_stocks'];
				$prod_id = $row['prod_id'];
			}

			?>



			<h2>Update Form</h2>

			<form action="" method="POST">
			  <fieldset>
			    <legend>Inventory</legend>
			    prod_code<br>
			    <input type="text" name="prod_code" value="<?php echo $prod_code; ?>" >
			    <input type="text" name="prod_id" value="<?php echo $prod_id; ?>" >
			    <br>
			    prod_name<br>
			    <input type="text" name="prod_name" value="<?php echo $prod_id; ?>" >
			    <br>
			    num_of_stocks<br>
			    <input type="email" name="num_of_stocks" value="<?php echo $num_of_stocks; ?>">
			<br>
			  

			    <input type="submit" name="submit" value="submit"><br>
			  </fieldset>
			</form>

			</body>
			</html>


			<?php

	} else {
		header('Location: view.php');
	}
}

?>