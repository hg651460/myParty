<?php


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
    color:gray;
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
    width: 140px;
    height: 500px;
    margin: 0;
    padding: 1em;
    background-color:darkkhaki;
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
    font-size: 150%;
    height: 400px;
    background-color: antiquewhite;
  
  
    
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
    <li><a href="Signup.php">Sign Up</a></li>
    <li><a href="logIn.html">Log In</a></li>
    <li><a href="partyblogs.htm">Gallery</a></li>
    <li><a href="contact.html">Contact</a></li>
  </ul>
</nav>

<article>
    <p><h2>EVERY PARTY  </h2></p>
    <p><h2>MUST BE</h2></p>
    <p> <h1>PERFECT</h1> </p>
    <img src="beautiful.jpg" alt="You deserve the Best party ever" width="500" height="200" align="bottom">
 
  
</article>

<footer><script type="text/javascript">
        
        var today = new Date();
        document.writeln( today.getFullYear() );
    
      </script>Copyright &copy; MyParty.com </footer>

</div>

</body>
</html>

