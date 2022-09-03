<?php
	include_once 'header1.php';
?>


<div class="formss">
	<form action="includes/signup.inc.php" method="post"><br>
		<br><br><br><h2> Create Account </h2>
		<label>Full Name:</label>
		<input type="text" name="name" id="name"><br>

		<label>Username:</label>
		<input type="text" name="uid" id="uid"><br>

		<label>Email:</label>
		<input type="email" name="email" id="email"><br>

		<label>Password:</label>
		<input type="password" name="pwd" id="pwd"><br>

		<label>Confirm Password:</label>
		<input type="password" name="pwdrepeat" id="pwdrepeat"><br>


		<button type="submit" name="submit" onclick="return validation();">Sign up</button><br>

			<?php
		if(isset($_GET["error"])){
			if($_GET["error"] == "emptyinput"){
				
			}
			else if($_GET["error"] == "invaliduid"){
				echo "<p>Choose a proper username!</p>";
			}

				else if($_GET["error"] == "invalidemail"){
				echo "<p>Choose a proper email!</p>";
			}

				else if($_GET["error"] == "passwordsdontmatch"){
				echo "<p>Password doesn't match!</p>";
			}
				else if($_GET["error"] == "stmtfailed"){
				echo "<p>Something went wrong. Please try again!</p>";
			}

				else if($_GET["error"] == "usernametaken"){
				echo "<p>Username is already taken!</p>";
			}
		}
			?>
			
	</form>
</div>
<div id="eresult"></div>
<script type = "text/javascript">
function validation(){
var name = document.getElementById('name').value;
var uid = document.getElementById('uid').value;
var email = document.getElementById('email').value;
var pwd = document.getElementById('pwd').value;
var  pwdrepeat = document.getElementById('pwdrepeat').value;


if(name=='' || uid=='' || email =='' || pwd =='' || pwdrepeat =='')
{
	alert("Fill up all the blanks")
	return false;
}

else if(uid.length<4)
{
alert("Username Must be Atleast 4 characters!")
	return false;
}

else{
		
	return true;
}
}

		
	
</script>

</body>
</html>