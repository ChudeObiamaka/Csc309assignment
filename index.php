
<!DOCTYPE html>
<html>
<head>
    <title>CSC 309 DB Class</title>
</head>
<body>
    <h2>Registration Form</h2>

    <!-- Select all users and display in a Table -->
    <table border="1">
        <thead>
            <!-- Complete the table header row -->
            <tr>
                <td>id</td>
                <td>Firstname</td>
                <td>Lastname</td>
                <td>Gender</td>
                <td>Date of Birth</td>
                <td>Email</td>
            </tr>
        </thead>

        <tbody>
            <?php 
             $server = 'localhost'; // 127.0.0.1
             $username = 'root';
             $password = '';
             $db = 'csc309';
         
             // Open a new connection
             $con = new mysqli($server, $username, $password, $db);
         
             // Check connection
             if ($con->connect_error){
                 die("Connection failed: " . $con->connect_error);
             }

             
             //Create a Table
             $sql = "SELECT * FROM users";
             $result= $con->query($sql);
             if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['firstname']."</td>";
                    echo "<td>".$row['lastname']."</td>";
                    echo "<td>".$row['gender']."</td>";
                    echo "<td>".$row['date_birth']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "</tr>";
                }
             }

             //Close connection
             $con->close();
            ?>
        
        </tbody>
    </table>
</body>
</html>