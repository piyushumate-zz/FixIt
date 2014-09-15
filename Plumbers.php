<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Plumbers !!</title>
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
	<link href="css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Peralta' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/glow.css" />
	<link rel="icon" type="image/png" href="tools.png" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans" />
	<script src="js/bootstrap.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/modal.js"></script>
	<script src="js/star-rating.js" type="text/javascript"></script>	
	<script type="text/javascript">
	function updatepage()
	{
	$('.MyPage').load();
	}
	</script>
	<script type="text/javascript" src="js1/modal.js"></script>
	
	<?php include 'loadall.php'; 
	session_start();
	?>
	<style>
		a.hiddenTab {visibility:hidden; display:none;}
	</style>
	<style type="text/css">

	.slideout-menu {
	margin: 0;
		padding: 0;
		font-family: 'Oswald', sans-serif;
		position: fixed;
		top: 200px;
		left: -100%;
		width: 45%;
		height: 200px;
		background: #333;
		z-index: 100;
	}
	.slideout-menu h3 {
	margin: 0;
		padding: 0;
		font-family: 'Oswald', sans-serif;
		position: relative;
		padding: 12px 10px;
		color: #fff;
		font-size: 1.2em;
		font-weight: 400;
		border-bottom: 4px solid #222;
	}
	.slideout-menu .slideout-menu-toggle {
	margin: 0;
		padding: 0;
		font-family: 'Oswald', sans-serif;
		position: absolute;
		top: 12px;
		right: 10px;
		display: inline-block;
		padding: 6px 9px 5px;
		font-family: Arial, sans-serif;
		font-weight: bold;
		line-height: 1;
		background: #222;
		color: #999;
		text-decoration: none;
		vertical-align: top;
	}
	.slideout-menu .slideout-menu-toggle:hover {
	margin: 0;
		padding: 0;
		font-family: 'Oswald', sans-serif;
		color: #fff;
	}
	.slideout-menu ul {
	margin: 0;
		padding: 0;
		font-family: 'Oswald', sans-serif;
		list-style: none;
		font-weight: 300;
		border-top: 1px solid #151515;
		border-bottom: 1px solid #454545;
	}
	.slideout-menu ul li {
	margin: 0;
		padding: 0;
		font-family: 'Oswald', sans-serif;
		border-top: 1px solid #454545;
		border-bottom: 1px solid #151515;
	}
	.slideout-menu ul li a {
	margin: 0;
		padding: 0;
		font-family: 'Oswald', sans-serif;
		position: relative;
		display: block;
		padding: 10px;
		color: #999;
		text-decoration: none;
	}
	.slideout-menu ul li a:hover {
	margin: 0;
		padding: 0;
		font-family: 'Oswald', sans-serif;
		background: #000;
		color: #fff;
	}
	.slideout-menu ul li a i {
	margin: 0;
		padding: 0;
		font-family: 'Oswald', sans-serif;
		position: absolute;
		top: 15px;
		right: 10px;
		opacity: .5;
	}
	
	.header {
	margin: 0;
		padding: 0;
		font-family: 'Oswald', sans-serif;
		padding: 15px;
		background: #000;
	}
	.header .slideout-menu-toggle {
	margin: 0;
		padding: 0;
		font-family: 'Oswald', sans-serif;
		font-size: 1.2em;
		color: #999;
		text-decoration: none;
	}
	.header .slideout-menu-toggle:hover {
	margin: 0;
		padding: 0;
		font-family: 'Oswald', sans-serif;
		color: #fff;
	}
	.header .slideout-menu-toggle i {
	margin: 0;
		padding: 0;
		font-family: 'Oswald', sans-serif;
		vertical-align: top;
		margin: 5px 3px 0 0;
	}

	}
</style>
					
</head>

<body style="background-color:#000">
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:30%">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Send Request</h4>
      </div>
      <div class="modal-body">
      <form role="form" action="email.php" method="post">
  <div class="form-group">
    <label for="from">From</label><span style="color:#FF0000">*</span>
    <input type="text" class="form-control" name="from" placeholder="Enter Email ID">
  </div>
  <div class="form-group">
    <label for="subject">Subject</label><span style="color:#FF0000">*</span>
    <input type="text" class="form-control" name="subject" placeholder="Enter Subject">
  </div>
    <div class="form-group">
    <label for="message">Message</label><span style="color:#FF0000">*</span>
    <input type="text" class="form-control" name="message" placeholder="Enter Message">
  </div>
  <button type="" class="btn btn-default">Send Mail</button>
  
  <br>
    <?php if(isset($_GET['err2']))
	  {
	  echo "<span style=\"font-family:Arial, Helvetica, sans-serif; color : #ff0000; font-size:12px; ; margin-top:50px\">".$_GET['err2']."</span>";
	  } 
	  ?>
