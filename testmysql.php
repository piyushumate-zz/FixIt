<?php
// Create connection
$con=mysqli_connect("localhost","root","","workmen");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else
  {
  echo "Connected to MySQL: " ;
  }
 $result = mysqli_query($con,"SELECT * FROM work");

//while($row = mysqli_fetch_array($result))
 // {
 // echo $row['name'] . " " . $row['address'];
  //echo "<br>";
  //}

mysqli_close($con);
?> 