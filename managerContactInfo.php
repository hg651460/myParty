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
    color:black;
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
    <li><a href="customerView.php">Back</a></li>
    <li><a href="#">Print</a></li>
  

  </ul>
</nav>
    <h1 ><b> <center> <font color="#b1871b "> Customer View </font></center></b></h1>
<article>

<p> This is the Manager's contact information: </p>
 <div> 

<?php

     $varConn = Connect();
    if (!$varConn)
    {
        die('Could not connect: ' . mysql_error());
    }
     
$user_check = $_SESSION['login_user'];    
$sql = 'SELECT ManagerFName, ManagerLName, ManagerPhone, email
        From  manager; ';
     
$result = $varConn->query($sql);     
if ($result->num_rows > 0) {
    echo "<table border='1' >";
            echo "<tr>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Phone Number</th>";
                echo "<th>email</th>";
              
             
    
            echo "</tr>";
 while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
                echo "<td>" . $row['ManagerFName'] . "</td>";
                echo "<td>" . $row['ManagerLName'] . "</td>";
                echo "<td>" . $row['ManagerPhone'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
            
            
            echo "</tr>";
        }
     echo "</table>";
    }
 else{
    //header('Refresh: 5;url=Home.html');
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($varConn);
}

$varConn->close();

?> 
 
 </div>  
</article>

<footer><script type="text/javascript">
        
        var today = new Date();
        document.writeln( today.getFullYear() );
    
      </script>Copyright &copy; MyParty.com </footer>

</div>

</body>
</html>
