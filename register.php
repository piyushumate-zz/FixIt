<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php
session_start();
$fullnam = $add = $phon = $email = $user = $pass2 = $confpass2 = "";
$fullnamerr = $adderr = $phonerr = $emerr = $usererr = $passerr = $passerr2 = "";
if(isset($_SESSION['fullname']))
   header('Location: default.php');
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if ($_POST['fullname']=="")
    {
	   header('Location: default.php?fullnamerr=Name is Required !!');    
       exit();
	}
  else
    {
	   $fullnam = $_POST['fullname'];
	   if (!preg_match("/^[a-zA-Z ]*$/",$fullnam))
       {
	   header('Location: default.php?fullnamerr=Only letters and white space allowed !!');    
       exit();
       }
	}

  if ($_POST['address']=="")
    {
	   header('Location: default.php?adderr=Address Is Required !!');    
       exit();
	}
  else
    {
	    $add = $_POST['address'];
    }

  if ($_POST['phone']=="")
    {
		header('Location: default.php?phonerr=Enter Phone Number !!');    
        exit();
	}
  else
    {
	    $phon = $_POST['phone'];
		if(!preg_match ("/^[0-9]{10}\\z/", $phon))
		{
		   header('Location: default.php?phonerr=Invalid Phone Number !!');    
           exit();
		}
		/*if(!preg_match( "/[^\d]\d{4}[- ]?\d{4}[^\d]/", $phon ))
		{
		   header('Location: homepage.php?phonerr=Invalid Phone Number !!');    
           exit();
		}*/
		/*if(strlen($phon)!= 10)
		{
		    header('Location: homepage.php?phonerr=Invalid Phone Number !!');    
            exit();
		}*/
	}
	
	if ($_POST['email']=="")
    {
		header('Location: default.php?emerr=Enter Email ID !!');    
        exit();
	}
  else
    {
	    $email = $_POST['email'];
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
       {
		   header('Location: default.php?emerr=Invalid email format !!');    
           exit();
       }
	}

  if ($_POST['username1']=="")
    {
		header('Location: default.php?usererr=Invalid Username !!');    
        exit();
	}
  else
    {
	    $user = $_POST['username1'];
	}
	
  if ($_POST['password2']=="")
    {
		header('Location: default.php?passerr=Enter Password !!');    
        exit();
	}
  else
    {
	    $pass2 = $_POST['password2'];
	}
	
   if ($_POST['confirmpassword2']=="")
    {
		 header('Location: default.php?passerr=Confirm Password !!');    
         exit();
    }
  else
    {
	    $confpass2 = $_POST['confirmpassword2'];
	}

   if ($pass2 != $confpass2)
   {
	  header('Location: default.php?passerr2=Passwords Do Not Match !!');    
      exit();
   }
    $con = mysql_connect("mysql6.000webhost.com","a4636824_fixit","vikram2293") or die("Couldn't Connect !!");
mysql_select_db("a4636824_fixit") or die("Couldn't Find DB");
	$query = mysql_query("select * from users where username = '$user'");
    $numrows = mysql_num_rows($query);
	if($numrows!=0)
	{
	   header('Location: default.php?usererr=Username Unavailable !!');
	   exit();
	}
	else
	{
	   $query = mysql_query("insert into users values(NULL,'$fullnam','$add','$phon','$email','$user','$pass2')");
	}
    header('Location: conf.php');    
    exit();  
}
?>

</body>
</html>