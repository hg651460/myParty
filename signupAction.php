<?php

require 'connect.php';
    session_start(); //start a session

    $varConn = Connect();
    if (!$varConn)
    {
        die('Could not connect: ' . mysql_error());
    }
 $Firstname = $_POST['Fname'];
    //echo $Firstname;
 $Lastname = $_POST['Lname'];
    //echo $Lastname;
 $email = $_POST['email'];
    //echo $email;
 $password = $_POST['psw'];
   // echo $password;
 $phone = $_POST['phone'];
    //echo $phone;

$varQuery   = "INSERT into customer (CustomerId,email,CustomerFname,CustomerLname) VALUES(NULL,'$email','$Firstname','$Lastname')";

    $varSuccess = $varConn->query($varQuery);
    if (!$varSuccess) {
         header('Refresh: 7;url=Signup.php'); 
        die("Couldn't insert customer data , User email already exixt !!  ".$varConn->error);
       
    }

sleep(1);
$varSelectCust   = "SELECT CustomerId FROM customer ORDER BY CustomerId  DESC  LIMIT 1";


    $varQ = $varConn->query($varSelectCust);
if($varQ->num_rows > 0){
            while($row = $varQ->fetch_assoc()){
                $varCust=$row['CustomerId'];}
}
    if (!$varQ) {
        die("Couldn't SELECT: ".$varConn->error);
    }
echo "<br><br>";

sleep(1);

$query3="INSERT INTO customer_phone (Phone,email) VALUES ('$phone','$email')";
    $result3 = $varConn->query($query3);
if (!$result3) {
        die("Couldn't insert Phone: ".$varConn->error);
    }



$varQuery2   = "INSERT into logininfo (password,email,CustomerId,managerID,PlannerID) VALUES('$password ','$email','$varCust',NULL,NULL)";

    $varSuccess2 = $varConn->query($varQuery2);
    if (!$varSuccess2) {
        die("Couldn't insert customer data: ".$varConn->error);
    }
    
header('Refresh: 5;url=Home.php'); 
echo "************************************";
echo "<br><br>";
echo "Welcome .. ".$Firstname;
echo "<br><br>";
echo "YOUR REGISTRATION IS COMPLETED... You will be directed to Home page \r\n";
echo "<br><br>";
echo "**************************************"; 



?>
