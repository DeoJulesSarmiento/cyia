<?php
	include_once 'header2.php';
    $sql = "SELECT * FROM sales";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
?>

<style>

.right{
    float:right;
    margin-right: 25px;
}

.rights{
    float:right;
    margin-right:40px;
}




</style>


<html>
    <head>
    </head>
    <body>

    <table class='table table-striped'><center>
            <thead>

                <tr>
                    <th>Sale_ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>E-mail</th>
                    <th>Product Code</th>
                    <th>Mode of Payment</th>
                    <th>Price</th>
                    <th>Product Style</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td><p>".$row['sale_id']."</p></td>";
                        echo "<td><p>".$row['fname']."</p></td>";
                        echo "<td><p>".$row['lname']."</p></td>";
                        echo "<td><p>".$row['address']."</p></td>";
                        echo "<td><p>".$row['email']."</p></td>";
                        echo "<td><p>".$row['code']."</p></td>";
                        echo "<td><p>".$row['pay_method']."</p></td>";
                        echo "<td><p>".$row['price']."</p></td>";
                        echo "<td><p>".$row['product_specs']."</p></td>";
                        echo "<td><p>".$row['qty']."</p></td>";
                        echo "<td><p>".$row['total']."</p></td>";
                        echo "</tr>";
                    }	
                ?>
            </tbody>
            </center></table>   


            <table class='table table-striped'><center>
            <thead>

                <tr>
                    
                    <th class="right">Total Sales</th>
                    
                </tr>

            </thead>

            <tbody>

                <?php

                foreach($conn->query('SELECT SUM(total) FROM sales') as $row)


                    
                    echo " <td class='rights'><p>" . $row['SUM(total)'] . "</p></td>";
                    
                   ?>
              
               
            </tbody>
            </center></table>

            
    </body>

</html>
