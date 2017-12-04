    <?php
     include('session.php');
     ?>


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
        color:#000000;
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
        <li><a href="customerView.php">Account</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="logout.php">Log Out</a></li>
        

      </ul>
    </nav>

    <article>

    <!-- <h2> Order Confirmed </h2>
    <p>Thank you for the order.  </p>
    <p>We have successfully placed your order. </p>
    <p>Below is the summary of your order.</p> <br>   -->

    <?php

    $Type = $_GET ["Type"];
    $Theme = $_GET ["Theme"];
    $NoOfGuests = $_GET ["NoOfGuests"];
    $Planner = $_GET ["Planner"];
    $Date  = $_GET ["Date"];
    $Time  = $_GET ["Time"];
    $Place  = $_GET ["Place"];

         $varConn = Connect();
        if (!$varConn)
        {
            die('Could not connect: ' . mysql_error());
        }
         
    $user_check = $_SESSION['login_user'];    
    $sql = "SELECT * From  customer, customer_phone
            WHERE customer.email = customer_phone.email
            and customer.email='$user_check' ";     
    $result = $varConn->query($sql);     
    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {  
                        $CustomerId = $row['CustomerId'];      
                     $FirstName = $row['CustomerFname'] ; 
                     $LastName = $row['CustomerLname'] ; 
                     $EmailAddress = $row['email'] ; 
                     $TelephoneNumber = $row['Phone'] ; 
                    }
    }else{
        print("zero rows");
    }



    $sql2 = "SELECT * From  place
            WHERE PlaceName = '$Place' ";    
    $result2 = $varConn->query($sql2);     
    if ($result2->num_rows > 0) {
                        while($row = $result2->fetch_assoc()) {  
                        $PlaceID = $row['PlaceID'];      
                     $Address = $row['address'] ; 
                     $City = $row['City'] ; 
                    }

    }else{
        print("zero rows");
    }


    $sql3 = "SELECT * From  planner
            WHERE PlannerFName = '$Planner' ";   
    $result3 = $varConn->query($sql3);     
    if ($result3->num_rows > 0) {
                        while($row = $result3->fetch_assoc()) {  
                        $PlannerID = $row['PlannerID'];      
                       }
    }else{
        print("zero rows");
    }


    $sql4 = "SELECT * From  type
            WHERE TypeName = '$Type' ";   
         
    $result4 = $varConn->query($sql4);     
    if ($result4->num_rows > 0) {
                        while($row = $result4->fetch_assoc()) {  
                        $TypeID = $row['TypeID'];      
                        }

    }else{
        print("zero rows");
    }


    $sql5 = "SELECT * From  theme
            WHERE ThemeName = '$Theme' ";   
         
    $result5 = $varConn->query($sql5);     
    if ($result5->num_rows > 0) {
                        while($row = $result5->fetch_assoc()) {  
                        $ThemeID = $row['ThemeID'];      
                        }

    }else{
        print("zero rows");
    }



    $varQuery   = "INSERT into Party (PartyID,NoOfGuests,Date,Time,CustomerId,PlannerID,PlaceID,TypeID,ThemeID) VALUES(NULL,'$NoOfGuests','$Date','$Time','$CustomerId','$PlannerID','$PlaceID','$TypeID','$ThemeID')";

        $varSuccess = $varConn->query($varQuery);
        if (!$varSuccess) {
            die("Date and time is already booked. <br> Please try choosing another date or time");
            //die("Date and time is already booked. Please choose another time".$varConn->error);
        }else{
    echo "<h2> Order Confirmed </h2>";

    echo "<p>Thank you.  </p>";

    echo "<p>We have successfully placed your order. </p>";

    echo "<p>Below is the summary of your order.</p> <br> "; 


    echo 'Party type      : ' . $Type . '<br>';
    echo 'Party theme     : ' . $Theme . '<br>';
    echo 'Number of guests: ' . $NoOfGuests . '<br>';
    echo 'Planner         : ' . $Planner . '<br>';
    echo 'Date            : ' . $Date . '<br>';
    echo 'Time            : ' . $Time . '<br>';
    echo 'Location        : ' . $Place . '<br>';
    echo 'Address         : ' . $Address . ', ' .$City. '<br>'.'<br>';
    echo "<b>Customer Information :</b>".'<br>';
    echo 'Name            : ' . $FirstName . ' ' . $LastName . '<br>';
    echo 'Email Address   : ' . $EmailAddress . '<br>';
    echo 'Telephone Number: ' . $TelephoneNumber . '<br>';
    }

    $varConn->close();
    ?>

    </article>
    <footer>Copyright &copy; MyParty.com </footer>
    </div>
    </body>
    </html>
