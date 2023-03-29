<?php

	session_start();

	if(isset($_SESSION['abc'])){
		echo "welcome to your ADMIN profile page!";
	}else{
		header("location: login.php");
	}


?>