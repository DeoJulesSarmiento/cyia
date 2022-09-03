<?php
	include_once 'header2.php';
    $sql = "SELECT * FROM users";
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
                    <th>Username</th>
                    <th>Email</th>
                    <th>Type</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td><p>".$row['usersName']."</p></td>";
                        echo "<td><p>".$row['usersEmail']."</p></td>";
                        echo "<td><p>".$row['type']."</p></td>";
                        
                    }	
                ?>
            </tbody>
            </center></table>   

            <center><a href='add1.php'><input id='e' class='btn btn-warning' placeholder='Add Admin/Supervisor'></a></center><br><br>
    </body>

</html>