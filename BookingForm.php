
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
    /* Set a style for all buttons */
    .button {
        background-image: #ffffff;
        color: #C71585;
        padding: 14px 20px;
        margin: 8px 0;
        border: #C71585;
        cursor: pointer;
        width: 40%;
        font-size: medium;
    text-align:center;
    }


    article {
        margin-left: 170px;
        border-left: 1px solid gray;
        padding: 2em;
        overflow: hidden;
        color:PaleVioletRed;
        font-size: x-large;
        text-align: center;
       
    }
    </style>


    </head>
    <body>

    <div class="container">

    <header>
       <h1>MyParty</h1>
    </header>
      
<article>

        <form action= >
       <table border="0">
       <tr><td> Party type: </td><td><input type= "text" name="Type"></td></tr>
          
       <tr><td> Party theme: </td><td> <input type= "text" name="Theme"></td></tr>

       <tr><td> Number of Guest: </td><td> <input type= "text" name="NoOfGuests"></td></tr>
        
       <tr><td> Select a Date: </td><td> <input type="date" name="Date" ></td></tr>
        
       <tr><td> Select a Time: </td><td> <input type="time" name="Time"></td></tr>
        
       <tr><td> Location: </td><td> <select name="place">
            <?
            $sql="Select p.PlaceName 
                    from Place p, party a
                    Where p.placeID=a.placeID AND 
                    a.date =! '' AND
                    a.time =! ''
                    "
            $q=mysql_query($sql)
            echo "<select name= 'type' >"; 
                while($row = mysql_fetch_array($q)) {        
                echo "<option value='".$row['TypeName']."'>".$row['TypeName']."</option>"; 
                }
            echo "</select>";
            ?>
<!--          cross with time, date, place, and number of guest, so that it is availble
            use party table -->
       </td></tr></br>
           </table>
        
        <div >
		 <input class="button" type="submit" name="submit" value="Sumbit">
		
		 <input class="button" type="reset" name="reset" value="Reset">
		 </div>
        </form>

</article>

<footer>Copyright &copy; MyParty.com </footer>

</div>

</body>

</html>