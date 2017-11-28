<!DOCTYPE html>
<html>
<head>

<title>Confirmation Page </title>

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
    <li><a href="profile.php">Profile</a></li>

  </ul>
</nav>


<h2> Order Confirmed </h2>

<p>Thank you for the order.  </p>

<p>We have successfully received your order. </p>

<p>Below is a summary of your order.</p> <br><br>  

<?php
echo 'First Name: ' . $_POST ["FirstName"] . '<br>';
echo 'Last Name: ' . $_POST ["LastName"] . '<br>';
echo 'Party type: '. $_POST ["TypeName"] . '<br>';
echo 'Party theme: ' . $_POST ["ThemeName"] . '<br>';
echo 'Number of Guests: '. $_POST ["NoOfGuests"] . '<br>';
echo 'Email Address: ' . $_POST ["EmailAddress"] . '<br>';
echo 'Telephone Number: ' . $_POST ["TelephoneNumber"];
?>

<footer>Copyright &copy; MyParty.com </footer>
</div>
</body>
</html>
