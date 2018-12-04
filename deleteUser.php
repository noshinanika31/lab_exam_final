<?php
    session_start();
    require_once('db.php');

    if(isset($_SESSION['name'])){

    		$contactno = $_GET['contactno'];
    		
			$conn = getConnection();
			$sql = "DELETE FROM `employee` WHERE contactno='$contactno'";

			if(mysqli_query($conn, $sql)){

				header("location: delete_user.php?status=success");
			}else{
				header("location: delete_user.php?status=dbError");
			}
	}
?>