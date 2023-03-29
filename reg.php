<fieldset>
    <legend><b>REGISTRATION</b></legend>

	<form method="post" action="regCheck.php">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>First Name</td>
				<td>:</td>
				<td><input name="First_Name" type="text" value=""></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Last Name</td>
				<td>:</td>
				<td><input name="Last_Name" type="text" value=""></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input name= "Email" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="Password" type="password"></td>
				<td></td>
			</tr>

			
			<tr><td colspan="4"><hr/></td></tr>
			<tr><td>Confirm Password</td>
				<td>:</td>
				<td><input name="Confirm_Password" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
				
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Gender</legend>    
						<input name="gender" type="radio" value="male">Male
						<input name="gender" type="radio" value="Female">Female
						<input name="gender" type="radio" value="Other">Other
					</fieldset>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Date of Birth</legend>    
						<input type="text" size="2" name="day" />/
						<input type="text" size="2" name="month" />/
						<input type="text" size="4" name="year" />
						<font size="2"><i>(dd/mm/yyyy)</i></font>
					</fieldset>
				</td>
				<td></td>
			</tr>
			
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>User Type</legend>
						<input name="userType" type="radio" value="student">student     
						<input name="userType" type="radio" value="teacher">Teacher
						<input name="userType" type="radio" value="admin">Admin
						
					</fieldset>
				</td>
				<td></td>
			</tr>
			
		</table>
		<hr/>
		<input type="submit" name="sumbit" value="sumbit">
		
	</form>
</fieldset>