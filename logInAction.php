<?php
 
    require 'connect.php';
    session_start(); //start a session

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
       print ("Log In is succsessful");
        while($row = $result->fetch_assoc()) {
        
            
            if($row['PlannerID'])
            {
                  
                 $_SESSION['login_user'] = $varUser;
                  header('Refresh: 1;url=plannerView.php');// Redirect to plannerView.php after 1 Sec
            }
            else if($row['managerID'])
            {
                $_SESSION['login_user'] = $varUser;
                header('Refresh: 1;url=managerView.php');// Redirect to managerView.php after 1 Sec
            }
             else if($row['CustomerId']){
                $_SESSION['login_user'] = $varUser;
                header('Refresh: 2;url=customerView.php');// Redirect to customerView.php after 1 Sec 
            }
            else 
                header('Refresh: 2;url=Home.php');// Redirect to Show.php after 3 Sec
        }
        
        print ("</table>");
    }
     else{
        header('Refresh: 2;url=logIn.html');
        print("Wrong Password or username..PLEASE  Log In Again ");
    }
    
    $varConn->close();
?>
