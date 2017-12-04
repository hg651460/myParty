
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
    /* Set a style for all buttons */
    .button {
        background-image: #ffffff;
        color: #C71585;
        padding: 14px 20px;
        margin: 8px 0;
        border: #C71585;
        cursor: pointer;
        width: 40%;
        font-size: large;
    text-align:center;
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
        font-size: large;
    	text-align: left;
       
    }
    </style>
    </head>
    <body>

<form name="update" method="get" >

    <div class="container">

    <header>
       <h1>MyParty</h1>
    </header>
      
    <nav>
      <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="customerView.php"> Account</a></li>
        <li><a href="profile.php"> Profile</a></li>
        <li><a href="logout.php">Log Out</a></li>

      </ul>
    </nav>

    <article>
    <h1> Your profile is updated </h1>
    </br>
    
<div>
     <?php
     

         $varConn = Connect();
        if (!$varConn)
        {
            die('Could not connect: ' . mysql_error());
        }


    $varUser = $_GET["email"];
    $varPass = $_GET["pass"];

                $q = "UPDATE logininfo SET password = '$varPass' WHERE email = '$varUser' ";
                $rst = $varConn->query($q);
                if ($rst===true) {
               
                $message = "Password Changed";
              }                      

    			else{
           			 echo "Could not update your password at this time.<br> Please try again later.<br> " . mysqli_error($varConn);
        		}

         
    $user_check = $_SESSION['login_user'];    
    $sql = "SELECT customer.CustomerFName, customer.CustomerLName, customer.email, customer_phone.Phone, logininfo.password
            From  customer_phone, customer, logininfo
            WHERE customer_phone.email = customer.email 
                  AND customer.email = logininfo.email
                  AND customer.email ='$user_check' ";  
         

         
    $result = $varConn->query($sql);     
    if ($result->num_rows > 0) {
        
    echo '<table border="0">';


                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" ."First Name :  " ."</td>" . "<td>" .'<input type="text" value="'.$row['CustomerFName'].'">'."</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>" ."Last Name : " . "</td>" . "<td>" . '<input type="text" value="' . $row['CustomerLName'] . '">'."</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>" ."Email Address : " ."</td>" . "<td>" . '<input type="email" value="' . $row['email'] . '">'."</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>" ."Password  : " ."</td>" . "<td>" . '<input type="password" value="' . $row['password'] . '">' . "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>" ."Phone : " ."</td>" . "<td>" . '<input type="text" value="' . $row['Phone'] . '">'."</td>";
                    echo "</tr>";
                    
            }

    echo "</table>";
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


