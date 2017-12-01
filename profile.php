
<?php
include('session.php');
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
	text-align: left;
   
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
<h1> Your Profile </h1>
</br>
<div>  

<?php
 

     $varConn = Connect();
    if (!$varConn)
    {
        die('Could not connect: ' . mysql_error());
    }
     
$user_check = $_SESSION['login_user'];    
$sql = "SELECT customer.CustomerFName, customer.CustomerLName, customer.email, customer_phone.Phone
        From  customer_phone, customer
        WHERE customer_phone.email = customer.email 
              AND customer.email ='$user_check' ";  
     
    
     
$result = $varConn->query($sql);     
if ($result->num_rows > 0) {
    
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "First Name :  " . "<td>" . $row['CustomerFName'] ."</td>" . "<br>".
                    "Last Name : " . "<td>" . $row['CustomerLName'] . "</td>" . "<br>".
                    "Email : " . "<td>"  . $row['email'] . "</td>" . "<br>".
                    
                    "Phone : " . "<td>"  . $row['Phone'] .  "</td>" . "<br>";
                echo "</tr>";
        }


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

