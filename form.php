
<htmL>
<body>

Welcome <?php echo $_POST["fname"];
echo $_POST["lname"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<?php
// Create the Connection
$con=mysqli_connect("192.168.2.18","cash","johnson41","cash");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  mysqli_close($con);
?>


</body>
</html> 
