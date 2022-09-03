<?php
   
	include_once 'header2.php';
    $sql = "SELECT * FROM inventory";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

?>

<html>
    <head>
    </head>
    <body>

    <table class='table table-striped'><center>
            <thead>

                <tr>
                
                    <th>Product_ID</th>
                    <th>Product_Code</th>
                    <th>Product_Name</th>
                    <th>Number of Stocks</th>
                    <th id='th' colspan='2'>Action</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td><p>".$row['prod_id']."</p></td>";
                        echo "<td><p>".$row['prod_code']."</p></td>";
                        echo "<td><p>".$row['prod_name']."</p></td>";
                        echo "<td><p>".$row['num_of_stocks']."</p></td>";
                        echo"<td><center><a href='edit.php?id=".$row['prod_id']."'<input id='e' class='btn btn-warning'>Edit</a></center></td>";
                        echo"<td><center><a href='delete.php?id=".$row['prod_id']."'<input id='e' class='btn btn-danger'>Delete</a></center></td></tr>";
                     
                        
                    }	
                ?>
            </tbody>
            </center></table>   
            <center><a href='add.php'><input id='e' class='btn btn-warning' placeholder='Add Product'></a></center><br><br>
    </body>

</html>