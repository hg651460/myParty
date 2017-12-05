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

</style>
</head>
<body>

  <script type="text/javascript">
            var tpShow=false;
                function showUser(){
                     var k = document.getElementById('guest');

                     var guestVal = k.value;

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
                xmlhttp.open("GET","retriveLocations.php?guest="+guestVal,true);
                xmlhttp.send();
                                console.log(k.value);
                            
                        
                    }

                }
            </script>   

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
    <h1 ><b> <center> <font color="#b1871b "> </font></center></b></h1>
<article>

<p> Enter number of guests to find the Locations : </p>
 <div> 

 <form >

 Number of Guest: <input type= "text" id = "guest" size = "25" name="NoOfGuests" onchange="javascript:showUser()"></br></br>

<div id="txtHint" align="center">List of Locations :</div></br>

<input class="button" type="submit" onclick="javascript:showUser()" value="search" />

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
