<?php
include('includes/dbh.inc.php');
$id = $_GET['id'];
$table = 'inventory';
$query = "DELETE FROM $table WHERE prod_id=$id";
mysqli_query($conn, $query) or die(mysqli_error($conn));
header('location:inventory.php');
?>