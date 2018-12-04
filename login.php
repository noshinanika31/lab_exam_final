<?php
	
	if(isset($_GET['status'])){
		$status = $_GET['status'];
	}
?>

<fieldset>
    <legend><b>LOGIN</b></legend>
    <form method="POST" action="logCheck.php">
        <table>
            <tr>
                <td>User Name</td>
				<td>:</td>
                <td><input type="text" id="uname"  name="uname"> <span id="nameError"> </span></td>
            </tr>
            <tr>
                <td>Password</td>
				<td>:</td>
                <td><input type="password" id="pass" name="pass">  <span id="passError"> </span></td>
            </tr>
        </table>
        <hr />
		<input name="remember" type="checkbox">Remember Me
		<br/><br/>
        <input type="submit" value="Submit" name="submit">
    </form>
</fieldset>


<?php

if(isset($status)){
	if($status == 'error'){
		echo " Invalid User! Try again...</h1>";
	}else if($status == 'dbError'){
		echo "Something wrong! Please try again...</h1>";
	}
}
	
?>
