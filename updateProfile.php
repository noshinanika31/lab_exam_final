<?php
	require_once('db.php');
	session_start();

if(isset($_POST['update'])){

	//catch data
	$name 				= mysql_real_escape_string(trim($_POST['name'])) ;
	$contactno 				= mysql_real_escape_string(trim($_POST['contactno']));
	$userName 			= mysql_real_escape_string(trim($_POST['userName']));
	$password 			= mysql_real_escape_string(trim($_POST['password']));
	$confirmPassword 	= mysql_real_escape_string(trim($_POST['confirmPassword']));
	$companyname 	= mysql_real_escape_string(trim($_POST['cname']));

	//validate data

		if($name == "" || $contactno == "" || $userName == "" || $password == ""||$companyname == ""){
			header("location: edit_profile.php?status=errorNull");
		}else{

			$conn = getConnection();
			$sql = "UPDATE user SET name='$name', contactno='$contactno', companyname='$cname',  WHERE username='".$_SESSION['uname']."'";

			echo $sql;

			if(mysqli_query($conn, $sql)){

				header("location:edit_profile.php?status=success");
			}else{
				header("location:edit_profile.php?status=dbError");
			}
		}
}
	
?>