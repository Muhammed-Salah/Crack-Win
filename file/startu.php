<!DOCTYPE html>
<html>
<script language="javascript">
	function checking() {
		var b1, l;
		b1 = document.signupform.b1.value;
		l = b1.toLowerCase();
		document.signupform.b1.value = l;
	}
</script>

<head>
	<title>Decrypto</title>
	<link rel="icon" href="../img/logo.png" type="image/x-icon" width='100%'>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>

<body>

	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- add header -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="">
					<h3><b>&nbsp;Decrypto</b></h3>
				</a>
			</div>
			<!-- menu items -->
			<div class="collapse navbar-collapse" id="navbar1">
				<ul class="nav navbar-nav navbar-right">

					<li class="active"><a href="">New User</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container" style="padding-top:10%;">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 well">

				<fieldset>
					<legend>Let's start</legend>
					<form name="signupform">
						<center>
							<h4>Welcome to Decrypto, a pre-event for AKCSSC'20 by IEEE MEA SB <br> Are you up for the challenge?</h4>
						</center>

						<center>
							<div class="form-group">
								<a href="start.php?phno=<?php echo $_GET['b2'];  ?>"><input onclick="checking();" type="button" name="signup" value="Start Now" class="btn btn-primary" /></a>
							</div>
						</center>
				</fieldset>

				<span class="text-success"></span>
				<span class="text-danger"></span>
			</div>
		</div>
	</div>

	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>



<?php
ini_set("display_errors", "on");
//create connection
include_once('sms.php');
include_once('database.php');
$phno = $_GET['b2'];
$name1 = $_GET['b1'];
$name2 = "";
$name3 = "";
$a=$_GET['p1'];
$bach = $_GET['b4'];
$connect = login123();
/* check if him already registered*/
$ch = ("select * from student where phno='$phno';");
$chde = mysqli_query($connect, $ch);
$chde = mysqli_fetch_array($chde);

if (!$connect) {


	echo "<script>alert('cannot now please try again later..!!!')</script>";
	echo "<script> history.go(-1) </script>";
} else if ($chde['phno'] == $phno) {

	echo "<script>alert('Already Registered ..!')</script>";
	echo "<script> history.go(-1) </script>";
} else {
	$quary = ("INSERT INTO `student` (`no`, `name1`, `name2`, `name3`, `phno`, `bach`, `point`,`pass`,`lasttime`,`submit`) VALUES (NULL,'$name1', '$name2', '$name3', '$phno', '$bach', '0','$a',now(),0);");
	//$quary=("insert into student(no,name,name2,name3,phno,bach,point)values(NULL,'$name1','$name2','$name3','$phno','$bach',0);");
	$c = mysqli_query($connect, $quary);
	//sms($phno,$a);
	/*if($c==1)
 	{
	 	 
	  	session_start();
	  	ini_set('session.gc_maxlifetime', 86400);
	  	date_default_timezone_set('Asia/Kolkata');
	  	$_SESSION['time_1']=date('h:i:s');
		 $_SESSION['phno']=$phno;
		 header('location:TuQu/page_q_.php');
	
 	}*/
	if ($c != 1) {
		echo "<script>alert('Oops!!!')</script>";
		echo "<script> history.go(-1) </script>";
	}
}
?>