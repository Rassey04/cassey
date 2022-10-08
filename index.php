<!DOCTYPE html>
<html>
<head> 

   <title>Registration Form</title>

  </head>
<body>

<h2> Registation Form </h2>
	<form name= "register" action="process1.php" method="post">
		<p>First Name: <input type="text" name="first"/></p>
		<p>Middle Name: <input type="text" name="middle"/></p>
		<p>Last Name: <input type="text" name="last"/></p>
		<p>Status: 
			<input type="radio" name="status" value="enrolled">Enrolled
			<input type="radio" name="status" value="notEnrolled">Not Enrolled
			</p>
		<p>Username: <input type="username" name="user"/></p>
		<p>Password: <input type="password" name="pw"/></p>
		<p>Confirm Password: <input type="password" name="cpassword"/></p>

		<p><input type="submit" name="submit" value="Sign In" /> 
&nbsp;&nbsp;&nbsp;
<a href="myform1.php"> Clear</a>
	</form>

</body>
</html>