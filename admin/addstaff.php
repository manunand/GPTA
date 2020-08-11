<!DOCTYPE html>
<html>
<head>
	<title>GPT Athani | Add Staff</title>
</head>
<body style="background-color:">
	<header class="header">
		<?php
			include 'navbar.php';
		?>
		<div class="container">
			<div  class="container" style="width: 70%;background-color: transparent; border:solid thin black;border-radius: 10px;">
				<h1 align="center" class="w3-animate-top">STAFF DETAILS</h1><br>
				<form  class="form-horizontal w3-animate-zoom" action="addstaffscript.php" method="POST">
					<div class="form-group">
						<label class="control-label col-sm-2" for="name">Name:</label>
						<div class="col-sm-9">
							<input type="text" name="name" style="background-color: transparent;" class="form-control" id="name" placeholder="Enter Your Name" required="">
						</div>
					</div><br>
					<div class="form-group">
						<label class="control-label col-sm-2" for="Gender">Gender:</label>
						<div class="container" style="padding-left: 17%">
							<label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
							<label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
						</div>
					</div><br>
					<div class="form-group">
						<label class="control-label col-sm-2" for="branch">Branch</label>
						<div class="col-sm-9">
							<select name="branch" class="form-control" id="branch" required="" style="background-color: transparent;">
								<option disabled selected>Choose Department</option>
								<option value="CSE">Computer Science & Engg</option>
								<option value="ECE">Electromics and communication Engg</option>
								<option value="CIVIL">Civil Engineering</option>
								<option value="MECH">Mechanical Engineering</option>
								<option value="OFFICE">Office Staff</option>
							</select>
						</div>
					</div><br>
					<div class="form-group">
						<label class="control-label col-sm-2" for="email">Email:</label>
						<div class="col-sm-9">
							<input type="email" name="email" style="background-color: transparent;" class="form-control" required="" id="email" placeholder="Enter email">
						</div>
					</div><br>
					<div class="form-group">
						<label class="control-label col-sm-2" for="phone">Phone Number:</label>
						<div class="col-sm-9">
							<input type="Number" name="phone" style="background-color: transparent;" class="form-control" required="" id="phone" placeholder="Enter Your Phone Number">
						</div>
					</div><br>					
					<div class="form-group">
						<label class="control-label col-sm-2" for="address">Address</label>
						<div class="col-sm-9">
							<textarea name="address" style="background-color: transparent;" class="form-control" required="" id="address" placeholder="Enter Your Address"></textarea>
						</div>
					</div><br>
					<div class="form-group">
						<label class="control-label col-sm-2" for="desig">Desigration:</label>
						<div class="col-sm-9">
							<select name="desig" class="form-control" id="desig" required="" style="background-color: transparent;" required="">
								<option></option>
								<option value="Principal">Principal</option>
								<option value="HOD">HOD</option>
								<option value="Assistant Professor">Assistant Professor</option>
								<option value="Non Teaching">Non Teaching</option>
							</select>
						</div>
					</div><br>
					<div class="form-group">
						<div class="container" align="center">
							<button type="submit" class="btn btn-info" name="submit"> Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</header>
</body>
</html>