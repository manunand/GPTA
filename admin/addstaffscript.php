<?php
ini_set('display_errors', 1);
error_reporting (E_ALL);

$servername ="localhost";
$username= "root";
$password= "password";
$dbname = "gpta";
$conn = mysqli_connect($servername, $username, $password,$dbname );
if ($conn->connect_error) {
    die("Connection failed: " .mysqli_connect_error());
}

if (isset($_POST['submit'])) {
$name =($_POST['name']);
$gender =($_POST['gender']);
$branch =($_POST['branch']);
$phone=($_POST['phone']);
$email =($_POST['email']);
$address =($_POST['address']);
$desig = ($_POST['desig']);
						$query="insert into admin(name,gender,branch,email,phone,address,desig) values('$name','$gender','$branch','$email','$phone','$address','$desig')";
						$res = mysqli_query($conn,$query);
						if(mysqli_affected_rows($conn)>0) {
							?><br><br><br>
							<div class="alert alert-success">
						  		<strong>Success!</strong> Your response has been successfully recorded.Thank you.
								<meta http-equiv="refresh" content="6;url=index.php" />
							</div>

							<?php
						}
						else {
							?>
							<br><br><br>
							<div class="alert alert-danger">
						  		<strong>Sorry!</strong> Please try Again. 
						  		<meta http-equiv="refresh" content="7;url=addstudent.php" />
							</div>
							<?php
						} 
				}
?>