</form>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid" style="width:100%; position:fixed; top:0px; z-index:10">

<div class="row small" style="background-color:#222222">
<div class="col-md-3" style="margin-top:50px">

<?php
$_SESSION['url']= $_SERVER['PHP_SELF'];
if(isset($_SESSION['fullname']))
{
    echo "<span style=\"font-family:Arial, Helvetica, sans-serif; color : #fff; font-size:18px; ; margin-top:50px\">"."Welcome, " .$_SESSION['fullname']."&nbsp;&nbsp;&nbsp;</span><button type=\"button\" onclick=\"window.location='logout.php'\" class=\"btn btn-primary btn-lg\">Logout</button>";	
}
?>
</div>

<div class="col-md-3 col-md-offset-1">
<p class="blue"; style="text-align:right">
<a href="default.php"><span style="color:#FF3030">Fix It</span> </a>
</p>
</div>
<div class="col-md-2 col-md-offset-3" style="margin-top:50px">
<?php
if(!isset($_SESSION['fullname']))
{
echo "<button type=\"button\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">Login</button>&nbsp;&nbsp;&nbsp;&nbsp;<button type=\"button\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModal2\">Register</button>";
}
?>

</div>
</div>    <!--end of first row-->
</div>

<div class="slideout-menu">
	<h3>Choose Your Service<a href="#" class="slideout-menu-toggle">&times;</a></h3>
	<ul>
	<a href="Plumbers.php"><img width=150 height=150 src="plumber.jpg" style="margin-left:20px"/></a>
	<a href="Carpenters.php"><img width=150 height=150 src="carpenter_default.jpg" style="margin-left:20px"/></a>
	<a href="Electricians.php"><img width=150 height=150 src="electrician.jpg" style="margin-left:20px"/></a>
</div>
<!--/.slideout-menu-->

<!-- Modal Login-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:30%">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Welcome Back</h4>
      </div>
      <div class="modal-body">
      <form role="form" action="login.php" method="post">
  <div class="form-group">
    <label for="username">Username</label><span style="color:#FF0000">*</span>
    <input type="text" class="form-control" name="username" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label for="password1">Password</label><span style="color:#FF0000">*</span>
    <input type="password" class="form-control" name="password1" placeholder="Password">
  </div>
  <button type="" class="btn btn-default">Sign In</button>
  <br>
  <?php if(isset($_GET['err2']))
	  {
	  echo "<span style=\"font-family:Arial, Helvetica, sans-serif; color : #ff0000; font-size:12px; ; margin-top:50px\">".$_GET['err2']."</span>";
	  } 
	  ?>
