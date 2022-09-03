<?php

include 'includes/dbh.inc.php';
include_once 'header2.php';

if(isset($_POST['add'])) {
	$pc = $_POST['pc'];
    $pn = $_POST['pn'];
	$s = $_POST['s'];

	$sql = "INSERT INTO inventory (prod_code,prod_name,num_of_stocks) VALUES ('$pc','$pn','$s')";

	$result = $conn->query($sql);

	if($result == TRUE){
		echo "record updated sakses";
        header('location:inventory.php');
	} else{
		echo "error: " . $sql . "<br>" . $conn->error;
	}
}
?>



            
			<center>
			<form action="" method="POST">
			  <fieldset>
			    <legend>Product Information:</legend>
			    Product Code:<br>
			    <input type="text" name="pc"  >
			    <br>
                Product Name:<br>
			    <input type="text" name="pn"  >
			    <br>
			    Stocks:<br>
			    <input type="number" name="s"  >
			    <br>
			    <input type="submit" class="btn btn-warning" name="add" value="submit"><br>
			  </fieldset>
			</form>
            </center>
			</body>
			</html>
