
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
	background: url(p.jpg);

    
}
    footer {
    padding: 1em;
    border-color: antiquewhite;
    color: black
    background-color: pink;
    clear: left;
    text-align:center;
    text-decoration-color:black;
	background: url(p.jpg);

    
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
    <li><a href="logout.php">Log Out</a></li>

  </ul>
</nav>

<article>
  <div> <p>welcome to the planner view</p></div> 
 <div>  
<?php
  require 'connect.php';

     $varConn = Connect();
    if (!$varConn)
    {
        die('Could not connect: ' . mysql_error());
    }
     
     
$sql = 'SELECT party.PartyID, party.NoOfGuests, party.DateTime, customer.CustomerFName, customer.CustomerLName, place.PlaceName, type.TypeName, theme.ThemeName 
        From  party, customer, place, theme, type
        WHERE party.CustomerID=customer.CustomerId AND party.PlaceID=place.PlaceID AND party.ThemeID=theme.ThemeID 
               AND party.TypeID=type.TypeID';    
$result = $varConn->query($sql);     
if ($result->num_rows > 0) {
    echo "<table border='1' >";
            echo "<tr>";
                echo "<th>party ID</th>";
                echo "<th>Number of guests</th>";
                echo "<th>date and Time</th>";
                echo "<th>customer First Name</th>";
                echo "<th>customer Last Name</th>";
                echo "<th>place </th>";
                echo "<th>party Type </th>";
                echo "<th>Theme </th>";
    
            echo "</tr>";
 while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
                echo "<td>" . $row['PartyID'] . "</td>";
                echo "<td>" . $row['NoOfGuests'] . "</td>";
                echo "<td>" . $row['DateTime'] . "</td>";
                echo "<td>" . $row['CustomerFName'] . "</td>";
                echo "<td>" . $row['CustomerLName'] . "</td>";
                echo "<td>" . $row['PlaceName'] . "</td>";
                echo "<td>" . $row['TypeName'] . "</td>";
                echo "<td>" . $row['ThemeName'] . "</td>";
            echo "</tr>";
        }
     echo "</table>";
    }
 else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($varConn);
}

$varConn->close();

?> 
 </div>  
</article>

<footer>Copyright &copy; MyParty.com </footer>

</div>

</body>
</html>

