<?php

include 'includes/dbh.inc.php';
include_once 'header2.php';
$id = $_GET['id'];
if(isset($_POST['update'])) {
	$pc = $_POST['pc'];
    $pn = $_POST['pn'];
	$s = $_POST['s'];

	$sql = "UPDATE `inventory` SET  `prod_code`='$pc',`prod_name`='$pn',`num_of_stocks`='$s' WHERE `prod_id` = '$id'";

	$result = $conn->query($sql);

	if($result == TRUE){
		echo "record updated sakses";
        header('location:inventory.php');
	} else{
		echo "error: " . $sql . "<br>" . $conn->error;
	}
}

	

	$sql = "SELECT * FROM `inventory` WHERE `prod_id` = '$id'";

	$result = $conn->query($sql);

	if($result->num_rows > 0){

			while($row = $result->fetch_assoc()){
				$prod_code = $row['prod_code'];
                $prod_name = $row['prod_name'];
				$stocks = $row['num_of_stocks'];
			}

			?>



            
			<center>
			<form action="" method="POST">
			  <fieldset>
			    <legend>Product Information:</legend>
			    Product Code:<br>
			    <input type="text" name="pc" value="<?php echo $prod_code; ?>" >
			    <br>
                Product Name:<br>
			    <input type="text" name="pn" value="<?php echo $prod_name; ?>" >
			    <br>
			    Stocks:<br>
			    <input type="number" name="s" value="<?php echo $stocks; ?>" >
			    <br>
			    <input type="submit" class="btn btn-warning" name="update" value="submit"><br>
			  </fieldset>
			</form>
            </center>
			</body>
			</html>


			<?php

	
}

?>