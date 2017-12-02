<!DOCTYPE html>
<html>
<head>
<title> Picking Location </title>
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

<form action= "confirmationPage.php" method="post">

        Select Location: <select name="place">
            <?
            $sql="Select p.PlaceName 
                    from Place p, party a
                    Where p.placeID=a.placeID AND 
                    a.date =! '$_POST["Date"]' AND
                    a.time =! '$_POST["Time"]' AND
                    p.max_capacity >= '$_POST[NoOfGuests]' AND
                    p.min_capacity <= '$_POST[NoOfGuests]'
                    "
            $q=mysql_query($sql)
            echo "<select name= 'place' >"; 
                while($row = mysql_fetch_array($q)) {        
                echo "<option value='".$row['PlaceName']."'>".$row['PlaceName']."</option>"; 
                }
            echo "</select>";
            ?>

        <div >
		 <input class="button" type="submit" name="submit" value="Sumbit">
		 </div>
        <div >
		 <input class="button" type="reset" name="reset" value="Reset">
		 </div>
        </form>
</body>
</html>