 <?php
 
 
function Connect()
{
 $dbhost = "127.0.0.1";
 $dbuser = "root";
 $dbpass = ".....";   //please, change this to your password
 $dbname = "myparty";

 
 // Create connection
 $varConn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($varConn->connect_error);
 
 return $varConn;
}
 
?>