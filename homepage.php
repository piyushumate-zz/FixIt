<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Fullscreen Slit Slider with CSS3 and jQuery" />
<meta name="keywords" content="slit slider, plugin, css3, transitions, jquery, fullscreen, autoplay" />
<meta name="author" content="Codrops" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="FullscreenSlitSlider/css/demo.css" />
<link rel="stylesheet" type="text/css" href="FullscreenSlitSlider/css/style.css" />
<link rel="stylesheet" type="text/css" href="FullscreenSlitSlider/css/custom.css" />
<link href='http://fonts.googleapis.com/css?family=Peralta' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="FullscreenSlitSlider/js/modernizr.custom.79639.js"></script>
<script type="text/javascript" src="js1/modal.js"></script>
<noscript>
  <link rel="stylesheet" type="text/css" href="FullscreenSlitSlider/css/styleNoJS.css">
 </noscript>
 <style>
 a:hover
 {
     opacity: 0.2;
 }
 #make:hover
 {
    opacity: 0.98;
 }
 </style>
<link rel="stylesheet" type="text/css" href="glow.css" />
<link rel="icon" type="image/png" href="tools.png" />
<title>FixIt</title>
</head>

<body>

<div class="container-fluid" style="width:100%; position:fixed; top:0px; z-index:10">

<div class="row small" style="background-color:#222222">
<div class="col-md-3" style="margin-top:50px">

<?php
session_start(); 
$_SESSION['url']= $_SERVER['PHP_SELF'];
if(isset($_SESSION['fullname']))
{
    echo "<span style=\"font-family:Arial, Helvetica, sans-serif; color : #fff; font-size:18px; ; margin-top:50px\">"."Welcome, " .$_SESSION['fullname']."&nbsp;&nbsp;&nbsp;</span><button type=\"button\" onclick=\"window.location='logout.php'\" class=\"btn btn-primary btn-lg\">Logout</button>";	
}
?>
</div>

<div class="col-md-3 col-md-offset-1">
<p class="blue"; style="text-align:right">
<a href="homepage.php"><span style="color:#FF3030">Fix It</span> </a>
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
  <?php if(isset($_GET['err1']))
	  {
	  echo "<span style=\"font-family:Arial, Helvetica, sans-serif; color : #ff0000; font-size:12px; ; margin-top:50px\">".$_GET['err1']."</span>";
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


<div class="container demo-1">

            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<a href="Electricians.php"><div class="deco" data-icon="y"></div></a>
							<h2>electrician</h2>
							<!--<blockquote><p>You have just dined, and however scrupulously the slaughterhouse is concealed in the graceful distance of miles, there is complicity.</p><cite>Ralph Waldo Emerson</cite></blockquote>-->
						</div>
					</div>
					
					<div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<a href="Plumbers.php"><div class="deco" data-icon="p"></div></a>
							<h2>plumber</h2>
							<!--<blockquote><p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p><cite>Albert Schweitzer</cite></blockquote>-->
						</div>
					</div>
					
				<!--	<div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="h"></div>
							<h2>Dum spiro, spero</h2>
							<blockquote><p>Thousands of people who say they 'love' animals sit down once or twice a day to enjoy the flesh of creatures who have been utterly deprived of everything that could make their lives worth living and who endured the awful suffering and the terror of the abattoirs.</p><cite>Dame Jane Morris Goodall</cite></blockquote>
						</div>
					</div> -->
					
					<div class="sl-slide bg-4" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<a href="Carpenters.php"><div class="deco" data-icon="h"></div></a>
							<h2>carpenter</h2>
							<!--<blockquote><p>The human body has no more need for cows' milk than it does for dogs' milk, horses' milk, or giraffes' milk.</p><cite>Michael Klaper M.D.</cite></blockquote>-->
						</div>
					</div>
					
					<!--<div class="sl-slide bg-5" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="t"></div>
							<h2>Acta Non Verba</h2>
							<blockquote><p>I think if you want to eat more meat you should kill it yourself and eat it raw so that you are not blinded by the hypocrisy of having it processed for you.</p><cite>Margi Clarke</cite></blockquote>
						</div>
					</div>-->
				</div> <!--/sl-slider -->
				<nav id="nav-arrows" class="nav-arrows">
					<span class="nav-arrow-prev">Previous</span>
					<span class="nav-arrow-next">Next</span>					</nav>

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>			  </nav>
			</div><!-- /slider-wrapper -->
        <!-- /containder demo-1 -->
		</div>
		<!--
		</div><!-- /row2 -->
		<!--
		</div>-->
	    
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="FullscreenSlitSlider/js/jquery.ba-cond.min.js"></script>
		<script type="text/javascript" src="FullscreenSlitSlider/js/jquery.slitslider.js"></script>
		<script type="text/javascript">	
			$(function() {
			
				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ),
						$nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':last' ).on( 'click', function() {

								slitslider.next();
								return false;

							} );

							$navArrows.children( ':first' ).on( 'click', function() {
		 						
								slitslider.previous();
								return false;

							} );

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

				/**
				 * Notes: 
				 * 
				 * example how to add items:
				 */

				/*
				
				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
				
				// call the plugin's add method
				ss.add($items);

				*/
			
			});
		</script>
</body>
</html>