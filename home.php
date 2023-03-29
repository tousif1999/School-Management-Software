

 <nav  align="center" height="90px">
  <a href="home.php"><b>Home</b></a>||
  <a href="admission.php"><b>Admission</b>||
  <a href="adminstration.php"><b>Adminstration</b></a>||
  <a href="notice.php"><b>notice</b></a>||  
  <a href="galery.php"><b>Gallery</b></a> ||
  <a href="contact.php"><b>Contacts</b></a> ||
  <a href="about.php"><b>About US</b></a> ||
  <a href="student.php"><b>student</b></a> || 

  <a href="reg.php" align="Right"><b>registration</b></a>  ||
</nav>/*
<html>
	<body>
<table border="0" width="100%" height="500px">
		<tr valign="top">
			<td align="center" width="20%">
				<table border="1"  width="100%" >
					<tr>
						<td align="center" height="50px">
							<a href="adminHome.php">Home</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a href="adminNotice.php">Notice</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a href="adminAddNotice.php">Add Notice</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a href="adminUsers.php">Users</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a href="adminAddUser.php">Add User</a>
						</td>
					</tr>
				</table>
			</td>
			<td width="10%"></td>
			<td width="70%">
				<table border="1" width="80%">
					<tr>
						<td align="center" width="100px"><b>Date</b></td>
						<td align="center" width="200px"><b>Title</b></td>
						<td align="center"><b>Details</b></td>
						<td align="center" width="100px"><b>Action</b></td>
					</tr>

					</body>
			</html>
<?php
	
	
	session_start();
	
	if(isset($_SESSION['abc']))
	{
		echo "<a href='logout.php'> logout</a> <br/><br/>";
		

		$myfile = fopen("user.txt", "r");
		$data = fread($myfile, filesize("user.txt"));
		fclose($myfile);
		$arr = explode('|', $data);
		$temp=$arr[2];
		echo $temp;
		echo "</br>";
	   echo strlen($temp);
		
	}
	else{
		header("location: login.php");
	}

?>