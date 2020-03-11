<?php
	include '../langconf.php';
	include '../config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="icon" type="text/css" href="../img/Logo.jpg">
	<meta  name="viewport" content="width=device-width,initial-scale=1">
	<script src="../js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<script src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<nav class="navbar navbar-style">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php"><img class="logo" src="../img/Logo.jpg"><?php echo $lang['title']; ?></a><br><h6 style="font-size: 70%;">Affiliated to Board of Technical Examination</h6>
			</div>
			<div class="collapse navbar-collapse" id="micon">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php"><b><?php echo $lang['home']; ?></b></a></li>
				<li><a href="addstaff.php"><b>Add Staff</b></a></li>
				<li class="dropdown">
		        	<a class="dropdown-toggle" data-toggle="dropdown" href="#" ><b>View Staff</b><span class="caret"></span></a>
		          	<ul class="dropdown-menu" style="background-color: transparent;">
			            <li><a href="civilstaff.php" ><b>Civil Engineering Staff</b></a></li>
			            <li><a href="csestaff.php" ><b>Computer Science Engg Staff</b></a></li>
			            <li><a href="ecestaff.php" ><b>Electronics and Communication Staff</b></a></li>
			            <li><a href="mestaff.php" ><b>Mechanical Engineering Staff</b></a></li>
			            <li><a href="officestaff.php" ><b>Office Staff</b></a></li>
			        </ul>
		        </li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-size: 15px"><b>Hello <?php echo "$username";?></b><span class="caret"></span></a>
					<ul class="dropdown-menu" style="background-color: transparent;">
						<li><a href="update.php" style="font-size: 15px"><b>Edit Profile</b></a></li>
						<li><a href="changepass.php" style="font-size: 15px"><b>Change Password</b></a></li>
						<li><a href="logout.php" style="font-size: 15px"><span class="glyphicon glyphicon-log-out"></span><b>Logout</b></a></li>
					</ul>
				</li>
			</ul>
			</div>
		</div>
	</nav>
	<div class="lang_links bg-dark">
		<a href="index.php?lang=en"><?php echo $lang['lang_en']; ?></a> | <a href="index.php?lang=kn"><?php echo $lang['lang_kn']; ?></a>
	</div>
</body>
</html>