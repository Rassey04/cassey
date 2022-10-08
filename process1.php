<!DOCTYPE html>
<html>

<head> 

   <title>Registration Form</title>

  </head>

<body>

	<h2> Registation Successful!</h2>
<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
		
		if (isset($_POST['submit'])) {
				 if (empty($_POST["first"])) {
   echo "Please Enter First name "."<br/>";
  } else {
			$firstName = $_POST['first'];
			echo "First Name: " .$firstName ."<br/>"; }


if (empty($_POST["middle"])) {
   echo "Please Enter Middle name "."<br/>";
  } else {
			$middleName = $_POST['middle'];
			echo "Middle Name: " .$middleName ."<br/>";}

if (empty($_POST["last"])) {
   echo "Please Enter Last name "."<br/>";
  } else {
			$lastName = $_POST['last']; 
			echo "Last Name: " .$lastName ."<br/>";}
			$status = $_POST['status'];

			echo "Status: " .$status ."<br/>";
			$username = $_POST['user'];

if (empty($_POST["username"])) {
   echo "Please Enter  username "."<br/>";
  } else {
			echo "Username: " .$username ."<br/>";}
if (empty($_POST["pw"])) {
   echo "Please Enter password "."<br/>";
  } else {
			$password = $_POST['pw'];
			echo "Password: " .$password ."<br/>";}
if ($_POST["pw"] === $_POST["cpassword"]) {
   // success!
}
else {
   echo "Password does not match. "."<br/>";
}
			
		}





?>



<br/><br/><br/>
<a href="index.php"> Clear</a>

</body>
</html>