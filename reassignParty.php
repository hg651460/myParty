<?php
 
require 'connect.php';
$varConn    = Connect();

$PartyID = $_POST['ID'];
$newID = $_POST['newID'];


$varQuery   = "UPDATE party  
              SET  PlannerID = '$newID'
              WHERE PartyID = '$PartyID'";



    
    $varSuccess = $varConn->query($varQuery);
    if (!$varSuccess) //if not success
    {
        die("Something went wrong ".$varConn->error);
    }
 else  //if success
    {
    header('Refresh: 3;url=managerView.php');
    print("The party was reasaigned successfully ");
    }


$varConn->close();

?>
