
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

		    /* Set a style for all buttons */
		    .button {
		        background-image: #ffffff;
		        color: #C71585;
		        padding: 10px 15px;
		        margin: 8px 0;
		        border: #C71585;
		        cursor: pointer;
		        width: 20%;
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

		 select {
		        width:200px;
		    }

		    </style>




		    </head>
		    <body>

		    <script type="text/javascript">
		    var tpShow=false;
		    	function showUser(){
		    		 var i = document.getElementById('theme');
		    		 var j = document.getElementById('place');
		    		 var k = document.getElementById('guest');

		    		 var themeVal = i.options[i.selectedIndex].value;
		    		 var placeVal = j.options[j.selectedIndex].value;
		    		 var guestVal = k.value;

		    		if(themeVal){
		    			if(placeVal){
			    				if(guestVal){


		 if (window.XMLHttpRequest) {
		            // code for IE7+, Firefox, Chrome, Opera, Safari
		            xmlhttp = new XMLHttpRequest();
		        } 
		        xmlhttp.onreadystatechange = function() {
		            if (this.readyState == 4 && this.status == 200) {
		                document.getElementById("txtHint").innerHTML = this.responseText;
		            }
		        };
		        xmlhttp.open("GET","estimateCost.php?place="+placeVal+"&theme="+themeVal+"&guest="+guestVal,true);
		        xmlhttp.send();

		    					console.log(i.options[i.selectedIndex].value);
		    					console.log(j.options[j.selectedIndex].value);
		    					console.log(k.value);
		    				}
		    			}
		    		}

		    	}
		    </script>	

		    <div class="container">

		    <header>
		       <h1>MyParty</h1>
		    </header>  

	<nav>
	  <ul>
	    <li><a href="Home.php">Home</a></li>
	    <li><a href="customerView.php">Account</a></li>
	    <li><a href="profile.php">Profile</a></li>
		    <li><a href="logout.php">Log Out</a></li>

	  </ul>
	</nav>

		<article>

		        <form action= "confirmationPage.php" method="get" >
		       <table border="0">
		       <tr><td> Party type: </td><td><select name="Type" >
		       <option value="">Select one:</option>
		          <?php 
		            $varConn = Connect();
		    		if (!$varConn)
		    		{
		    		    die('Could not connect: ' . mysql_error());
		    		}

		            $sql="Select * From Type ";

		            $result = $varConn->query($sql); 

		            
		                while($row = $result->fetch_assoc()) {        
		                 echo '<option value="' . $row['TypeName'] .'" > ' . $row['TypeName'] . ' </option>'; 
		                }
		            " </select>"

					
		            ?>
		            </td></tr>

		       <tr><td> Party theme: </td><td> <select name="Theme" id="theme" onchange="javascript:showUser()">
		              <option value="">Select one:</option>
		          <?php 

		            $sql="Select * From Theme ";

		            $result = $varConn->query($sql); 

		                while($row = $result->fetch_assoc()) {        
		                 echo '<option value="' . $row['ThemeName'] .'" > ' . $row['ThemeName'] . ' </option>'; 
		                }
		            " </select>"
					
		            ?></td></tr>

		       <tr><td> Number of Guest: </td><td> <input type= "text" id = "guest" size = "25" name="NoOfGuests"></td></tr>
		        
		       <tr><td> Select a Date: </td><td> <input type="date" name="Date" ></td></tr>
		        
		       <tr><td> Select a Time: </td><td> <input type="time" name="Time"></td></tr>
		        
		       <tr><td> Planner: </td><td> <select name="Planner" onchange="javascript:showUser()">
		              <option value="">Select one:</option>
		          <?php 

		            $sql="Select * From Planner ";

		            $result = $varConn->query($sql); 

		                while($row = $result->fetch_assoc()) {        
		                 echo '<option value="' . $row['PlannerFName'] .'" > ' . $row['PlannerFName'] . ' </option>'; 
		                }
		            " </select>"
					
		            ?></td></tr>

		       <tr><td> Location: </td><td> <select name="Place" id = "place" onchange="javascript:showUser()">
		       			<option value="">Select one:</option>

		            <?php

		            $sql="Select * From Place p, party a
		                    Where p.placeID=a.placeID ";

		            $result = $varConn->query($sql); 

		                while($row = $result->fetch_assoc()) {        
		                 echo '<option value="' . $row['PlaceName'] .'" > ' . $row['PlaceName'] . ' </option>'; 
		                }
		            " </select>"
					
		            ?>
		
		       </td></tr></br>
		           </table>
		        
		        </br>

		<div id="txtHint" align="left">Estimated cost will be displayed here...</div></br>

		        <div align="left">
		       

				<input class="button" type="submit" name="submit" value="Confirm">
				
				<input class="button" type="reset" name="reset" value="Cancel">
				
				</div>

		    </form>


		</article>

		<footer>Copyright &copy; MyParty.com </footer>

		</div>

		</body>

		</html>