<?php
// Create connection
$name=array();
$address=array();
$contactno=array();
$rating=array();
$imgpath=array();
$email=array();
$count=0;	
$con = mysql_connect("mysql6.000webhost.com","a4636824_fixit","vikram2293") or die("Couldn't Connect !!");
mysql_select_db("a4636824_fixit") or die("Couldn't Find DB");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $result = mysql_query("SELECT * FROM work where occupation='Carpenter' order by rating desc");

while($row = mysql_fetch_array($result))
  {
	$count=$count+1;	
	$name[$count]=$row['name'];
	$address[$count]=$row['address'];
	$contactno[$count]=$row['contactno'];
	$rating[$count]=$row['rating'];
	$imgpath[$count]=$row['imgpath'];
	$email[$count]=$row['email'];
  }
$count=1;	
mysql_close($con);
?> 