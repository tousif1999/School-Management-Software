<?php
	  if(isset($_REQUEST['sumbit']))
	  {
    
        $username = $_REQUEST['First_Name'];
        $password = $_REQUEST['Password'];
        $email = $_REQUEST['email'];
		$userType = $_REQUEST['userType'];

        if($username == "" && $password == "" && $email == "" && $userType =="")
		{
            echo "Null username/password/email";
        }
		else
		{
            $file = fopen('user.txt', 'a');
            $data = $username."|".$password."|".$email."|".$userType."\r\n";
            fwrite($file, $data);
            fclose($file);
            header('location: login.php');
        }
    }
	else
	{
        echo "invalid request!";
    }



	
		 
 



