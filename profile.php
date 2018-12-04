<?php
	session_start();
	require_once('db.php');

    if(isset($_SESSION['name'])){

    	$conn = getConnection();
    	$sql = "select * from user where name='".$_SESSION['uname']."'";
    	$result = mysqli_query($conn, $sql);
    	$row = mysqli_fetch_assoc($result);
?>

<fieldset>
    <legend><b>PROFILE</b></legend>
	<form>
		<br/>
		<table cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><?=$row['name']?></td>
				<td rowspan="7" align="center">
					
				</td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Contact no</td>
				<td>:</td>
				<td><?=$row['contactno']?></td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>			
			<tr>
				<td>user name</td>
				<td>:</td>
				<td><?=$row['uname']?></td>
			</tr>
			<tr><td colspan="3"><hr/></td></tr>
			
		</table>	
        <hr/>
        <a href="home.php">go back</a>	
	</form>
</fieldset>

<?php

}else{
    header("location: login.php");
}
?>