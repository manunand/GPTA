
<?php 
include ('../config.php');
$servername ="localhost";
$username= "root";
$password= "password";
$dbname = "gpta";


$conn = mysqli_connect($servername, $username, $password,$dbname );
if ($conn->connect_error) {
    die("Connection failed:");
}
$query="select * from admin where id like '".$id."'";
$sql=mysqli_query($conn,$query);
$row1= mysqli_fetch_assoc($sql);

$name=$row1['name'];
$gender=$row1['gender'];
$branch=$row1['branch'];
$email=$row1['email'];
$phone=$row1['phone'];
$address=$row1['address'];
$desig=$row1['desig'];
if (isset($_POST['submit'])) {

  $name = $_POST["name"];

   $gender = $_POST["gender"];

   $branch = $_POST["branch"];

  $email= $_POST["email"]; 

  $phone=$_POST["phone"];

$address=$_POST['address'];

$desig=$_POST['desig'];

  $query="update admin set name='".$name."',gender='".$gender."',branch='".$branch."',email='".$email."',phone='".$phone."',address='".$address."',desig='".$desig."' where id like '".$id."'";
$res = mysqli_query($conn,$query);
if(mysqli_affected_rows($conn)>0) {
  ?><br>
  <div class="alert alert-success">
      <strong>Success!</strong> Your response has been successfully updated.
    <meta http-equiv="refresh" content="2;url=index.php" />
  </div>

  <?php
}
else {
  ?>
  <br>
  <div class="alert alert-danger">
      <strong>Sorry!Same Data</strong>Nothing is Updated.Thank you
      <meta http-equiv="refresh" content="2;url=index.php" />
  </div>
  <?php
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	 <?php 
include ('navbar.php');
?>
</head>
<style type="text/css">
  
label
{
  font-weight: bold;
}

h1
{
  font-weight: bold;
}

</style>

<body style="background-image: url(../img/banner.jpg);">

<div  class="container" style="width: 70%;background-color: transparent;  border:solid thin black;border-radius: 10px;">
<h1 align="center" class="w3-animate-top">Edit Profile</h1><br>
<form  class="form-horizontal w3-animate-zoom" action="update.php" method="POST">

 <div class="form-group">
 <label class="control-label col-sm-2" for="name">Name:</label> 
     <div class="col-sm-9">
      <input type="text" name="name" style="background-color: transparent;" class="form-control" id="name" placeholder="Enter Your Name" required="" value="<?php echo "$name"; ?>"> 
     </div>
 </div><br>

  <div class="form-group">
 <label class="control-label col-sm-2" for="Gender">Gender:</label>
 <div class="container" style="padding-left: 17%">
 <label class="radio-inline"><input type="radio" name="gender" value="Male" <?php if($gender== 'Male')  echo "checked"; ?>>Male</label>
    <label class="radio-inline"><input type="radio" name="gender" value="Female" <?php if($gender=='Female')  echo "checked"; ?>>Female</label>
 </div>
 </div><br>

<div class="form-group">
 <label class="control-label col-sm-2" for="branch">Branch</label>
     <div class="col-sm-9">
<select name="branch" class="form-control" id="branch" required="" style="background-color: transparent;">
  <option  value="<?php echo $branch; ?>"><?php echo $branch; ?></option>
    <option value="CSE">Computer Science and Engg</option>
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
      <input type="email" name="email" style="background-color: transparent;" class="form-control" required="" id="email" placeholder="Enter email" value="<?php echo $email; ?>">
    </div>
  </div><br>
  <div class="form-group">
 <label class="control-label col-sm-2" for="phone">Phone Number:</label>
     <div class="col-sm-9">
      <input type="Number" name="phone" style="background-color: transparent;" class="form-control" required="" id="phone" placeholder="Enter Your Phone Number" value="<?php echo $phone; ?>">
     </div>
 </div><br>

  <div class="form-group">
 <label class="control-label col-sm-2" for="address">Address</label>
     <div class="col-sm-9">
      <textarea name="address" style="background-color: transparent;" class="form-control" required="" id="address" placeholder="Enter Your Address"><?php echo $address; ?></textarea>
     </div>
 </div><br>
 <div class="form-group">
        <label class="control-label col-sm-2" for="desig">desig:</label>
        <div class="col-sm-9"> 
           <select name="desig" class="form-control" id="desig" required="" style="background-color: transparent;" required="">
                <option  value="<?php echo $desig; ?>"><?php echo $desig; ?></option>
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
</body>
</html>
