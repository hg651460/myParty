<?php
 
    require 'connect.php';

    $varConn = Connect();
    if (!$varConn)
    {
        die('Could not connect: ' . mysql_error());
    }
    $varUser = $_GET['email'];
    $varPass = $_GET['pass'];

    $sql   = "SELECT * FROM logininfo where email='$varUser' and password='$varPass'";
   $result = $varConn->query($sql);     
if ($result->num_rows > 0) {
        print ("<table border =1 ><th>UserName:</th> <th>PassWord</th>");
        while($row = $result->fetch_assoc()) {
            print_r("<tr><td>" . $row['email']. "</td><td> ". $row['password']. " ". "</td></tr>"); // userName & PassWord are a column in my testtable.
            if($row['PlannerID'])
                header('Refresh: 2;url=plannerView.php');// Redirect to Show.php after 3 Sec
            else if($row['managerID'])
                header('Refresh: 2;url=managerView.php');// Redirect to Show.php after 3 Sec
            /* else if($row['CustomerID'])
                header('Refresh: 2;url=customerView.php');// Redirect to Show.php after 3 Sec */
            else 
                header('Refresh: 2;url=Home.php');// Redirect to Show.php after 3 Sec
        }
        
        print ("</table>");
    }
    else{
        print("Wrong Password or username");
    }
    
    $varConn->close();
?>