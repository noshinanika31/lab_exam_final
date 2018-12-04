<?php
	session_start();
	require_once('db.php');

    if(isset($_SESSION['name'])){

    	$conn = getConnection();
    	$sql = "select * from employee where username='".$_SESSION['uname']."'";
    	$result = mysqli_query($conn, $sql);
    	$row = mysqli_fetch_assoc($result);
?>

<fieldset>
    <legend><b>EDIT PROFILE</b></legend>
	<form method="POST" action="updateProfile.php">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text" value="<?=$row['name']?>"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Contactno</td>
				<td>:</td>
				<td>
					<input name="Contactno" type="text" value="<?=$row['contactno']?>">
					<abbr title="hint: 01515219788"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>				
			<tr><td colspan="4"><hr/></td></tr>
			
		</table>
		<hr/>
		<input type="submit" value="Submit" name="update">		
	</form>
</fieldset>

<?php

}else{
    header("location: login.php");
}
?>