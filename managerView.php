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
    
    /* Set a style for all buttons */
.button {
    background-image: #ffffff;
    color: #C71585;
    padding: 14px 20px;
    margin: 8px 0;
    border: #C71585;
    cursor: pointer;
    width: 40%;
    text-align:center;
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
    <h1 ><b> <center> <font color="#b1871b "> Manager View </font></center></b></h1>
<article>
<h1>Welcome    Manager "  <?php echo $_SESSION ['login_user'];  ?> "    to your view</h1>
<p> Your List of all planners , customers and their party orders : </p>
 <div> 

<?php

     $varConn = Connect();
    if (!$varConn)
    {
        die('Could not connect: ' . mysql_error());
    }
     
$user_check = $_SESSION['login_user'];    
$sql = 'SELECT planner.PlannerID, planner.PlannerFName, planner.PlannerLName, party.PartyID, party.NoOfGuests, party.DateTime, customer.CustomerFName,    customer.CustomerLName, place.PlaceName, type.TypeName, theme.ThemeName 
        From  party, customer, place, theme, type, planner
        WHERE party.CustomerID=customer.CustomerId AND party.PlaceID=place.PlaceID AND party.ThemeID=theme.ThemeID 
               AND party.TypeID=type.TypeID AND party.PlannerID=planner.PlannerID';
     
$result = $varConn->query($sql);     
if ($result->num_rows > 0) {
    echo "<table border='1' >";
            echo "<tr>";
                echo "<th>planner ID</th>";
                echo "<th>planner First Name</th>";
                echo "<th>planner Last Name</th>";
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
                echo "<td>" . $row['PlannerID'] . "</td>";
                echo "<td>" . $row['PlannerFName'] . "</td>";
                echo "<td>" . $row['PlannerLName'] . "</td>";
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
    header('Refresh: 5;url=Home.html');
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($varConn);
}

$varConn->close();

?> 
      <br/><br/><br/>
     <h2>**** Manage your planners , parties , and custoers ****</h2>  
     <br/><br/><br/>
     
     <h3> Add New Planner  </h3>
<form action="addPlanner.php" method="post">
    Planner ID: <input type="number" id="ID" name="ID" required/><br/><br/>
    Planner First Name: <input type="text" id="Fname" name="Fname" required/><br/><br/>
    Planner Last Name: <input type="text" id="Lname" name="Lname" required/><br/><br/>
    Planner Phone: <input type="text" id="phone" name="phone" required/><br/><br/>
    Planner Email:  <input type="text" id="email" name="email" required/><br/><br/>
    <input  class="button" type="submit" id="submit" value="Add new Planner"/>
</form>


<br/><br/><br/>
<h3> Delete Planner  </h3>
<form action="deletePlanner.php" method="post">
    Planner ID: <input type="number" id="ID" name="ID" required/><br/><br/>
    <input class="button" type="submit" id="submit" value="Delete Planner"/>
</form>


<br/><br/><br/>
<h3> Reassign a Party to Nnother Planner  </h3>
<form action="reassignParty.php" method="post">
    Party ID: <input type="number" id="ID" name="ID" required/><br/><br/>
    <!--Previouse Planner's ID: <input type="oldID" id="ID" name="oldID"/><br/><br/> -->
    New Planner's ID: <input type="number" id="newID" name="newID" required/><br/><br/>
   
   
    <input class="button" type="submit" id="submit" value="Reassign  Party"/> 
</form> 
 </div>  
</article>

<footer><script type="text/javascript">
        
        var today = new Date();
        document.writeln( today.getFullYear() );
    
      </script>Copyright &copy; MyParty.com </footer>

</div>

</body>
</html>
