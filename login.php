<?php
	if(isset($_GET['status'])){
		$status = $_GET['status'];

		if($status == "invaliduser"){
			echo "Invalid username/password";
		}else if($status == "nullvalue"){
			echo "username/password can't be empty";
		} 		
		
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<fieldset>
	<legend>LOGIN</legend>
		<form method="post" action="logCheck.php">
			User Name: <input type="text" name="username"/><br/>
			Password  : <input type="password" name="password"/><br/>
			Remember me:
			</br>
			<input type= "radio" name="rem" />yes
			<input type= "radio" name="rem" />no
			</br>
			<input type="submit" name="submit" value="Submit"/>
			<a href="reg.php" ><b>Sign Up</b></a>

		</form>
	</fieldset>
</body>
</html>