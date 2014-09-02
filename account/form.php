
<htmL>
<body>

Welcome <?php echo $_POST["fname"]; ?> <br>
Your email address is: <?php echo $_POST["email"]; ?>

<?php
// Create the Connection
$con=mysqli_connect("192.168.1.125","cash","johnsoN41","cash");

// Check connection
if (mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
#mysqli_query($con, INSERT INTO cash.emp (fname,lname,email) VALUES($_POST["fname"],$_POST["lname"],$_POST["email"]));
  
mysqli_close($con);
#?>


</body>
</html> 
