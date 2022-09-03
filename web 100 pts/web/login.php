<?php
	include_once 'header1.php';
?>

<div class="forms">
	<form action="includes/login.inc.php" method="post">
		<h2> Login </h2>
		<label>Username</label>
		<input type="text" name="uid"><br>
		<label>Password</label>
		<input type="password" name="pwd"><br><br>
		
		<button type="submit" name="submit">Sign in</button><br><br>
		<a href="signup.php">Create Account</a>

			<?php
		if(isset($_GET["error"]))
		{
			if($_GET["error"] == "emptyinput"){
				echo "<p>Fill all the Fields! </p>";
			}
			else if($_GET["error"] == "Wrong Login"){
				echo "<p>Incorrect Login!</p>";
			}

		}
		?>


	</form>
</div>



</body>
</html>

