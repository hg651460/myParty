<?php
 
require 'connect.php';

    $conn = Connect();

    $varId   = $_POST['ID'];

    $varQuery="DELETE FROM planner WHERE PlannerID='$varId'";
    $result = $conn->query($varQuery);


    if (!$result) //if notsuccess
    {
        header('Refresh: ;url=managerView.php');
        //die("Something went wrong ".$varConn->error);
       print("ERROR, Delete this planner is not possiple, He is Assocated to a party ");
        
    }
    else //if success
    {
    header('Refresh: 3;url=managerView.php');
    print("The planner was deleted successfully ");
    }
    $conn->close();
?>
