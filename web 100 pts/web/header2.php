<?php
include("includes/dbh.inc.php"); 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Online Store </title>
</head>
<link rel="stylesheet" href="styles2.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
 integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<body>

<nav1>
	
	<div class="announcement">
		<p>Select ‘Pick Up’ delivery option for grab, lalamove or your preferred courier available from 9am to 6pm</p>
	</div>		
</nav1> 

<nav>
		<div class="logo">
			<h4>Cyia & Mba</h4>
		</div>
	<ul class="nav-links">

		<li><a href="admin.php">Sales</a></li>
        <li><a href="inventory.php">Inventory</a></li>
        <li><a href="accounts.php">Accounts</a></li>
    
			<?php
		if (isset($_SESSION["useruid"])){
			/*echo "<li><a href='ppage.php'>Admin Page</a></li>"; */
			echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
		} else {
		echo "<li><a href='login.php'>Login</a></li>";
		echo "<li><a href='signup.php'>Sign Up</a></li>";
		}
		?>

		

	</ul>

		<div class="option">
		<div class="line1"> </div>
		<div class="line2"> </div>
		<div class="line3"> </div>
	</div>

	</nav>

	<script src="app.js"></script>
</nav>



	