<?php
 
require 'connect.php';
session_start(); 
$varConn    = Connect();

    $managerID =1;

    $varQuery   = "INSERT into  planner (PlannerID,PlannerFName,PlannerLName,PlannerPhone,PlannerEmail,managerID) VALUES ('" . $_POST['ID'] . "','" . $_POST['Fname'] . "','" . $_POST['Lname'] ."','" . $_POST['phone'] . "','" . $_POST['email'] . "','$managerID')";

    
    $result = $varConn->query($varQuery);
    if (!$result) //if not success
    {
        header('Refresh: 5;url=managerView.php');
        die("Something went wrong ".$varConn->error);
    }
    else  //if success
    {
    header('Refresh: 3;url=managerView.php');
    print("The planner was added successfully ");
    }


$varConn->close();

?>