</form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Register -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:30%">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Welcome</h4>
      </div>
      <div class="modal-body">
      <form role="form"  action="register.php" method="post">
	  <div class="form-group">
    <label for="fullname">Full Name</label><span style="color:#FF0000">*</span>
    <input type="text" class="form-control" name="fullname" placeholder="Enter you Full Name">
	  <?php if(isset($_GET['fullnamerr']))
	  {
	  echo "<span style=\"font-family:Arial, Helvetica, sans-serif; color : #ff0000; font-size:12px; ; margin-top:50px\">".$_GET['fullnamerr']."</span>";
	  } 
	  ?>
  </div>
  <div class="form-group">
    <label for="address">Address</label><span style="color:#FF0000">*</span>
    <input type="text" class="form-control" name="address" placeholder="Enter Address">
    <?php if(isset($_GET['adderr']))
	  {
	  echo "<span style=\"font-family:Arial, Helvetica, sans-serif; color : #ff0000; font-size:12px; ; margin-top:50px\">".$_GET['adderr']."</span>";
	  } 
	  ?>
  </div>
  <div class="form-group">
    <label for="phone">Phone</label><span style="color:#FF0000">*</span>
    <input type="text" class="form-control" name="phone" placeholder="Enter 10-digit mobile no">
    <?php if(isset($_GET['phonerr']))
	  {
	  echo "<span style=\"font-family:Arial, Helvetica, sans-serif; color : #ff0000; font-size:12px; ; margin-top:50px\">".$_GET['phonerr']."</span>";
	  } 
	  ?>
  </div>
  <div class="form-group">
    <label for="username1">Email ID</label><span style="color:#FF0000">*</span>
    <input type="text" class="form-control" name="email" placeholder="Enter Email ID">
	<?php if(isset($_GET['emerr']))
	  {
	  echo "<span style=\"font-family:Arial, Helvetica, sans-serif; color : #ff0000; font-size:12px; ; margin-top:50px\">".$_GET['emerr']."</span>";
	  } 
	  ?>
  </div>
  <div class="form-group">
    <label for="username1">Username</label><span style="color:#FF0000">*</span>
    <input type="text" class="form-control" name="username1" placeholder="Enter Username">
	<?php if(isset($_GET['usererr']))
	  {
	  echo "<span style=\"font-family:Arial, Helvetica, sans-serif; color : #ff0000; font-size:12px; ; margin-top:50px\">".$_GET['usererr']."</span>";
	  } 
	  ?>
  </div>
  <div class="form-group">
    <label for="password2">Password</label><span style="color:#FF0000">*</span>
    <input type="password" class="form-control" name="password2" placeholder="Password" />
	<?php if(isset($_GET['passerr']))
	  {
	  echo "<span style=\"font-family:Arial, Helvetica, sans-serif; color : #ff0000; font-size:12px; ; margin-top:50px\">".$_GET['passerr']."</span>";
	  } 
	  ?>
  </div>
  <div class="form-group">
    <label for="confirmpassword2">Confirm Password</label><span style="color:#FF0000">*</span>
    <input type="password" class="form-control" name="confirmpassword2" placeholder="Confirm Password">
	<?php if(isset($_GET['passerr']))
	  {
	  echo "<span style=\"font-family:Arial, Helvetica, sans-serif; color : #ff0000; font-size:12px; ; margin-top:50px\">".$_GET['passerr']."</span>";
	  } 
	  ?>
	<br>
	<?php if(isset($_GET['passerr2']))
	  {
	  echo "<span style=\"font-family:Arial, Helvetica, sans-serif; color : #ff0000; font-size:12px; ; margin-top:50px\">".$_GET['passerr2']."</span>";
	  } 
	  ?>
  </div>
  <button type="" class="btn btn-default">Sign Up</button>
