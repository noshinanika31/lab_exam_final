<?php
	session_start();
	require_once('db.php');

	$uname 	= $_POST['uname'];
	$pass 	= $_POST['pass'];

	if($uname == "" || $pass == ""){
		header("location: login.php?status=error");
	}else{

		$conn = getConnection();

		$sql = "select * from user where username='".$uname."' and password='".$pass."'";
		$result = mysqli_query($conn, $sql);

		$count =  mysqli_num_rows($result);

		if($count == 1){
			
			$row = mysqli_fetch_assoc($result);
			$_SESSION['name'] = $row['name'];
			$_SESSION['pass'] = $row['pass'];
			$_SESSION['uname'] = $row['username'];
			$_SESSION['type'] = $row['type'];

			header("location: home.php");
		}else{
			header("location:login.php?status=error");
		}
		
	}
?>