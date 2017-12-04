<?php
 include('session.php');

$themeVal = $_GET['theme'];
$placeVal = $_GET['place'];
$guestVal = $_GET['guest'];

// echo "test -->";
// echo $themeVal;
// echo $placeVal;
// echo $guestVal;

            $varConn = Connect();
    		if (!$varConn)
    		{
    		    die('Could not connect: ' . mysql_error());
    		}

            $sql="Select * From Place Where PlaceName = '".$placeVal."'";
            $result = $varConn->query($sql); 

            $q="Select * From Theme Where ThemeName = '".$themeVal."'";
            $r = $varConn->query($q); 
            $cp = "";
            while($row = $r->fetch_assoc()){
              $cp =  $row['ThemeCost'] * $guestVal;
            }

if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {        
                 echo "Estimated cost : $" ;
                 echo $row['costByPerson'] +  $cp  ; 
                }

}else{
	print("Can not calculate at this time. Please try again later.");
}


$varConn->close();
?>