</form>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid" style="margin-top:126px">
	 <div id="blog" class="row">                 
            <div class="col-md-2">
            <nav class="nav-sidebar" style="position:fixed; top:126px">
                <ul class="nav">
				   	<a href="#" class="slideout-menu-toggle"><span class="glyphicon glyphicon-align-justify" style="color:#FFFFFF; font-size:36px"></span></a>
                    <h3 style="color:#FFFFFF; font:Helvetica">Modify Search </h3>
                    <li class="nav-divider" style="color:#FFFFFF"></li>					
					<li><a href="cnlpro/b(p).php" style="color:#FFFFFF; font-size:16px">View Map</a></li>
                    <li class="nav-divider" style="color:#FFFFFF"></li>
                    <li><p style="color:#FFFFFF; font-size:16px">Rating</p></li>
                    <li><a href="#" style="color:#FFFFFF" onClick="updatelist(1,1);">All</a></li>
                    <li><a href="#" style="color:#FFFFFF" onClick="updatelist(1,2);">2+ stars</a></li>
                    <li><a href="#" style="color:#FFFFFF" onClick="updatelist(1,3);">3+ stars</a></li>
                    <li><a href="#" style="color:#FFFFFF" onClick="updatelist(1,4);">4+ stars</a></li>
                    <li class="nav-divider" style="color:#FFFFFF"></li>														
                    </ul>
            </nav>
        </div>
				 <div class="MyPage">
				 <div class="col-md-10">				 
					<a id="list1" class="list-group-item" style="height:225px">						
                     	<img id="img1" src=<?php echo $imgpath[$count]; ?> 	alt="post img" class="pull-left img-responsive thumb img-thumbnail" style="height:175px;width:150px;">					
					 	<div class="col-lg-6">
							<h1 id="name1"><?php 
									  echo $name[$count];								  
								 ?></h1>
							<label style="margin-left:10px; margin-top:10px">
								Address :	
							</label>
							<p id="addr1" style="margin-left:10px; padding-top:-5px"><?php			  
									  echo $address[$count];								  
								 ?>
							</p>																		
							<label style="margin-left:10px"> Contact : </label>																																
							<p id="cont1" style="margin-left:10px; padding-top:-5px"><?php			  
									  echo $contactno[$count];								  
								 ?>
							</p>
						</div>
							<div style="padding-top:35px"> 					    											
							<input id="input-id1" type="number" class="rating" data-size="sm" max="5" value=<?php			  
									  echo $rating[$count];								  
								 ?> data-readonly="true" >
							</div>
							<br>
							<button type="button" class="btn btn-default " style="text-align:center; margin-left:10px; margin-top:40px;" data-toggle="modal" data-target="#myModal3">  Send Request Now! </button>								</a>				   				                  				 
							<a id="list2" class="list-group-item" style="height:225px">						
                     	<img id="img2"src=<?php echo $imgpath[$count+1]; ?> 	alt="post img" class="pull-left img-responsive thumb img-thumbnail" style="height:175px;width:150px;">					
					 	<div class="col-lg-6">
							<h1 id="name2"><?php 
									  echo $name[$count+1];								  
								 ?></h1>
							<label style="margin-left:10px; margin-top:10px">
								Address :	
							</label>
							<p id="addr2" style="margin-left:10px; padding-top:-5px"><?php			  
									  echo $address[$count+1];								  
								 ?>
							</p>																		
							<label style="margin-left:10px"> Contact : </label>																																
							<p id="cont2" style="margin-left:10px; padding-top:-5px"><?php			  
									  echo $contactno[$count+1];								  
								 ?>
							</p>
						</div>
							<div style="padding-top:35px"> 					    											
							<input id="input-id2" type="number" class="rating" data-size="sm" max="5" value=<?php			  
									  echo $rating[$count+1];								  
								 ?> data-readonly="true" >
							</div>
							<br>
							<button type="button" class="btn btn-default " style="text-align:center; margin-left:10px; margin-top:40px;" data-toggle="modal" data-target="#myModal3">  Send Request Now! </button>								</a>				   				                  										<a id="list3" class="list-group-item" style="height:225px">						
                     	<img id="img3" src=<?php echo $imgpath[$count+2]; ?> 	alt="post img" class="pull-left img-responsive thumb img-thumbnail" style="height:175px;width:150px;">					
					 	<div class="col-lg-6">
							<h1 id="name3" ><?php 
									  echo $name[$count+2];								  
								 ?></h1>
							<label style="margin-left:10px; margin-top:10px">
								Address :	
							</label>
							<p id="addr3" style="margin-left:10px; padding-top:-5px"><?php			  
									  echo $address[$count+2];								  
								 ?>
							</p>																		
							<label style="margin-left:10px"> Contact : </label>																																
							<p id="cont3" style="margin-left:10px; padding-top:-5px"><?php			  
									  echo $contactno[$count+2];								  
								 ?>
							</p>
						</div>
							<div style="padding-top:35px"> 					    											
							<input id="input-id3" type="number" class="rating" data-size="sm" max="5" value=<?php			  
									  echo $rating[$count+2];								  
								 ?> data-readonly="true" >
							</div>
							<br>
							<button type="button" class="btn btn-default " style="text-align:center; margin-left:10px; margin-top:40px;" data-toggle="modal" data-target="#myModal3">  Send Request Now! </button>								</a>				   				                  				
							<a id="list4" class="list-group-item" style="height:225px">						
                     	<img id="img4" src=<?php echo $imgpath[$count+3]; ?> 	alt="post img" class="pull-left img-responsive thumb img-thumbnail" style="height:175px;width:150px;">					
					 	<div class="col-lg-6">
							<h1 id="name4" ><?php 
									  echo $name[$count+3];								  
								 ?></h1>
							<label style="margin-left:10px; margin-top:10px">
								Address :	
							</label>
							<p id="addr4" style="margin-left:10px; padding-top:-5px"><?php			  
									  echo $address[$count+3];								  
								 ?>
							</p>																		
							<label style="margin-left:10px"> Contact : </label>																																
							<p id="cont4" style="margin-left:10px; padding-top:-5px"><?php			  
									  echo $contactno[$count+3];								  
								 ?>
							</p>
						</div>
							<div style="padding-top:35px"> 					    											
							<input id="input-id4" type="number" class="rating" data-size="sm" max="5" value=<?php			  
									  echo $rating[$count+3];								  
								 ?> data-readonly="true" >
							</div>
							<br>
							<button type="button" class="btn btn-default " style="text-align:center; margin-left:10px; margin-top:40px;" data-toggle="modal" data-target="#myModal3">  Send Request Now! </button>								</a>				   				                  				
							<a id="list5" class="list-group-item" style="height:225px">						
                     	<img id="img5" src=<?php echo $imgpath[$count+4]; ?> 	alt="post img" class="pull-left img-responsive thumb img-thumbnail" style="height:175px;width:150px;">					
					 	<div class="col-lg-6">
							<h1 id="name5" ><?php 
									  echo $name[$count+4];								  
								 ?></h1>
							<label style="margin-left:10px; margin-top:10px">
								Address :	
							</label>
							<p id="addr5" style="margin-left:10px; padding-top:-5px"><?php			  
									  echo $address[$count+4];								  
								 ?>
							</p>																		
							<label style="margin-left:10px"> Contact : </label>																																
							<p id="cont5" style="margin-left:10px; padding-top:-5px"><?php			  
									  echo $contactno[$count+4];								  
								 ?>
							</p>
						</div>
							<div style="padding-top:35px"> 					    											
							<input id="input-id5" type="number" class="rating" data-size="sm" max="5" value=<?php			  
									  echo $rating[$count+4];								  
								 ?> data-readonly="true" >
							</div>
							<br>
							<button type="button" class="btn btn-default " style="text-align:center; margin-left:10px; margin-top:40px;" data-toggle="modal" data-target="#myModal3">  Send Request Now! </button>								</a>				   				                  				
							<a id="list6" class="list-group-item" style="height:225px">						
                     	<img id="img6" src=<?php echo $imgpath[$count+5]; ?> 	alt="post img" class="pull-left img-responsive thumb img-thumbnail" style="height:175px;width:150px;">					
					 	<div class="col-lg-6">
							<h1 id="name6" ><?php 
									  echo $name[$count+5];								  
								 ?></h1>
							<label style="margin-left:10px; margin-top:10px">
								Address :	
							</label>
							<p id="addr6" style="margin-left:10px; padding-top:-5px"><?php			  
									  echo $address[$count+5];								  
								 ?>
							</p>																		
							<label style="margin-left:10px"> Contact : </label>																																
							<p id="cont6" style="margin-left:10px; padding-top:-5px"><?php			  
									  echo $contactno[$count+5];								  
								 ?>
							</p>
						</div>
							<div style="padding-top:35px"> 					    											
							<input id="input-id6" type="number" class="rating" data-size="sm" max="5" value=<?php			  
									  echo $rating[$count+5];								  
								 ?> data-readonly="true" >
							</div>
							<br>
							<button type="button" class="btn btn-default " style="text-align:center; margin-left:10px; margin-top:40px;" data-toggle="modal" data-target="#myModal3">  Send Request Now! </button>								</a>				   				                  				
							<a id="list7" class="list-group-item" style="height:225px">						
                     	<img id="img7" src=<?php echo $imgpath[$count+6]; ?> 	alt="post img" class="pull-left img-responsive thumb img-thumbnail" style="height:175px;width:150px;">					
					 	<div class="col-lg-6">
							<h1 id="name7"><?php 
									  echo $name[$count+6];								  
								 ?></h1>
							<label style="margin-left:10px; margin-top:10px">
								Address :	
							</label>
							<p id="addr7" style="margin-left:10px; padding-top:-5px"><?php			  
									  echo $address[$count+6];								  
								 ?>
							</p>																		
							<label style="margin-left:10px"> Contact : </label>																																
							<p id="cont7" style="margin-left:10px; padding-top:-5px"><?php			  
									  echo $contactno[$count+6];								  
								 ?>
							</p>
						</div>
							<div style="padding-top:35px"> 					    											
							<input id="input-id7" type="number" class="rating" data-size="sm" max="5" value=<?php			  
									  echo $rating[$count+6];								  
								 ?> data-readonly="true" >
							</div>
							<br>
							<button type="button" class="btn btn-default " style="text-align:center; margin-left:10px; margin-top:40px;" data-toggle="modal" data-target="#myModal3">  Send Request Now! </button>								</a>				   				                  				
							<a id="list8" class="list-group-item" style="height:225px">						
                     	<img id="img8" src=<?php echo $imgpath[$count+7]; ?> 	alt="post img" class="pull-left img-responsive thumb img-thumbnail" style="height:175px;width:150px;">					
					 	<div class="col-lg-6">
							<h1 id="name8"><?php 
									  echo $name[$count+7];								  
								 ?></h1>
							<label style="margin-left:10px; margin-top:10px">
								Address :	
							</label>
							<p id="addr8" style="margin-left:10px; padding-top:-5px"><?php			  
									  echo $address[$count+7];								  
								 ?>
							</p>																		
							<label style="margin-left:10px"> Contact : </label>																																
							<p id="cont8" style="margin-left:10px; padding-top:-5px"><?php			  
									  echo $contactno[$count+7];								  
								 ?>
							</p>
						</div>
							<div style="padding-top:35px"> 					    											
							<input id="input-id8" type="number" class="rating" data-size="sm" max="5" value=<?php			  
									  echo $rating[$count+7];								  
								 ?> data-readonly="true" >
							</div>
							<br>
							<button type="button" class="btn btn-default " style="text-align:center; margin-left:10px; margin-top:40px;" data-toggle="modal" data-target="#myModal3">  Send Request Now! </button>								</a>				   				                  				
							<a id="list9" class="list-group-item" style="height:225px">						
                     	<img id="img9" src=<?php echo $imgpath[$count+8]; ?> 	alt="post img" class="pull-left img-responsive thumb img-thumbnail" style="height:175px;width:150px;">					
					 	<div class="col-lg-6">
							<h1 id="name9"><?php 
									  echo $name[$count+8];								  
								 ?></h1>
							<label style="margin-left:10px; margin-top:10px">
								Address :	
							</label>
							<p id="addr9" style="margin-left:10px; padding-top:-5px"><?php			  
									  echo $address[$count+8];								  
								 ?>
							</p>																		
							<label style="margin-left:10px"> Contact : </label>																																
							<p id="cont9" style="margin-left:10px; padding-top:-5px"><?php			  
									  echo $contactno[$count+8];								  
								 ?>
							</p>
						</div>
							<div style="padding-top:35px"> 					    											
							<input id="input-id9" type="number" class="rating" data-size="sm" max="5" value=<?php			  
									  echo $rating[$count+8];								  
								 ?> data-readonly="true" >
							</div>
							<br>
							<button type="button" class="btn btn-default " style="text-align:center; margin-left:10px; margin-top:40px;" data-toggle="modal" data-target="#myModal3">  Send Request Now! </button>								</a>				   				                  				
							<a id="list10" class="list-group-item" style="height:225px">						
                     	<img id="img10" src=<?php echo $imgpath[$count+9]; ?> 	alt="post img" class="pull-left img-responsive thumb img-thumbnail" style="height:175px;width:150px;">					
					 	<div class="col-lg-6">
							<h1 id="name10"><?php 
									  echo $name[$count+9];								  
								 ?></h1>
							<label style="margin-left:10px; margin-top:10px">
								Address :	
							</label>
							<p id="addr10" style="margin-left:10px; padding-top:-5px"><?php			  
									  echo $address[$count+9];								  
								 ?>
							</p>																		
							<label style="margin-left:10px"> Contact : </label>																																
							<p id="cont10" style="margin-left:10px; padding-top:-5px"><?php			  
									  echo $contactno[$count+9];								  
								 ?>
							</p>
						</div>
							<div style="padding-top:35px"> 					    											
							<input id="input-id10" type="number" class="rating" data-size="sm" max="5" value=<?php			  
									  echo $rating[$count+9];								  
								 ?> data-readonly="true" >
							</div>
							<br>
							<button type="button" class="btn btn-default " style="text-align:center; margin-left:10px; margin-top:40px;" data-toggle="modal" data-target="#myModal3">  Send Request Now! </button>								</a>				   				                  				
							</div>
					
					<ul class="pagination pagination-lg" style="padding-left:600px">
			  <li id="page1" class="active"><a href="#" onClick="updatelist(1,getrating());">1</a></li>
			  <li id="page2" class=""><a href="#" onClick="updatelist(11,getrating());">2</a></li>
			  <li id="page3" class=""><a href="#" onClick="updatelist(21,getrating());">3</a></li>
			  <li id="page4" class=""><a href="#" onClick="updatelist(31,getrating());">4</a></li>
			  <li id="page5" class=""><a href="#" onClick="updatelist(41,getrating());">5</a></li>
			</ul>
				 </div>                 
               <!--<div class="col-md-12 gap10"></div> -->
             </div>						
					<script type="text/javascript">
			var ratingval;
			function getrating()
			 {
			    return ratingval;
			 }
			function updatelist(index,rating)
			{
				ratingval=rating;
				if(index==1)
				{
					$('#page1').attr('class','active');					
					$('#page2').attr('class','');
					$('#page3').attr('class','');
					$('#page4').attr('class','');
					$('#page5').attr('class','');
				}
				if(index==11)
				{
					$('#page2').attr('class','active');					
					$('#page1').attr('class','');
					$('#page3').attr('class','');
					$('#page4').attr('class','');
					$('#page5').attr('class','');
				}
				if(index==21)
				{
					$('#page3').attr('class','active');					
					$('#page1').attr('class','');
					$('#page2').attr('class','');
					$('#page4').attr('class','');
					$('#page5').attr('class','');
				}
				if(index==31)
				{
					$('#page4').attr('class','active');					
					$('#page1').attr('class','');
					$('#page3').attr('class','');
					$('#page2').attr('class','');
					$('#page5').attr('class','');
				}
				if(index==41)
				{
					$('#page5').attr('class','active');					
					$('#page1').attr('class','');
					$('#page3').attr('class','');
					$('#page4').attr('class','');
					$('#page2').attr('class','');
				}
			var jname= <?php echo json_encode($name); ?>;
			var jaddr= <?php echo json_encode($address); ?>;
			var jcont= <?php echo json_encode($contactno); ?>;
			var jimg= <?php echo json_encode($imgpath); ?>;
			var jrating= <?php echo json_encode($rating); ?>;
			
			if(ratingval==2||ratingval==3||ratingval==4)
			{									
					for (var i=1;i<=21;i++)
					{
						if(jrating[i]<ratingval)
						{
						  jname[i]=undefined;
						 } 
					}
			}
						
			if(jname[index] === undefined)
			{						 
			  $('#list1').attr('class','hiddenTab');	
			  $('#list2').attr('class','hiddenTab');	
			  $('#list3').attr('class','hiddenTab');				  			  		
			  $('#list4').attr('class','hiddenTab');				  
			  $('#list5').attr('class','hiddenTab');				  
			  $('#list6').attr('class','hiddenTab');	
			  $('#list7').attr('class','hiddenTab');							  
			  $('#list8').attr('class','hiddenTab');				  
			  $('#list9').attr('class','hiddenTab');				  
			  $('#list10').attr('class','hiddenTab');				  
			  return;
			} 
			else
			{
				$('#list1').attr('class','list-group-item');	
			}
			
			$('#name1').html(jname[index]);
			$('#addr1').html(jaddr[index]);
			$('#cont1').html(jcont[index]);
			$('#img1').html(jimg[index]);																		
    		$('#input-id1').val(jrating[index]);
			$('#input-id1').rating('refresh');
			
			if(jname[index+1] === undefined)
			{						 
			  $('#list2').attr('class','hiddenTab');	
			  $('#list3').attr('class','hiddenTab');				  			  		
			  $('#list4').attr('class','hiddenTab');				  
			  $('#list5').attr('class','hiddenTab');				  
			  $('#list6').attr('class','hiddenTab');	
			  $('#list7').attr('class','hiddenTab');							  
			  $('#list8').attr('class','hiddenTab');				  
			  $('#list9').attr('class','hiddenTab');				  
			  $('#list10').attr('class','hiddenTab');				  
			  return;
			} 
			else
			{
				$('#list2').attr('class','list-group-item');	
			}
			$('#name2').html(jname[index+1]);
			$('#addr2').html(jaddr[index+1]);
			$('#cont2').html(jcont[index+1]);
			$('#img2').html(jimg[index+1]);																		
    		$('#input-id2').val(jrating[index+1]);
			$('#input-id2').rating('refresh');
		
			if(jname[index+2] === undefined)
			{						 
			  $('#list3').attr('class','hiddenTab');				  			  		
			  $('#list4').attr('class','hiddenTab');				  
			  $('#list5').attr('class','hiddenTab');				  
			  $('#list6').attr('class','hiddenTab');	
			  $('#list7').attr('class','hiddenTab');							  
			  $('#list8').attr('class','hiddenTab');				  
			  $('#list9').attr('class','hiddenTab');				  
			  $('#list10').attr('class','hiddenTab');				  
			  return;
			} 
			else
			{
				$('#list3').attr('class','list-group-item');	
			}

		
			$('#name3').html(jname[index+2]);
			$('#addr3').html(jaddr[index+2]);
			$('#cont3').html(jcont[index+2]);
			$('#img3').html(jimg[index+2]);																		
    		$('#input-id3').val(jrating[index+2]);
			$('#input-id3').rating('refresh');
			
			if(jname[index+3] === undefined)
			{						 
			  $('#list4').attr('class','hiddenTab');				  
			  $('#list5').attr('class','hiddenTab');				  
			  $('#list6').attr('class','hiddenTab');	
			  $('#list7').attr('class','hiddenTab');							  
			  $('#list8').attr('class','hiddenTab');				  
			  $('#list9').attr('class','hiddenTab');				  
			  $('#list10').attr('class','hiddenTab');				  
			  return;
			} 
			else
			{
				$('#list4').attr('class','list-group-item');	
			}
			$('#name4').html(jname[index+3]);
			$('#addr4').html(jaddr[index+3]);
			$('#cont4').html(jcont[index+3]);
			$('#img4').html(jimg[index+3]);																		
    		$('#input-id4').val(jrating[index+3]);
			$('#input-id4').rating('refresh');
			
			if(jname[index+4] === undefined)
			{						 
			  $('#list5').attr('class','hiddenTab');				  
			  $('#list6').attr('class','hiddenTab');	
			  $('#list7').attr('class','hiddenTab');							  
			  $('#list8').attr('class','hiddenTab');				  
			  $('#list9').attr('class','hiddenTab');				  
			  $('#list10').attr('class','hiddenTab');				  
			  return;
			} 
			else
			{
				$('#list5').attr('class','list-group-item');	
			}
		
			$('#name5').html(jname[index+4]);
			$('#addr5').html(jaddr[index+4]);
			$('#cont5').html(jcont[index+4]);
			$('#img5').html(jimg[index+4]);																		
    		$('#input-id5').val(jrating[index+4]);
			$('#input-id5').rating('refresh');
			
			if(jname[index+5] === undefined)
			{						 
			  $('#list6').attr('class','hiddenTab');	
			  $('#list7').attr('class','hiddenTab');							  
			  $('#list8').attr('class','hiddenTab');				  
			  $('#list9').attr('class','hiddenTab');				  
			  $('#list10').attr('class','hiddenTab');				  
			  return;
			} 
			else
			{
				$('#list6').attr('class','list-group-item');	
			}
			$('#name6').html(jname[index+5]);
			$('#addr6').html(jaddr[index+5]);
			$('#cont6').html(jcont[index+5]);
			$('#img6').html(jimg[index+5]);	
			$('#input-id6').val(jrating[index+5]);
			$('#input-id6').rating('refresh');																	
    	
			if(jname[index+6] === undefined)
			{						 
			  $('#list7').attr('class','hiddenTab');							  
			  $('#list8').attr('class','hiddenTab');				  
			  $('#list9').attr('class','hiddenTab');				  
			  $('#list10').attr('class','hiddenTab');				  
			  return;
			} 
			else
			{
				$('#list7').attr('class','list-group-item');	
			}
			$('#name7').html(jname[index+6]);
			$('#addr7').html(jaddr[index+6]);
			$('#cont7').html(jcont[index+6]);
			$('#img7').html(jimg[index+6]);	
			$('#input-id7').val(jrating[index+6]);
			$('#input-id7').rating('refresh');
			
			if(jname[index+7] === undefined)
			{						 
			  $('#list8').attr('class','hiddenTab');				  
			  $('#list9').attr('class','hiddenTab');				  
			  $('#list10').attr('class','hiddenTab');				  
			  return;
			} 
			else
			{
				$('#list8').attr('class','list-group-item');	
			}
			
			$('#name8').html(jname[index+7]);
			$('#addr8').html(jaddr[index+7]);
			$('#cont8').html(jcont[index+7]);
			$('#img8').html(jimg[index+7]);	
			$('#input-id8').val(jrating[index+7]);
			$('#input-id8').rating('refresh');
		
			if(jname[index+8] === undefined)
			{						 
			  $('#list9').attr('class','hiddenTab');				  
			  $('#list10').attr('class','hiddenTab');				  
			  return;
			} 
			else
			{
				$('#list9').attr('class','list-group-item');	
			}		
			$('#name9').html(jname[index+8]);
			$('#addr9').html(jaddr[index+8]);
			$('#cont9').html(jcont[index+8]);
			$('#img9').html(jimg[index+8]);	
			$('#input-id9').val(jrating[index+8]);
			$('#input-id9').rating('refresh');
			
			if(jname[index+9] === undefined)
			{						 
			  $('#list10').attr('class','hiddenTab');				  
			  return;
			} 
			else
			{
				$('#list10').attr('class','list-group-item');	
			}
			$('#name10').html(jname[index+9]);
			$('#addr10').html(jaddr[index+9]);
			$('#cont10').html(jcont[index+9]);
			$('#img10').html(jimg[index+9]);	
			$('#input-id10').val(jrating[index+9]);
			$('#input-id10').rating('refresh');
		
		}		

			</script>
<script type="text/javascript">
$(document).ready(function () {
    $('.slideout-menu-toggle').on('click', function(event){
    	event.preventDefault();
    	// create menu variables
    	var slideoutMenu = $('.slideout-menu');
    	var slideoutMenuWidth = $('.slideout-menu').width();
    	
    	// toggle open class
    	slideoutMenu.toggleClass("open");
    	
    	// slide menu
    	if (slideoutMenu.hasClass("open")) {
	    	slideoutMenu.animate({
		    	left: "0px"
	    	});	
    	} else {
	    	slideoutMenu.animate({
		    	left: -slideoutMenuWidth
	    	}, 250);	
    	}
    });
});
</script>
</body>
</html>