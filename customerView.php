
<?php
  require 'connect.php';
  session_start();
?>

<!DOCTYPE html>
<html>
<head>

<style>
div.container {
    width: 100%;
  
}



header {
    padding: 1em;
    border-color: antiquewhite;
    color: black;
    background-color: pink;
    clear: left;
    font-size: 250%;
    font-style: italic;
    text-align:center;
    text-decoration-color:black;
	background: url(images/p.jpg);

    
}
    footer {
    padding: 1em;
    border-color: antiquewhite;
    color: black
    background-color: pink;
    clear: left;
    text-align:center;
    text-decoration-color:black;
	background: url(images/p.jpg);

    
}

nav {
    float: left;
    width: 120px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type:none;
    padding: 0;
}
   
nav ul a {
    text-decoration:none;
}

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 2em;
    overflow: hidden;
    color:PaleVioletRed;
	text-align: center;
   
}
</style>
</head>
<body>

<div class="container">

<header>
   <h1>MyParty</h1>
</header>
  
<nav>
  <ul>
    <li><a href="Home.php">Home</a></li>
    <li><a href="BookingForm.php">Reserve a place for party</a></li>
    <li><a href="profile.php">Profile</a></li>
    <li><a href="logout.php">Log Out</a></li>

  </ul>
</nav>

<h1 ><b> <center> <font color="#b1871b "> Customer View </font></center></b></h1>
<article>
<h1>Welcome    "  <?php echo $_SESSION ['login_user'];  ?> "   </h1>
</br>
<p> Your party orders : </p>
</br>
 <div>  
<?php
 

     $varConn = Connect();
    if (!$varConn)
    {
        die('Could not connect: ' . mysql_error());
    }
     
$user_check = $_SESSION['login_user']; 
     
$sql = "SELECT place.PlaceName, type.TypeName, theme.ThemeName, party.NoOfGuests, party.Date, party.Time, customer.email
        From  party, place, theme, type, customer
        WHERE party.CustomerID=customer.CustomerId 
                AND party.PlaceID=place.PlaceID 
                AND party.ThemeID=theme.ThemeID 
                AND party.TypeID=type.TypeID 
                AND customer.email='$user_check' ";  
     
$result = $varConn->query($sql);     
if ($result->num_rows > 0) {
    echo "<table border='1' >";
            echo "<tr>";
                echo "<th>Place </th>";
                echo "<th>Party Type </th>";
                echo "<th>Theme </th>";
                echo "<th>Number of guests</th>";
                echo "<th>Date</th>";
                echo "<th>Time</th>";

    
            echo "</tr>";
 while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
                echo "<td>" . $row['PlaceName'] . "</td>";
                echo "<td>" . $row['TypeName'] . "</td>";
                echo "<td>" . $row['ThemeName'] . "</td>";
                echo "<td>" . $row['NoOfGuests'] . "</td>";
                echo "<td>" . $row['Date'] . "</td>";
                echo "<td>" . $row['Time'] . "</td>";
            echo "</tr>";
        }
     echo "</table>";
    } else{
    print("You have Zero Orders to view ..you can place order from the reserve link ");
   // echo "ERROR: Could not able to execute $sql. " . mysqli_error($varConn);
}
     
$varConn->close();

?>  
 </div>  
</article>

<footer> <script type="text/javascript">
        
        var today = new Date();
        document.writeln( today.getFullYear() );
    
      </script>Copyright &copy; MyParty.com </footer>

</div>

</body>
</html>

