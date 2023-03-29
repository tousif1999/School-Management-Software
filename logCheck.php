<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$ust	  = $_POST['userType'];

		$isValid = "";

		if($username == "" && $password == "" ){
			header("location: login.php?status=nullvalue");
		}
		else{

			$myfile = fopen("user.txt", "r");
			
			while(!feof($myfile))
			{
				$data = fgets($myfile);
				$arr = explode('|', $data);

				if($arr[0] == $username && $arr[1] == $password ){
					
					$_SESSION['abc'] = "validuser";

					$isValid = "valid";
					$cookie_name =$_POST['rem'];
					$cookie_value = "ab";
					setcookie($cookie_name, $cookie_value, time() + 20, "/");
				}
			}
			
			fclose($myfile);

			if($isValid == "valid"){
				
				header("location: home.php");
			}else{
				header("location: login.php?status=invaliduser");
			}
			
			
		}

	}else{
		echo "invalid Request!";
	}
	
?>