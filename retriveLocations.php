<?php
 include('session.php');


$guestVal = $_GET['guest'];

     $varConn = Connect();
    if (!$varConn)
    {
        die('Could not connect: ' . mysql_error());
    }
     
$user_check = $_SESSION['login_user'];    
$sql = 'SELECT *
        From  Place
        WHERE min_capacity<="'.$guestVal.'" 
        AND  max_capacity >= "'.$guestVal.'"';
     
$result = $varConn->query($sql);  
echo "List of suggesions :";   
if ($result->num_rows > 0) {
    echo "<table border='1' >";
            echo "<tr>";
                echo "<th>Place</th>";
                echo "<th>Minimum Capacity</th>";
                echo "<th>Maximum Capacity</th>";             
            echo "</tr>";

 while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
                echo "<td>" . $row['PlaceName'] . "</td>"; 
                echo "<td>" . $row['min_capacity'] . "</td>";
                echo "<td>" . $row['max_capacity'] . "</td>";         
            echo "</tr>";
        }
     echo "</table>";
    }
 else{
    //header('Refresh: 5;url=Home.html');
    echo "No suggesions found.";
}

$varConn->close();

?> 