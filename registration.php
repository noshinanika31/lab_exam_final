<?php
	
	if(isset($_GET['status'])){
		$status = $_GET['status'];
	}
?>

<fieldset>
    <legend><b>REGISTRATION</b></legend>

	<form method="POST" action="regCheck.php">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text"></td>
				<td></td>
			</tr>
			
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Company name</td>
				<td>:</td>
				<td><input name="cname" type="text"></td>
				<td></td>
			</tr>
			
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Contact no</td>
				<td>:</td>
				<td>
					<input name="contactno" type="text">
					<abbr title="hint: 016734347809"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>User Name</td>
				<td>:</td>
				<td><input name="userName" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password"></td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
			Type: 		<select name="type">
							<option value="admin">Admin</option>
							<option value="user">User</option>
						</select>
			<tr><td colspan="4"><hr/></td></tr>
			
		</table>
		<hr/>
		<input type="submit" value="Submit" name="submit">
		<input type="reset">
		
	</form>
</fieldset>

<?php

if(isset($status)){
	if($status == 'error'){
		echo "<h1 style='color:red;'> Null value found! please submit again....</h1>";
	}else if($status == ""){
		echo "";
	}else if($status == 'passError'){
		echo "<h1 style='color:red;'>Password and confirm pass didn't match!</h1>";
	}else if($status == 'dbError'){
		echo "<h1 style='color:red;'>Something wrong! Please try again...</h1>";
	}else {
		echo "<h1 style='color:green;'> Success!</h1>";
	}
}
	
?>