<?php

include 'includes/dbh.inc.php';
include_once 'header2.php';

if(isset($_POST['add'])) {
	$uname = $_POST['uname'];
    $email = $_POST['email'];
	$uid = $_POST['uid'];
	$pass = $_POST['pass'];
	$ty = $_POST['ty'];

	$hashedPwd = password_hash($pass, PASSWORD_DEFAULT);

	$sql = "INSERT INTO users(usersName,usersEmail,usersUid,usersPwd,type) VALUES ('$uname','$email','$uid','$hashedPwd','$ty')";

	$result = $conn->query($sql);

	if($result == TRUE){
		echo "record updated sakses";
        header('location:accounts.php');
	} else{
		echo "error: " . $sql . "<br>" . $conn->error;
	} 
}
?>

<style>

.select{
	display: block;
	border:1px solid #ccb88c;
	width:95%;
	padding:10px;
	margin:10px auto;
	border-radius:5px;
}


</style>


            
			<center>
			<form action="" method="POST">
			  <fieldset>
			    <legend>Add Admin or Supervisor:</legend>
			    Full Name:<br>
			    <input type="text" name="uname"  >
			    <br>
			     Email:<br>
			    <input type="text" name="email"  >
			    <br>
                Username:<br>
			    <input type="text" name="uid"  >
			    <br>
			    Password:<br>
			    <input type="password" name="pass"  >
			    <br>
			    <select class ="select" name="ty" id="ty">
			    	<option value = "admin">Admin</option>
			    	<option value = "supervisor">Supervisor</option>
			    </select>
			    <br>
			    <input type="submit" class="btn btn-warning" name="add" value="submit"><br>
			  </fieldset>
			</form>
            </center>
			</body>
			</html>