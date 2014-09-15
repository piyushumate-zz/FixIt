<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$err1 = "asf";
if(isset($_SESSION['fullname']))
   header("Location : default.php");
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$username = $_POST['username'];
$password = $_POST['password1'];
if($username!="" && $password!="")
{
    $con = mysql_connect("mysql6.000webhost.com","a4636824_fixit","vikram2293") or die("Couldn't Connect !!");
mysql_select_db("a4636824_fixit") or die("Couldn't Find DB");
	$query = mysql_query("select * from users where username = '$username'");
    $numrows = mysql_num_rows($query);
	if($numrows!=0)
	{
	   while($row = mysql_fetch_assoc($query))
	   {
	      $dbfullname = $row['fullname'];
	      $dbusername = $row['username'];
		  $dbpassword = $row['password'];
	   }
	   if($username == $dbusername && $password == $dbpassword)
	   {
		  $_SESSION['fullname'] = $dbfullname;
		  header('Location:'.$_SESSION['url']);    
          exit();    
	   }
	   else
	   {
			header('Location: default.php?err1=Incorrect Password !!');    
            exit();    
		}
	}
	else
	{
	   header('Location: default.php?err1=User Not Registered !!');    
       exit();    
	}
}
else
{
   header('Location: default.php?err1=Enter Something !!');    
   exit();    
}
}
?>
</body>
</html>
