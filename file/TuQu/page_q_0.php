<?php
ini_set("display_errors", "off");
ob_start();
ini_set('session.gc_maxlifetime', 86400);
include_once('fun/user.php');
session_start();
if ($_SESSION['answer'] == null) {
	header('location:../');
}
?>





<!DOCTYPE html>
<html>

<head>
	<style>

	</style>
	<script type="text/javascript">

	</script>
	<script src="basith.js"></script>


	<title>Decrypto</title>
	<link rel="icon" href="../../img/logo.png" type="image/x-icon" width='100%'>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="css/a.css" type="text/css" />
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
				<a class="navbar-brand" href="page_q_0.php">
					<h3><b>&nbsp;Decrypto</b></h3>
				</a>
			</div>
			<!-- menu items -->

			<div class="collapse navbar-collapse" id="navbar1">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href=""> <?php user(); ?> </a></li>
					<!--
					confrom button
				-->
					<li><a name='a' method='post' action='../logout.php' href="../logout.php?id=1" onclick="return confirm('Are you sure you want to logout ?')"><b>Logout</b></a></li>
				</ul>
			</div>
		</div>
	</nav>

	<br><br><br><br>

	<center>
		<h3>
			<font color='blue'><?php echo strtoupper("DECRYPT: <font color='red'>89,111,85,126,97,82,101,95,66,114,73,108,76,105,65,110,84</font>")  ?>
		</h3>
		</font><br>
		<!-- <center><h4>Hint: <a href="execom.pdf">2018 EXECOM</a></h4></font> -->


		<form action="fun/php0.php" method='post'>

			<input type="text" name="b1" placeholder="Full Name" required>

			<center>
				<center><input onclick="checking()" type="submit" name="login" value="SUBMIT" class="btn btn-primary" />
					<br>
					<h5><b>
							<font color='red'>
								<?php
								ini_set('session.gc_maxlifetime', 86400);
								session_start();

								if ($_SESSION['incorrect'] == 2) {

									echo 'Invalid Name...! Please try again.';
								}



								?>

							</font>
							</font>
						</b></h5>

					</from>
				</center>

				</div>
			</center>
			<div style="position: fixed; left: 0; bottom: -5px; text-align: center; padding:0px;">
						<center>Powered by<br>
						<img src="../../img/pp1.jpg"  width="100%">
					</div>
				<script src="js/jquery-1.10.2.js"></script>
				<script src="js/bootstrap.min.js"></script>
</body>

</html>