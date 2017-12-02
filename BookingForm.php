<html>
	<head>
<style>
div.container {
    width: 100%;
  
}
header, footer {
    padding: 1em;
    color: LightCoral;
    background-color: pink;
    clear: left;
    text-align: center;
	background: url(header.jpg);
	background-position: 100% 100%;
    
}
article {
   
    padding: 1em;
    overflow: hidden;
    color:PaleVioletRed;
	text-align: left;
    
}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
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
/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}
/* Add padding to container elements */
.container {
    padding: 16px;
}
/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
</style>
    </head>
    <body>

<div class="container">
<header>
   <h1>Plan Your Party</h1>
</header>

<article>

        <form action= "bookthis.php" method="post">
       
        Number of Guest: <input type= "text" name="NoOfGuests"><br>
        
        Select a Date: <input type="date" name="Date" ><br><br>
        
        Select a Time: <input type="time" name="Time">

        Type: <select name="type">
            <?
            $sql="Select TypeName from type"
            $q=mysql_query($sql)
            echo "<select name= 'type' >"; 
                while($row = mysql_fetch_array($q)) {        
                echo "<option value='".$row['TypeName']."'>".$row['TypeName']."</option>"; 
                }
            echo "</select>";
            ?>
        
        Theme:  <select name="theme">
            <?
            $sql="Select ThemeName from type"
            $q=mysql_query($sql)
            echo "<select name= 'theme' >"; 
                while($row = mysql_fetch_array($q)) {        
                echo "<option value='".$row['ThemeName']."'>".$row['ThemeName']."</option>"; 
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

</article>

<footer>Copyright &copy; MyParty.com </footer>

</div>

    </body>

</html>
