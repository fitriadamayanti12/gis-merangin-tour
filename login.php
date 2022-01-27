<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | Merangin Tour</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->



        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><font face="Monotype Corsiva" size="7" color="#FFFFFF">Merangin Tour</font></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="tourism_package.php">Tourism Package</a></li>
                        <li><a href="maps.php">Maps</a></li>
                           <li><a href="contact-us.php">Contact</a></li>
<li class="active"><a href="login.php">Login</a></li> 
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><br />
  <br />
</p>
<p><br />
  <br />
</p>
<link href="daftar-style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
</div>
<p>Login</p>
<div class="kotak">
<?php 
        if(isset($_GET["login_error"])){
            echo "<h2 style='color:red';>username atau password salah</h2>";
        }
    ?>
<form  class="username" action="proses.php" method="post" >
  <input type="text" name="username" class="button" placeholder="Username" />
  <div style="margin-top:10px;"></div>
  <input type="password" name="password" class="button" placeholder="Password" />
  <input type="submit" name="Login" class="Login" value="Login" />
  <input type="reset" name="Reset" class="reset" value="Reset" />
</form>
</div>

</body>
</html>