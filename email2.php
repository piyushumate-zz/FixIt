<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>email</title>
</head>

<body>

<?php
include 'loadall2.php';
session_start();

if(!isset($_SESSION['fullname']))
   {
   header('Location:'.$_SESSION['url'].'?err2=Login First !!');
   die();
   }
function spamcheck($field)
  {
  // Sanitize e-mail address
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  // Validate e-mail address
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }
?>

<?php
  // Check if the "from" input field is filled out
  if ($_POST["from"]!="" && $_POST["subject"]!="" && $_POST["message"]!="")
    {
    // Check if "from" email address is valid
    $mailcheck = spamcheck($_POST["from"]);
    if ($mailcheck==FALSE)
      {
	     header('Location:'.$_SESSION['url'].'?err2=Invalid Email-ID !!');  
		 die();
      }
    else
     {
      $from = $_POST["from"]; // sender
      $subject = $_POST["subject"];
      $message = $_POST["message"];
      // message lines should not exceed 70 characters (PHP rule), so wrap it
      $message = wordwrap($message, 70);
      // send mail
      mail($email[$count],$subject,$message,"From:".$from);
      header('Location:'.$_SESSION['url']);
	  }
	 }
	 else
	 {
		header('Location:'.$_SESSION['url'].'?err2=Fill the Details !!');
	 }
?>
</body>
</html>
