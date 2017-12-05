<?php


?>



<!DOCTYPE html>
<html>
<head>
    
      <script >
     function validateForm()
     {
        
		
	   //********************************************************
	   
	   //validate password   ( OK  )
		var pass=document.getElementById('password');
        var passw=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,20}$/;
        var isEmail = document.getElementById('email');
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
         
		if (pass.value.length == 0) 
		{
	    document.getElementById('passwordError').innerHTML = "  no password entered !";
		return false;
		}
        else if(pass.value.match(passw))   
        {   
        return true;  
        }  
        else  
        { 
		document.getElementById('passwordError').innerHTML = "  not a valid password  !";  
        alert("wrong password , it must be with minimum of 6 characters and at least one number, and one upper case characters, and one special character"); 
        return false;  
        } 
		//return true;
		//end password alidation 
	
	   //**************************************************
	   
		//validate email ( NOT OK)
    	
       
       /*
       
       //validate email 
    	var isEmail = document.getElementById('email')
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

    
        else if (isEmail.value.length == 0) 
		{
	    document.getElementById('EmailError').innerHTML = "  no email entered !";
		return false;
		}
        else if(isEmail.value.match(emailReg))
		{

		return true;
        }
		
        else
		{
	    document.getElementById('EmailError').innerHTML = "not a valid email";
        //alert("no valid email !");
		return true;
        }
		//end email validation 
        
       */
	
	return true;
	}//end outer function
        
   </script>
    <script>
        function num(){
            $myNum=document.getElementById('phone').value;
            
              console.log($myNum);
              $rg = new RegExp("^[0-9]{10}$");  //^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$
              
              if($myNum!=""){
                  if ($rg.test($myNum))
                  { 
                      document.getElementById('sp1').innerHTML="";
                  }
              else
                  {
                      //console.log('Age NOT OK--> Only numbers');
                      document.getElementById('sp1').innerHTML="ERoRR...!!!  phone number must be 10 digits valid number";
                      document.getElementById('phone').value="";
                      document.getElementById('phone').focus();
                  }
              }
        }
    </script>
    
<style>
div.container {
    width: 100%;
  
}

header {
    padding: 1em;
    color:darkmagenta;
    background-color: pink;
    clear: left;
    font-size: 250%;
    text-align:justify;
    text-decoration-color:black;
	background: url(p.jpg);
    background-position: center;
    
}
    footer {
    padding: 1em;
    border-color: antiquewhite;
    color:darkmagenta;
    clear: left;
    text-align:center;
    text-decoration-color:black;
	background: url(header.jpg);

    
}


nav {
    float: left;
    width: 110px;
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
   
    padding: 1em;
    overflow: hidden;
    color:PaleVioletRed;
	text-align: left;
    
}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 50%;
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


    <!-- ----------------------------- -->

</head>
<body>
   
   
    
<div class="container">
<header>
   <h1>MyParty</h1>
</header>
<nav>
  <ul>
    <li><a href="Home.php">Home</a></li>
    <li><a href="partyblogs.htm">Gallery</a></li>
    <li><a href="contact.html">Contact</a></li>
  </ul>
</nav>
    
<p><font face="verdana" color= "#cc6699" size"6">Want to plan a party ? We can help! Simply fill the form below and we will find you a planner.. </font> </p>
<article>

<form id="signup_form" action="signupAction.php"  onsubmit="return validateForm();"  method="POST"  >

		<label for="First name">First name:</label><br />
		<input id="Fname" type="text" placeholder="First Name" class="input" name="Fname" required ><br />
	
		<label for="Last name">Last name:</label><br />
		<input id="Lname" placeholder="Last Name" class="input" name="Lname" type="text" value="" required><br />
    
        <label for="phone">phone number:</label><br />
         <input type="tel" onblur="num();" id="phone" name ="phone" placeholder="0000000000" required/><span id="sp1"></span><br>
	
		<label for="email">Email:</label><br />
		<input id="email" placeholder="example@example.com" class="input" name="email" type="email" value="" required ><span id="EmailError"></span><br />
		<label>Password</label><br />
		<input type="password" placeholder="Enter Password" id="password" name="psw" required><span id="passwordError"> </span>  
    
		
		<div >
		 <input class="button"   type="submit" name="submit" value="Sign Up" >
        </div>

     <!-- --------------------------------- -->
    </form>  

 
</article>

<footer> <script type="text/javascript">
        
        var today = new Date();
        document.writeln( today.getFullYear() );
    
      </script>Copyright &copy; MyParty.com </footer>

</div>

</body>
</html>
